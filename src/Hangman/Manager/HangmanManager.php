<?php
namespace MiniGame\Hangman\Manager;

use MiniGame\GameManager;
use MiniGame\GameOptions;
use MiniGame\Hangman\Hangman;
use MiniGame\Hangman\Options\HangmanOptions;
use MiniGame\Manager\Exceptions\GameNotFoundException;
use MiniGame\MiniGame;
use Rhumsaa\Uuid\Uuid;
use WordSelector\WordSelector;

class HangmanManager implements GameManager {

    /**
     * @var WordSelector
     */
    protected $wordSelector;

    /**
     * @var MiniGame[]
     */
    protected $managedMiniGames;

    /**
     * Constructor
     *
     * @param WordSelector $wordSelector
     * @param array        $managedMiniGames
     */
    public function __construct(WordSelector $wordSelector, array $managedMiniGames = array())
    {
        $this->wordSelector = $wordSelector;
        $this->managedMiniGames = $managedMiniGames;
    }

    /**
     * Create a mini-game according to the options
     *
     * @param  GameOptions $options
     * @return MiniGame
     */
    public function createMiniGame(GameOptions $options)
    {
        if (!($options instanceof HangmanOptions)) {
            throw new \InvalidArgumentException('The options passed to create the mini-game are not hangman options!');
        }

        if (!($options->getWord() || $options->getLevel() || $options->getLength())) {
            throw new \InvalidArgumentException('You have to provide at least one option (word/length/level)!');
        }

        $word = null;
        if ($options->getWord()) {
            $word = $options->getWord();
        } else {
            if ($options->getLevel()) {
                throw new \InvalidArgumentException('The level option is not supported yet!');
            }

            try {
                $word = $this->wordSelector->getRandomWord($options->getLength());
            } catch (\Exception $e) {
                throw new \InvalidArgumentException('A word could not be retrieved! Try with different options.');
            }

        }

        return $this->saveMiniGame(new Hangman($word, Uuid::uuid4()->toString(), $options->getPlayers()));
    }

    /**
     * Saves a mini-game
     *
     * @param  MiniGame $game
     * @return MiniGame
     */
    public function saveMiniGame(MiniGame $game)
    {
        $this->managedMiniGames[$game->getId()] = $game;

        return $game;
    }

    /**
     * Get the mini-game corresponding to the id
     *
     * @param  string $id
     * @return MiniGame
     * @throws GameNotFoundException
     */
    public function getMiniGame($id)
    {
        if (!array_key_exists($id, $this->managedMiniGames)) {
            throw new GameNotFoundException('Game with id "'.$id.'" doesn\'t exist!');
        }

        return $this->managedMiniGames[$id];
    }

    /**
     * Delete the mini-game corresponding to the id
     *
     * @param  string $id
     * @return void
     * @throws GameNotFoundException
     */
    public function deleteMiniGame($id)
    {
        if (!array_key_exists($id, $this->managedMiniGames)) {
            throw new GameNotFoundException('Game with id "'.$id.'" doesn\'t exist!');
        }

        unset($this->managedMiniGames[$id]);
    }
} 