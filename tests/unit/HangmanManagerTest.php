<?php
namespace MiniGame\Test;

use MiniGame\Hangman\Manager\HangmanManager;
use MiniGame\Test\Mock\GameObjectMocker;

class HangmanManagerTest extends \PHPUnit_Framework_TestCase {
    use GameObjectMocker;

    const ID = 1;

    private $wordSelector;

    private $miniGame;

    public function setUp() {
        $this->wordSelector = \Mockery::mock('WordSelector\\WordSelector');

        $this->miniGame = $this->getMiniGame(self::ID, 'Game');
        $this->miniGame->shouldReceive('getPlayers')->andReturn(array());
    }

    /**
     * @test
     */
    public function testGetMiniGame() {

        $manager = new HangmanManager($this->wordSelector, array(self::ID,  $this->miniGame));

        $this->assertEquals($this->miniGame, $manager->getMiniGame(self::ID));
    }

    /**
     * @test
     */
    public function testGetNonExistingMiniGame() {

        $this->setExpectedException('\\MiniGame\\Manager\\Exceptions\\GameNotFoundException');

        $manager = new HangmanManager($this->wordSelector);
        $manager->getMiniGame(self::ID);
    }

    /**
     * @test
     */
    public function testDeleteMiniGame() {

        $this->setExpectedException('\\MiniGame\\Manager\\Exceptions\\GameNotFoundException');

        $manager = new HangmanManager($this->wordSelector, array(self::ID,  $this->miniGame));

        $this->assertEquals($this->miniGame, $manager->getMiniGame(self::ID));

        $manager->deleteMiniGame(self::ID);
        $manager->getMiniGame(self::ID);
    }

    /**
     * @test
     */
    public function testDeleteNonExistingMiniGame() {

        $this->setExpectedException('\\MiniGame\\Manager\\Exceptions\\GameNotFoundException');

        $manager = new HangmanManager($this->wordSelector);
        $manager->deleteMiniGame(self::ID);
    }

    /**
     * @test
     */
    public function testSaveMiniGame() {

        $manager = new HangmanManager($this->wordSelector);
        $manager->saveMiniGame($this->miniGame);

        $this->assertEquals($this->miniGame, $manager->getMiniGame(self::ID));
    }

    /**
     * @test
     */
    public function testCreateMiniGameWithUnsupportedOptions() {

        $this->setExpectedException('\\InvalidArgumentException');

        $manager = new HangmanManager($this->wordSelector);
        $manager->createMiniGame($this->getGameOptions());
    }

    /**
     * @test
     */
    public function testCreateMiniGameWithIncompleteOptions() {

        $this->setExpectedException('\\InvalidArgumentException');

        $manager = new HangmanManager($this->wordSelector);
        $manager->createMiniGame($this->getHangmanOptions());
    }

    /**
     * @test
     */
    public function testCreateMiniGameWithLevelOption() {

        $this->setExpectedException('\\InvalidArgumentException');

        $manager = new HangmanManager($this->wordSelector);
        $manager->createMiniGame($this->getHangmanOptions(null, null, 5));
    }

    /**
     * @test
     */
    public function testCreateMiniGameWithLengthOption() {

        $this->wordSelector->shouldReceive('getRandomWord')->andReturn('WORD')->once();

        $manager = new HangmanManager($this->wordSelector);
        $miniGame = $manager->createMiniGame($this->getHangmanOptions(null, 5));

        $this->assertInstanceOf('\\MiniGame\\Hangman\\Hangman', $miniGame);
        $this->assertEquals($miniGame, $manager->getMiniGame($miniGame->getId()));
    }

    /**
     * @test
     */
    public function testCreateMiniGameWithWordOption() {

        $manager = new HangmanManager($this->wordSelector);
        $miniGame = $manager->createMiniGame($this->getHangmanOptions('word'));

        $this->assertInstanceOf('\\MiniGame\\Hangman\\Hangman', $miniGame);
        $this->assertEquals($miniGame, $manager->getMiniGame($miniGame->getId()));
    }
} 