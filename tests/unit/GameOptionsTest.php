<?php
namespace MiniGame\Test;

use MiniGame\Entity\Player;
use MiniGame\Test\Mock\GameObjectMocker;
use MiniGame\Test\Mock\TestGameOptions;

class GameOptionsTest extends \PHPUnit_Framework_TestCase
{
    use GameObjectMocker;

    const LIVES = 5;

    /**
     * @var \MiniGame\Entity\Player
     */
    private $player;

    public function setUp()
    {
        $this->player = $this->getPlayer(42, 'douglas');
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
        $options = new TestGameOptions(self::LIVES, array($this->player));

        $this->assertEquals(self::LIVES, $options->getLives());
        $this->assertEquals(array($this->player), $options->getPlayers());
    }
}
