<?php
namespace MiniGame\Test\Options;

use MiniGame\Entity\Player;
use MiniGame\Test\Mock\Options\TestGameOptions;

class GameOptionsTest extends \PHPUnit_Framework_TestCase
{
    /** @var Player */
    private $player;

    public function setUp()
    {
        $this->player = \Mockery::mock(Player::class);
    }

    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * @test
     */
    public function itShouldCreateGameOptions()
    {
        $options = new TestGameOptions([$this->player]);

        $this->assertEquals([$this->player], $options->getPlayerOptions());
    }
}
