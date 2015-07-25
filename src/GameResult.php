<?php
namespace MiniGame;

interface GameResult
{
    /**
     * @return Player
     */
    public function getPlayer();

    /**
     * @return string
     */
    public function getAsMessage();
}
