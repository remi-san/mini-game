<?php

namespace MiniGame\Test\Mock;

use MiniGame\Entity\PlayerId;
use MiniGame\Entity\PlayTrait;

class TestPlay
{
    use PlayTrait;

    /**
     * @param PlayerId $playerId
     * @param MyMove $move
     * @return bool
     */
    public function playMyMove(PlayerId $playerId, MyMove $move)
    {
        return true;
    }
}
