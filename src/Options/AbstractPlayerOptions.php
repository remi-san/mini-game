<?php
namespace MiniGame\Options;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\PlayerId;
use MiniGame\PlayerOptions;

class AbstractPlayerOptions implements PlayerOptions
{
    /**
     * @var PlayerId
     */
    private $playerId;

    /**
     * @var MiniGameId
     */
    private $gameId;

    /**
     * @var string
     */
    private $name;

    /**
     * Constructor
     *
     * @param PlayerId   $playerId
     * @param MiniGameId $gameId
     * @param string     $name
     */
    public function __construct(PlayerId $playerId, MiniGameId $gameId, $name)
    {
        $this->playerId = $playerId;
        $this->gameId = $gameId;
        $this->name = $name;
    }

    /**
     * @return PlayerId
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * @return MiniGameId
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
