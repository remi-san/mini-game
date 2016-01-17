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
     * @return GameResult
     * @throws IllegalMoveException
     */
    public function play(PlayerId $playerId, Move $move)
    {
        $playMethod = 'play' . end(explode('_', end(explode('\\', get_class($move)))));

        if (! method_exists($this, $playMethod)) {
            throw new IllegalMoveException($move, 'Error: move was not recognized!');
        }

        return $this->$playMethod($playerId, $move);
    }
}
