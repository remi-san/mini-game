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
    protected $playerId;

    /**
     * @var MiniGameId
     */
    protected $gameId;

    /**
     * @var string
     */
    protected $name;

    /**
     * Constructor
     *
     * @param PlayerId   $playerId
     * @param MiniGameId $gameId
     * @param string     $name
     */
    public function __construct(PlayerId $playerId, MiniGameId $gameId, $name)
    {
        $this->init($playerId, $gameId, $name);
    }

    /**
     * Init.
     *
     * @param PlayerId   $playerId
     * @param MiniGameId $gameId
     * @param string     $name
     */
    protected function init(PlayerId $playerId, MiniGameId $gameId, $name)
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
