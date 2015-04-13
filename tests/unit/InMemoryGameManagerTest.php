<?php
namespace MiniGame\Test;

use MiniGame\GameOptions;
use MiniGame\Manager\InMemoryGameManager;
use MiniGame\Test\Mock\GameObjectMocker;

class TestGameManager extends InMemoryGameManager {
    public function createMiniGame(GameOptions $options) {
        return null;
    }
}

class InMemoryGameManagerTest extends \PHPUnit_Framework_TestCase {
    use GameObjectMocker;

    const ID = 1;

    private $wordSelector;

    private $miniGame;

    private $player;

    public function setUp() {
        $this->wordSelector = \Mockery::mock('WordSelector\\WordSelector');

        $this->player = $this->getPlayer(1, 'user');

        $this->miniGame = $this->getMiniGame(self::ID, 'Game');
        $this->miniGame->shouldReceive('getPlayers')->andReturn(array($this->player));
    }

    /**
     * @test
     */
    public function testGetMiniGame() {

        $manager = new TestGameManager(array(self::ID,  $this->miniGame), array());

        $this->assertEquals($this->miniGame, $manager->getMiniGame(self::ID));
    }

    /**
     * @test
     */
    public function testGetNonExistingMiniGame() {

        $this->setExpectedException('\\MiniGame\\Manager\\Exceptions\\GameNotFoundException');

        $manager = new TestGameManager();
        $manager->getMiniGame(self::ID);
    }

    /**
     * @test
     */
    public function testGetActiveMiniGameForPlayer() {

        $manager = new TestGameManager(array(self::ID,  $this->miniGame), array($this->player->getId(),  $this->miniGame));

        $this->assertEquals($this->miniGame, $manager->getActiveMiniGameForPlayer($this->player));
    }

    /**
     * @test
     */
    public function testGetNonExistingActiveMiniGameForPlayer() {

        $this->setExpectedException('\\MiniGame\\Manager\\Exceptions\\GameNotFoundException');

        $manager = new TestGameManager();
        $manager->getActiveMiniGameForPlayer($this->player);
    }

    /**
     * @test
     */
    public function testDeleteMiniGame() {

        $this->setExpectedException('\\MiniGame\\Manager\\Exceptions\\GameNotFoundException');

        $manager = new TestGameManager(array(self::ID,  $this->miniGame));

        $this->assertEquals($this->miniGame, $manager->getMiniGame(self::ID));

        $manager->deleteMiniGame(self::ID);
        $manager->getMiniGame(self::ID);
    }

    /**
     * @test
     */
    public function testDeleteNonExistingMiniGame() {

        $this->setExpectedException('\\MiniGame\\Manager\\Exceptions\\GameNotFoundException');

        $manager = new TestGameManager();
        $manager->deleteMiniGame(self::ID);
    }

    /**
     * @test
     */
    public function testSaveMiniGame() {

        $manager = new TestGameManager();
        $manager->saveMiniGame($this->miniGame);

        $this->assertEquals($this->miniGame, $manager->getMiniGame(self::ID));
    }
} 