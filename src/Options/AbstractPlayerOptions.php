<?php
namespace MiniGame\Options;

use MiniGame\Entity\PlayerId;
use MiniGame\PlayerOptions;

class AbstractPlayerOptions implements PlayerOptions
{
    /**
     * @var PlayerId
     */
    private $playerId;

    /**
     * @var string
     */
    private $name;

    /**
     * Constructor
     *
     * @param PlayerId $playerId
     * @param string   $name
     */
    public function __construct(PlayerId $playerId, $name)
    {
        $this->playerId = $playerId;
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
