<?php

namespace MiniGame\Entity;

use MiniGame\GameResult;
use MiniGame\Move;
use MiniGame\PlayerOptions;

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
     * Starts the game
     *
     * @param  PlayerId $playerId
     *
     * @return GameResult
     */
    public function startGame(PlayerId $playerId);

    /**
     * Adds a player to the game
     *
     * @param  PlayerOptions $playerOptions
     * @return GameResult
     */
    public function addPlayerToGame(PlayerOptions $playerOptions);

    /**
     * A player leaves the game
     *
     * @param PlayerId $playerId
     * @return GameResult
     */
    public function leaveGame(PlayerId $playerId);

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
