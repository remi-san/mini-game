<?php

namespace MiniGame\Test\Mock\Entity;

use MiniGame\Entity\PlayerId;
use MiniGame\Entity\PlayTrait;
use MiniGame\GameResult;
use MiniGame\Test\Mock\Move\ManagedMove;

class Playable
{
    use PlayTrait;

    /**
     * @param PlayerId    $playerId
     * @param ManagedMove $move
     *
     * @return GameResult
     */
    public function playManagedMove(PlayerId $playerId, ManagedMove $move)
    {
        return \Mockery::mock(GameResult::class);
    }
}
