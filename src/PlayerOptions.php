<?php
namespace MiniGame;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\PlayerId;

interface PlayerOptions
{
    /**
     * Returns the player id
     *
     * @return PlayerId
     */
    public function getPlayerId();

    /**
     * Returns the game id
     *
     * @return MiniGameId
     */
    public function getGameId();

    /**
     * Returns the player name
     *
     * @return string
     */
    public function getName();
}
