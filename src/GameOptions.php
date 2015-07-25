<?php
namespace MiniGame;

interface GameOptions
{
    /**
     * Return the list of players
     *
     * @return Player[]
     */
    public function getPlayers();

    /**
     * Add a player
     *
     * @param Player $player
     * @return void
     */
    public function addPlayer(Player $player);

    /**
     * Get the number of lives for the game
     *
     * @return int
     */
    public function getLives();
}
