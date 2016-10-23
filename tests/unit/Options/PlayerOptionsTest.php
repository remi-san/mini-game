<?php
namespace MiniGame\Test\Options;

use Faker\Factory;
use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\PlayerId;
use MiniGame\Test\Mock\Options\TestPlayerOptions;

class PlayerOptionsTest extends \PHPUnit_Framework_TestCase
{
    /** @var PlayerId */
    private $playerId;

    /** @var MiniGameId */
    private $miniGameId;

    /** @var string */
    private $name;

    public function setUp()
    {
        $faker = Factory::create();

        $this->playerId = \Mockery::mock(PlayerId::class);
        $this->miniGameId = \Mockery::mock(MiniGameId::class);
        $this->name = $faker->name;
    }

    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * @test
     */
    public function test()
    {
        $options = new TestPlayerOptions($this->playerId, $this->miniGameId, $this->name);

        $this->assertEquals($this->playerId, $options->getPlayerId());
        $this->assertEquals($this->miniGameId, $options->getGameId());
        $this->assertEquals($this->name, $options->getName());
    }
}
