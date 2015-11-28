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
        $move = $this->getMove('Up');

        $exception = new IllegalMoveException($move, 'Oh! oh!');

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
