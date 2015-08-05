<?php
namespace MiniGame\Test;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\PlayerId;
use MiniGame\Test\Mock\GameObjectMocker;
use MiniGame\Test\Mock\TestGameResult;

class GameResultTest extends \PHPUnit_Framework_TestCase
{
    use GameObjectMocker;

    /**
     * @var PlayerId
     */
    private $playerId;

    /**
     * @var MiniGameId
     */
    private $gameId;

    public function setUp()
    {
        $this->playerId = $this->getPlayerId(42);
        $this->gameId = $this->getMiniGameId(666);
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
        $options = new TestGameResult($this->gameId, $this->playerId);

        $this->assertEquals($this->playerId, $options->getPlayerId());
        $this->assertEquals($this->gameId, $options->getGameId());
    }
}
