<?php

namespace MiniGame\Entity;

use MiniGame\Exceptions\IllegalMoveException;
use MiniGame\GameResult;
use MiniGame\Move;

trait PlayTrait
{
    /**
     * Allows the player to play the game
     *
     * @param  PlayerId $playerId
     * @param  Move $move
     *
     * @throws IllegalMoveException
     *
     * @return GameResult
     */
    public function play(PlayerId $playerId, Move $move)
    {
        $playMethod = 'play' . $this->getClassName($move);

        if (! method_exists($this, $playMethod)) {
            throw new IllegalMoveException($move, 'Error: move was not recognized!');
        }

        return $this->$playMethod($playerId, $move);
    }

    /**
     * @param  Move $move
     *
     * @return string
     */
    private function getClassName(Move $move)
    {
        $namespaceArray = explode('\\', get_class($move));
        $underscoreArray = explode('_', end($namespaceArray));
        return end($underscoreArray);
    }
}
