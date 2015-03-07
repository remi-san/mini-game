<?php
namespace MiniGame\Test\Mock;

use MiniGame\MiniGame;
use MiniGame\Player;

trait GameObjectMocker {

    /**
     * Returns a player
     *
     * @param  int    $id
     * @param  string $name
     * @return Player
     */
    public function getPlayer($id = null, $name = null)
    {
        $player = \Mockery::mock('\\MiniGame\\Player');
        $player->shouldReceive('getId')->andReturn($id);
        $player->shouldReceive('getName')->andReturn($name);

        return $player;
    }

    /**
     * Returns a mini game
     *
     * @param  int    $id
     * @param  string $name
     * @return MiniGame
     */
    public function getMiniGame($id = null, $name = null) {
        $miniGame = \Mockery::mock('\\MiniGame\\MiniGame');
        $miniGame->shouldReceive('getId')->andReturn($id);
        $miniGame->shouldReceive('getName')->andReturn($name);

        return $miniGame;
    }
} 