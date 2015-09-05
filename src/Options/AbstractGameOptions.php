<?php
namespace MiniGame\Options;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\Player;
use MiniGame\GameOptions;

abstract class AbstractGameOptions implements GameOptions
{

    /**
     * @var Player[]
     */
    private $players;

    /**
     * Constructor
     *
     * @param Player[]   $players
     */
    public function __construct(array $players = array())
    {
        $this->players = $players;
    }

    /**
     * Returns the list of players
     *
     * @return Player[]
     */
    public function getPlayers()
    {
        return $this->players;
    }
}
