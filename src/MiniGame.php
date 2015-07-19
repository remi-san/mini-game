<?php
namespace MiniGame;

interface MiniGame {

    /**
     * Returns the name of the mini-game
     * @return string
     */
    public static function getName();

    /**
     * Returns the id of the game (unique string)
     *
     * @return string
     */
    public function getId();

    /**
     * Allows the player to play the game
     *
     * @param  Player $player
     * @param  Move   $move
     * @return GameResult
     */
    public function play(Player $player, Move $move);

    /**
     * Is it the player's turn?
     *
     * @param  Player $player
     * @return bool
     */
    public function canPlayerPlay(Player $player);

    /**
     * Get the players
     *
     * @return Player[]
     */
    public function getPlayers();
} 