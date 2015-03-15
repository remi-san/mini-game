<?php
namespace MiniGame\Test;

use MiniGame\Exceptions\IllegalMoveException;
use MiniGame\Test\Mock\GameObjectMocker;

class ExceptionTest extends \PHPUnit_Framework_TestCase {
    use GameObjectMocker;

    public function testIllegalMoveException() {

        $player = $this->getPlayer(33, 'Bugs');
        $miniGame = $this->getMiniGame(1, 'Game');
        $result = $this->getGameResult('result');
        $move = 'Up';

        $exception = new IllegalMoveException($player, $miniGame, $move, $result, 'Oh! oh!');

        $this->assertEquals($player, $exception->getPlayer());
        $this->assertEquals($miniGame, $exception->getMiniGame());
        $this->assertEquals($result, $exception->getResult());
        $this->assertEquals($move, $exception->getMove());
    }

} 