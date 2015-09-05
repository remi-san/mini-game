<?php
namespace MiniGame\Options;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\Player;
use MiniGame\GameOptions;

abstract class AbstractGameOptions implements GameOptions
{
    /**
     * @var MiniGameId
     */
    private $id;

    /**
     * @var Player[]
     */
    private $players;

    /**
     * Constructor
     *
     * @param MiniGameId $id
     * @param Player[]   $players
     */
    public function __construct(MiniGameId $id, array $players = array())
    {
        $this->id = $id;
        $this->players = $players;
    }

    /**
     * @return MiniGameId
     */
    public function getId()
    {
        return $this->id;
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
