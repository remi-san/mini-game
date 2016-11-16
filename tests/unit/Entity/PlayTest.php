<?php

namespace MiniGame\Test\Entity;

use Faker\Factory;
use MiniGame\Entity\PlayerId;
use MiniGame\Exceptions\IllegalMoveException;
use MiniGame\GameResult;
use MiniGame\Test\Mock\Entity\Playable;
use MiniGame\Test\Mock\Move\ManagedMove;
use MiniGame\Test\Mock\Move\UnmanagedMove;

class PlayTest extends \PHPUnit_Framework_TestCase
{
    /** @var ManagedMove */
    private $managedMove;

    /** @var UnmanagedMove */
    private $unmanagedMove;

    /** @var PlayerId */
    private $playerId;

    /** @var Playable */
    private $serviceUnderTest;

    public function setUp()
    {
        $faker = Factory::create();

        $this->managedMove = new ManagedMove();
        $this->unmanagedMove = new UnmanagedMove();

        $this->playerId = PlayerId::create($faker->uuid);

        $this->serviceUnderTest = new Playable();
    }

    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * @test
     */
    public function itShouldPlayAndReturnAResult()
    {
        $gameResult = $this->serviceUnderTest->play($this->playerId, $this->managedMove);

        $this->assertInstanceOf(GameResult::class, $gameResult);
    }

    /**
     * @test
     */
    public function itShouldFailPlayingIfMoveIsNotRecognized()
    {
        $this->setExpectedException(IllegalMoveException::class);

        $this->serviceUnderTest->play($this->playerId, $this->unmanagedMove);
    }
}
