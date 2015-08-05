<?php
namespace MiniGame\Entity;

use MiniGame\GameResult;
use MiniGame\Move;

interface MiniGame
{
    /**
     * Returns the name of the mini-game
     * @return string
     */
    public static function getName();

    /**
     * Returns the id of the game (unique string)
     *
     * @return MiniGameId
     */
    public function getId();

    /**
     * Allows the player to play the game
     *
     * @param  PlayerId $player
     * @param  Move     $move
     * @return GameResult
     */
    public function play(PlayerId $player, Move $move);

    /**
     * Is it the player's turn?
     *
     * @param  PlayerId $player
     * @return bool
     */
    public function canPlayerPlay(PlayerId $player);

    /**
     * Get the players
     *
     * @return Player[]
     */
    public function getPlayers();
}
