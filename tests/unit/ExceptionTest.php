<?php
namespace MiniGame\Test;

use MiniGame\Exceptions\IllegalMoveException;
use MiniGame\Exceptions\IllegalOptionException;
use MiniGame\Test\Mock\GameObjectMocker;

class ExceptionTest extends \PHPUnit_Framework_TestCase {
    use GameObjectMocker;

    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * @test
     */
    public function testIllegalMoveException() {

        $player = $this->getPlayer(33, 'Bugs');
        $miniGame = $this->getMiniGame(1, 'Game');
        $result = $this->getGameResult('result');
        $move = $this->getMove('Up');

        $exception = new IllegalMoveException($player, $miniGame, $result, $move, 'Oh! oh!');

        $this->assertEquals($player, $exception->getPlayer());
        $this->assertEquals($miniGame, $exception->getMiniGame());
        $this->assertEquals($result, $exception->getResult());
        $this->assertEquals($move, $exception->getMove());
    }

    /**
     * @test
     */
    public function testIllegalOptionException() {

        $optionName = 'opName';
        $optionValue = 'opValue';
        $exception = new IllegalOptionException('Bad option!', $optionName, $optionValue);

        $this->assertEquals($optionName, $exception->getOptionName());
        $this->assertEquals($optionValue, $exception->getOptionValue());
    }

} 