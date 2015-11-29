<?php
namespace MiniGame\Options;

use MiniGame\GameOptions;
use MiniGame\PlayerOptions;

abstract class AbstractGameOptions implements GameOptions
{
    /**
     * @var PlayerOptions[]
     */
    private $players;

    /**
     * Constructor
     *
     * @param PlayerOptions[]   $players
     */
    public function __construct(array $players = array())
    {
        $this->players = $players;
    }

    /**
     * Returns the list of players
     *
     * @return PlayerOptions[]
     */
    public function getPlayerOptions()
    {
        return $this->players;
    }
}
