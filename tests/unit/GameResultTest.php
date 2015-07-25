<?php
namespace MiniGame\Test;

use MiniGame\Player;
use MiniGame\Test\Mock\GameObjectMocker;
use MiniGame\Test\Mock\TestGameResult;

class GameResultTest extends \PHPUnit_Framework_TestCase
{
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
        $options = new TestGameResult($this->player);

        $this->assertEquals($this->player, $options->getPlayer());
    }
}
