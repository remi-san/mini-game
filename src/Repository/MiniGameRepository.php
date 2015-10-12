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
