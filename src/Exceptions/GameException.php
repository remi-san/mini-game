<?php
namespace MiniGame\Exceptions;

use Exception;
use MiniGame\MiniGame;
use MiniGame\Player;

abstract class GameException extends \Exception {

    /**
     * @var \MiniGame\Player
     */
    protected $player;

    /**
     * @var MiniGame
     */
    protected $miniGame;

    /**
     * Constructor
     *
     * @param Player $player
     * @param MiniGame $miniGame
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(Player $player, MiniGame $miniGame, $message="", $code=0, \Exception $previous=null)
    {
        $this->player = $player;
        $this->miniGame = $miniGame;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return \MiniGame\Player
     */
    public function getPlayer() {
        return $this->player;
    }

    /**
     * @return MiniGame
     */
    public function getMiniGame() {
        return $this->miniGame;
    }
}