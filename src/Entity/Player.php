<?php
namespace MiniGame\Entity;

interface Player
{
    /**
     * Returns the id of the player
     *
     * @return PlayerId
     */
    public function getId();

    /**
     * Returns the name of the player
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the game
     *
     * @return MiniGame
     */
    public function getGame();

    /**
     * Returns the external reference
     *
     * @return string
     */
    public function getExternalReference();

    /**
     * Sets the game
     *
     * @param  MiniGame $game
     * @return void
     */
    public function setGame(MiniGame $game); // TODO delete
}
