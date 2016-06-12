<?php

namespace MiniGame;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\PlayerId;

interface GameResult
{
    /**
     * @return MiniGameId
     */
    public function getGameId();

    /**
     * @return PlayerId
     */
    public function getPlayerId();
}
