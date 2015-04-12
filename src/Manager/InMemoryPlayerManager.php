<?php
namespace MiniGame\Manager;

use MiniGame\MiniGamePlayer;
use MiniGame\Player;
use TwitterStream\API\Object\TwitterUser;

class InMemoryPlayerManager implements \MiniGame\Manager\PlayerManager {

    /**
     * @var Player[]
     */
    protected $players;

    /**
     * Constructor
     *
     * @param Player[] $players
     */
    public function __construct(array $players = array())
    {
        $this->players = $players;
    }

    /**
     * Gets the player matching the twitter user
     * If the player doesn't exist yet, it creates him
     *
     * @param TwitterUser $user
     * @return Player
     */
    public function getPlayer(TwitterUser $user)
    {
        $userId = $user->getId();
        if (!array_key_exists($userId, $this->players)) {
            $this->savePlayer($this->createPlayer($user));
        }
        return $this->players[$userId];
    }

    /**
     * create a player
     *
     * @param  TwitterUser $user
     * @return Player
     */
    public function createPlayer(TwitterUser $user) {
        return new MiniGamePlayer($user->getId(), $user->getName());
    }

    /**
     * Saves a player
     *
     * @param Player $player
     */
    public function savePlayer(Player $player)
    {
        $this->players[$player->getId()] = $player;
    }
} 