<?php
namespace MiniGame;

use MiniGame\Entity\PlayerId;

interface GameResult
{
    /**
     * @return PlayerId
     */
    public function getPlayerId();

    /**
     * @return string
     */
    public function getAsMessage();
}
