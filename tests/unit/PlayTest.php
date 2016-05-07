<?php

namespace MiniGame\Test;

use MiniGame\Entity\PlayerId;
use MiniGame\Exceptions\IllegalMoveException;
use MiniGame\Test\Mock\MyMove;
use MiniGame\Test\Mock\TestPlay;
use MiniGame\Test\Mock\UnmanagedMove;

class PlayTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * @test
     */
    public function testManagedMove()
    {
        $move = new MyMove();

        $play = new TestPlay();
        $return = $play->play(PlayerId::create(), $move);

        $this->assertTrue($return);
    }

    /**
     * @test
     */
    public function testUnmanagedMove()
    {
        $move = new UnmanagedMove();

        $play = new TestPlay();

        $this->setExpectedException(IllegalMoveException::class);

        $play->play(PlayerId::create(), $move);
    }
}
