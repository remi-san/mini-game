<?php
namespace MiniGame;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\Player;

interface GameOptions
{
    /**
     * Return the id of the game
     *
     * @return MiniGameId
     */
    public function getId();

    /**
     * Return the list of players
     *
     * @return Player[]
     */
    public function getPlayers();
}
