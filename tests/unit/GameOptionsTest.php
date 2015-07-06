<?php
namespace MiniGame\Test;

use MiniGame\Options\AbstractGameOptions;
use MiniGame\Player;
use MiniGame\Test\Mock\GameObjectMocker;

class TestGameOptions extends AbstractGameOptions {}

class GameOptionsTest extends \PHPUnit_Framework_TestCase {
    use GameObjectMocker;

    const LIVES = 5;

    /**
     * @var Player
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
        $options = new TestGameOptions(self::LIVES);

        $this->assertEquals(self::LIVES, $options->getLives());
        $this->assertEquals(array(), $options->getPlayers());

        $options->addPlayer($this->player);
        $this->assertEquals(array(42 => $this->player), $options->getPlayers());

        $options = new TestGameOptions(self::LIVES, array($this->player));

        $this->assertEquals(self::LIVES, $options->getLives());
        $this->assertEquals(array($this->player), $options->getPlayers());
    }
} 