<?php
namespace MiniGame\Repository;

use MiniGame\Entity\Player;
use MiniGame\Entity\PlayerId;

interface PlayerRepository
{
    /**
     * Finds an player by its primary key / identifier.
     *
     * @param PlayerId $id The identifier.
     *
     * @return Player The player.
     */
    public function find($id);

    /**
     * Finds all players in the repository.
     *
     * @return Player[] The players.
     */
    public function findAll();

    /**
     * Finds players by a set of criteria.
     *
     * Optionally sorting and limiting details can be passed. An implementation may throw
     * an UnexpectedValueException if certain values of the sorting or limiting details are
     * not supported.
     *
     * @param array      $criteria
     * @param array|null $orderBy
     * @param int|null   $limit
     * @param int|null   $offset
     *
     * @return Player[] The players.
     *
     * @throws \UnexpectedValueException
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);

    /**
     * Finds a single player by a set of criteria.
     *
     * @param array $criteria The criteria.
     *
     * @return Player The player.
     */
    public function findOneBy(array $criteria);

    /**
     * Saves a player
     *
     * @param  Player $player
     *
     * @return void
     */
    public function save(Player $player);

    /**
     * Deletes a player
     *
     * @param  Player $player
     *
     * @return void
     */
    public function delete(Player $player);
}
