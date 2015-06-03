<?php
namespace MiniGame\Repository;

interface PlayerRepository {

    /**
     * Finds an player by its primary key / identifier.
     *
     * @param mixed $id The identifier.
     *
     * @return object The player.
     */
    public function find($id);

    /**
     * Finds all players in the repository.
     *
     * @return array The players.
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
     * @return array The players.
     *
     * @throws \UnexpectedValueException
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);

    /**
     * Finds a single player by a set of criteria.
     *
     * @param array $criteria The criteria.
     *
     * @return object The player.
     */
    public function findOneBy(array $criteria);
} 