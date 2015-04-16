<?php
namespace MiniGame\Test;

use MiniGame\Options\AbstractGameOptions;
use MiniGame\Player;
use MiniGame\Result\AbstractGameResult;
use MiniGame\Test\Mock\GameObjectMocker;

class TestGameResult extends AbstractGameResult {
    public function getAsMessage()
    {
        return '';
    }
}

class GameResultTest extends \PHPUnit_Framework_TestCase {
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

    /**
     * @test
     */
    public function test()
    {
        $options = new TestGameResult($this->player);

        $this->assertEquals($this->player, $options->getPlayer());
    }
} 