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
}
