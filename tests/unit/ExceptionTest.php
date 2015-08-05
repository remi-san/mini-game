<?php
namespace MiniGame\Test;

use MiniGame\Exceptions\IllegalMoveException;
use MiniGame\Exceptions\IllegalOptionException;
use MiniGame\Test\Mock\GameObjectMocker;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
    use GameObjectMocker;

    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * @test
     */
    public function testIllegalMoveException()
    {

        $player = $this->getPlayerId(33);
        $miniGame = $this->getMiniGameId(1);
        $result = $this->getGameResult('result');
        $move = $this->getMove('Up');

        $exception = new IllegalMoveException($player, $miniGame, $result, $move, 'Oh! oh!');

        $this->assertEquals($player, $exception->getPlayerId());
        $this->assertEquals($miniGame, $exception->getMiniGameId());
        $this->assertEquals($result, $exception->getResult());
        $this->assertEquals($move, $exception->getMove());
    }

    /**
     * @test
     */
    public function testIllegalOptionException()
    {

        $optionName = 'opName';
        $optionValue = 'opValue';
        $exception = new IllegalOptionException('Bad option!', $optionName, $optionValue);

        $this->assertEquals($optionName, $exception->getOptionName());
        $this->assertEquals($optionValue, $exception->getOptionValue());
    }
}
