<?php
namespace MiniGame\Test\Mock;

use MiniGame\GameOptions;
use MiniGame\GameResult;
use MiniGame\Hangman\Hangman;
use MiniGame\Hangman\Manager\HangmanManager;
use MiniGame\Hangman\Options\HangmanOptions;
use MiniGame\Manager\PlayerManager;
use MiniGame\MiniGame;
use MiniGame\Player;
use MiniGame\Result\EndGame;
use WordSelector\WordSelector;

trait GameObjectMocker
{

    /**
     * Returns a twitter player
     *
     * @param  int $id
     * @param  string $name
     * @return Player
     */
    public function getPlayer($id = null, $name = null)
    {
        $player = \Mockery::mock('\\MiniGame\\Player');
        $player->shouldReceive('getId')->andReturn($id);
        $player->shouldReceive('getName')->andReturn($name);

        return $player;
    }

    /**
     * Returns a mini game
     *
     * @param  int $id
     * @param  string $name
     * @return MiniGame
     */
    public function getMiniGame($id = null, $name = null)
    {
        $miniGame = \Mockery::mock('\\MiniGame\\MiniGame');
        $miniGame->shouldReceive('getId')->andReturn($id);
        $miniGame->shouldReceive('getName')->andReturn($name);

        return $miniGame;
    }

    /**
     * @param Player $player
     * @return PlayerManager
     */
    public function getPlayerManager(Player $player = null)
    {
        $manager = \Mockery::mock('\\MiniGame\\Manager\\PlayerManager');
        $manager->shouldReceive('getPlayer')->andReturn($player);
        return $manager;
    }

    /**
     * Returns a word selector
     *
     * @return WordSelector
     */
    public function getWordSelector()
    {
        $ws = \Mockery::mock('\\WordSelector\\WordSelector');
        $ws->shouldReceive('getRandomWord')->andReturn('TYRANNOSAURUS');

        return $ws;
    }

    /**
     * Returns a hangman mini-game
     * @param  int $id
     * @return Hangman
     */
    public function getHangmanMiniGame($id)
    {
        $h = \Mockery::mock('\\MiniGame\\Hangman\\Hangman');
        $h->shouldReceive('getId')->andReturn($id);

        return $h;
    }

    /**
     * Returns a hangman Manager
     *
     * @param  Hangman $hangman
     * @return HangmanManager
     */
    public function getHangmanManager(Hangman $hangman = null)
    {
        $hm = \Mockery::mock('\\MiniGame\\Hangman\\Manager\\HangmanManager');
        $hm->shouldReceive('createMiniGame')->andReturn($hangman);
        $hm->shouldReceive('saveMiniGame')->andReturn($hangman);
        $hm->shouldReceive('getMiniGame')->andReturn($hangman);
        $hm->shouldReceive('getActiveMiniGameForPlayer')->andReturn($hangman);

        return $hm;
    }

    /**
     * @param  string $text
     * @return GameResult
     */
    public function getGameResult($text)
    {
        $message = \Mockery::mock('\\MiniGame\\GameResult');
        $message->shouldReceive('getAsMessage')->andReturn($text);
        return $message;
    }

    /**
     * @param  string $text
     * @return EndGame
     */
    public function getEndGame($text)
    {
        $message = \Mockery::mock('\\MiniGame\\Result\\EndGame');
        $message->shouldReceive('getAsMessage')->andReturn($text);
        return $message;
    }

    /**
     * @return GameOptions
     */
    public function getGameOptions()
    {
        $options = \Mockery::mock('\\MiniGame\\GameOptions');

        return $options;
    }

    /**
     * @param  string $word
     * @param  int    $length
     * @param  int    $level
     * @param  array  $players
     * @return HangmanOptions
     */
    public function getHangmanOptions($word = null, $length = null, $level = null, array $players = array())
    {
        $options = \Mockery::mock('\\MiniGame\\Hangman\\Options\\HangmanOptions');

        $options->shouldReceive('getWord')->andReturn($word);
        $options->shouldReceive('getLength')->andReturn($length);
        $options->shouldReceive('getLevel')->andReturn($level);
        $options->shouldReceive('getPlayers')->andReturn($players);

        return $options;
    }
}