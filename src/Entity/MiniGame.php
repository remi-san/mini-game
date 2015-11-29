<?php
namespace MiniGame\Entity;

use Broadway\Domain\AggregateRoot;
use MiniGame\GameResult;
use MiniGame\Move;
use MiniGame\PlayerOptions;

interface MiniGame extends AggregateRoot
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
     * @return void
     */
    public function startGame(PlayerId $playerId = null);

    /**
     * Adds a player to the game
     *
     * @param  PlayerOptions $playerOptions
     * @return void
     */
    public function addPlayerToGame(PlayerOptions $playerOptions);

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
