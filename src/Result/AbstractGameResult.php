<?php
namespace MiniGame\Result;

use MiniGame\Player;
use MiniGame\GameResult;

abstract class AbstractGameResult implements GameResult {

    /**
     * @var Player
     */
    protected $player;

    /**
     * @param Player $player
     */
    public function __construct(Player $player) {
        $this->player = $player;
    }

    /**
     * @return Player
     */
    public function getPlayer() {
        return $this->player;
    }
} 