<?php
namespace MiniGame\Options;

use MiniGame\GameOptions;
use MiniGame\Player;

abstract class AbstractGameOptions implements GameOptions
{
    /**
     * @var Player[]
     */
    protected $players;

    /**
     * @var int
     */
    protected $lives;

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
     * Adds a player
     *
     * @param Player $player
     * @return void
     */
    public function addPlayer(Player $player)
    {
        $this->players[$player->getId()] = $player;
    }

    /**
     * @return int
     */
    public function getLives()
    {
        return $this->lives;
    }
}
