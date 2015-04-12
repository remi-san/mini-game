<?php
namespace MiniGame\Manager;

use MiniGame\Player;
use TwitterStream\API\Object\TwitterUser;

interface PlayerManager {

    /**
     * Gets the player matching the twitter user
     * If the player doesn't exist yet, it creates him
     *
     * @param TwitterUser $user
     * @return Player
     */
    public function getPlayer(TwitterUser $user);

    /**
     * create a player
     *
     * @param  TwitterUser $user
     * @return Player
     */
    public function createPlayer(TwitterUser $user);

    /**
     * Saves a player
     *
     * @param Player $player
     */
    public function savePlayer(Player $player);
} 