<?php
namespace MiniGame\Options;

use MiniGame\GameOptions;
use MiniGame\PlayerOptions;

abstract class AbstractGameOptions implements GameOptions
{
    /**
     * @var PlayerOptions[]
     */
    private $playerOptions;

    /**
     * Constructor
     *
     * @param PlayerOptions[]   $playerOptions
     */
    public function __construct(array $playerOptions = array())
    {
        $this->playerOptions = $playerOptions;
    }

    /**
     * Returns the list of players
     *
     * @return PlayerOptions[]
     */
    public function getPlayerOptions()
    {
        return $this->playerOptions;
    }
}
