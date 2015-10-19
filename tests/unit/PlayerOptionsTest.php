<?php
namespace MiniGame\Test;

use MiniGame\Test\Mock\GameObjectMocker;
use MiniGame\Test\Mock\TestPlayerOptions;

class PlayerOptionsTest extends \PHPUnit_Framework_TestCase
{
    use GameObjectMocker;

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
    public function test()
    {
        $id = $this->getPlayerId(42);
        $gameId = $this->getMiniGameId(666);

        $options = new TestPlayerOptions($id, $gameId, 'toto');

        $this->assertEquals($id, $options->getPlayerId());
        $this->assertEquals($gameId, $options->getGameId());
        $this->assertEquals('toto', $options->getName());
    }
}
