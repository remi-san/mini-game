<?php
namespace MiniGame\Test\Mock;

use MiniGame\Entity\MiniGame;
use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\Player;
use MiniGame\Entity\PlayerId;
use MiniGame\GameOptions;
use MiniGame\GameResult;
use MiniGame\Move;
use MiniGame\PlayerOptions;
use MiniGame\Result\EndGame;

trait GameObjectMocker
{
    /**
     * Returns a twitter player
     *
     * @param  PlayerId $id
     * @param  string   $name
     * @param  MiniGame $miniGame
     * @param  string   $externalReference
     * @return Player
     */
    public function getPlayer($id = null, $name = null, MiniGame $miniGame = null, $externalReference = null)
    {
        $player = \Mockery::mock('\\MiniGame\\Entity\\Player');
        $player->shouldReceive('getId')->andReturn($id);
        $player->shouldReceive('getName')->andReturn($name);
        $player->shouldReceive('getGame')->andReturn($miniGame);
        $player->shouldReceive('getExternalReference')->andReturn($externalReference);

        return $player;
    }

    /**
     * Returns a twitter player
     *
     * @param  PlayerId   $playerId
     * @param  MiniGameId $miniGameId
     * @return PlayerOptions
     */
    public function getPlayerOptions(PlayerId $playerId = null, MiniGameId $miniGameId = null)
    {
        $player = \Mockery::mock('\\MiniGame\\PlayerOptions');
        $player->shouldReceive('getPlayerId')->andReturn($playerId);
        $player->shouldReceive('getGameId')->andReturn($miniGameId);

        return $player;
    }

    /**
     * Returns a player id
     *
     * @param  int $id
     * @return PlayerId
     */
    public function getPlayerId($id)
    {
        $player = \Mockery::mock('\\MiniGame\\Entity\\PlayerId');
        $player->shouldReceive('__toString')->andReturn((string)$id);

        return $player;
    }

    /**
     * Returns a mini game
     *
     * @param  MiniGameId $id
     * @param  string     $name
     * @return MiniGame
     */
    public function getMiniGame($id = null, $name = null)
    {
        $miniGame = \Mockery::mock('\\MiniGame\\Entity\\MiniGame');
        $miniGame->shouldReceive('getId')->andReturn($id);
        $miniGame->shouldReceive('getName')->andReturn($name);

        return $miniGame;
    }

    /**
     * Returns a mini game id
     *
     * @param  int $id
     * @return MiniGameId
     */
    public function getMiniGameId($id)
    {
        $player = \Mockery::mock('\\MiniGame\\Entity\\MiniGameId');
        $player->shouldReceive('__toString')->andReturn((string)$id);

        return $player;
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
     * @param  string $text
     * @return Move
     */
    public function getMove($text)
    {
        $move = \Mockery::mock('\\MiniGame\\Move');
        $move->shouldReceive('getText')->andReturn($text);
        return $move;
    }
}
