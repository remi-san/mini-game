<?php
namespace MiniGame;

interface Player {

    /**
     * Returns the id of the player
     *
     * @return int
     */
    public function getId();

    /**
     * Returns the name of the player
     *
     * @return string
     */
    public function getName();
} 