<?php
namespace MiniGame\Test;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\Player;
use MiniGame\Test\Mock\GameObjectMocker;
use MiniGame\Test\Mock\TestGameOptions;

class GameOptionsTest extends \PHPUnit_Framework_TestCase
{
    use GameObjectMocker;

    const LIVES = 5;

    /**
     * @var MiniGameId
     */
    private $id;

    /**
     * @var Player
     */
    private $player;

    public function setUp()
    {
        $this->id = $this->getMiniGameId(666);
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
        $options = new TestGameOptions($this->id, array($this->player));

        $this->assertEquals($this->id, $options->getId());
        $this->assertEquals(array($this->player), $options->getPlayers());
    }
}
