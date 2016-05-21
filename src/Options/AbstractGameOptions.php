<?php

namespace MiniGame\Options;

use MiniGame\GameOptions;
use MiniGame\PlayerOptions;

abstract class AbstractGameOptions implements GameOptions
{
    /**
     * @var PlayerOptions[]
     */
    protected $playerOptions;

    /**
     * Constructor
     *
     * @param PlayerOptions[]   $playerOptions
     */
    public function __construct(array $playerOptions = [])
    {
        $this->init($playerOptions);
    }

    /**
     * Init.
     *
     * @param PlayerOptions[]   $playerOptions
     */
    protected function init(array $playerOptions)
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
