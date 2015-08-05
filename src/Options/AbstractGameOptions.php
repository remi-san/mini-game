<?php
namespace MiniGame\Options;

use MiniGame\Entity\Player;
use MiniGame\GameOptions;

abstract class AbstractGameOptions implements GameOptions
{
    /**
     * @var Player[]
     */
    private $players;

    /**
     * @var int
     */
    private $lives;

    /**
     * Constructor
     *
     * @param $lives
     * @param Player[] $players
     */
    public function __construct($lives, array $players = array())
    {
        $this->lives = $lives;
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

    /**
     * @return int
     */
    public function getLives()
    {
        return $this->lives;
    }
}
