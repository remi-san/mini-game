<?php
namespace MiniGame\Repository;

use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use MiniGame\Entity\MiniGame;
use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\PlayerId;

interface MiniGameRepository
{
    /**
     * Finds an minigame by its primary key / identifier.
     *
     * @param MiniGameId $id The identifier.
     *
     * @return object The minigame.
     */
    public function find($id);

    /**
     * Finds all minigames in the repository.
     *
     * @return MiniGame[] The minigames.
     */
    public function findAll();

    /**
     * Finds minigames by a set of criteria.
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
     * @return MiniGame[] The minigames.
     *
     * @throws \UnexpectedValueException
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);

    /**
     * Finds a single minigame by a set of criteria.
     *
     * @param array $criteria The criteria.
     *
     * @return MiniGame The minigame.
     */
    public function findOneBy(array $criteria);

    /**
     * Gets the mini-game for the player
     *
     * @param  PlayerId $player
     *
     * @return MiniGame
     *
     * @throws NoResultException
     * @throws NonUniqueResultException
     */
    public function findPlayerMinigame(PlayerId $player);

    /**
     * Saves a mini game
     *
     * @param  MiniGame $game
     *
     * @return void
     */
    public function save(MiniGame $game);

    /**
     * Deletes a mini game
     *
     * @param  MiniGame $game
     *
     * @return void
     */
    public function delete(MiniGame $game);
}
