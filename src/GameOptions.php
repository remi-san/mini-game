<?php
namespace MiniGame;

use MiniGame\Entity\Player;

interface GameOptions
{
    /**
     * Return the list of players
     *
     * @return Player[]
     */
    public function getPlayers();

    /**
     * Get the number of lives for the game
     *
     * @return int
     */
    public function getLives();
}
