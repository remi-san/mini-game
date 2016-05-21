<?php

namespace MiniGame;

interface GameOptions
{
    /**
     * Return the list of players
     *
     * @return PlayerOptions[]
     */
    public function getPlayerOptions();
}
