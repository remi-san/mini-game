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
     * Has player lost?
     *
     * @return bool
     */
    public function hasLost();

    /**
     * Has player won?
     *
     * @return bool
     */
    public function hasWon();

    /**
     * @param  Player $player
     * @return mixed
     */
    public function equals(Player $player);
}
