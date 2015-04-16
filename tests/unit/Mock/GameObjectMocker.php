<?php
namespace MiniGame\Test\Mock;

use MiniGame\GameOptions;
use MiniGame\GameResult;
use MiniGame\MiniGame;
use MiniGame\Move;
use MiniGame\Player;
use MiniGame\Result\EndGame;
use WordSelector\WordSelector;

trait GameObjectMocker
{

    /**
     * Returns a twitter player
     *
     * @param  int $id
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
     * @param  int $id
     * @param  string $name
     * @return MiniGame
     */
    public function getMiniGame($id = null, $name = null)
    {
        $miniGame = \Mockery::mock('\\MiniGame\\MiniGame');
        $miniGame->shouldReceive('getId')->andReturn($id);
        $miniGame->shouldReceive('getName')->andReturn($name);

        return $miniGame;
    }

    /**
     * @param  string $text
     * @return GameResult
     */
    public function getGameResult($text)
    {
        $message = \Mockery::mock('\\MiniGame\\GameResult');
        $message->shouldReceive('getAsMessage')->andReturn($text);
        return $message;
    }

    /**
     * @param  string $text
     * @return EndGame
     */
    public function getEndGame($text)
    {
        $message = \Mockery::mock('\\MiniGame\\Result\\EndGame');
        $message->shouldReceive('getAsMessage')->andReturn($text);
        return $message;
    }

    /**
     * @return GameOptions
     */
    public function getGameOptions()
    {
        $options = \Mockery::mock('\\MiniGame\\GameOptions');

        return $options;
    }

    /**
     * @return Move
     */
    public function getMove()
    {
        return \Mockery::mock('\\MiniGame\\Move');
    }
}