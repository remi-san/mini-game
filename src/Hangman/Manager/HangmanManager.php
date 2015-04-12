<?php
namespace MiniGame\Hangman\Manager;

use MiniGame\GameManager;
use MiniGame\GameOptions;
use MiniGame\Hangman\Hangman;
use MiniGame\Hangman\Options\HangmanOptions;
use MiniGame\Manager\InMemoryGameManager;
use MiniGame\MiniGame;
use Rhumsaa\Uuid\Uuid;
use WordSelector\WordSelector;

class HangmanManager extends InMemoryGameManager implements GameManager {

    /**
     * @var WordSelector
     */
    protected $wordSelector;

    /**
     * Constructor
     *
     * @param WordSelector $wordSelector
     * @param array        $managedMiniGames
     */
    public function __construct(WordSelector $wordSelector, array $managedMiniGames = array())
    {
        $this->wordSelector = $wordSelector;
        parent::__construct($managedMiniGames);
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
}