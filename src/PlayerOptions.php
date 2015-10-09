<?php
namespace MiniGame;

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
     * Returns the player name
     *
     * @return string
     */
    public function getName();
}
