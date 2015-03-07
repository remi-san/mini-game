<?php
namespace MiniGame\Exceptions;

use MiniGame\MiniGame;
use MiniGame\Player;
use MiniGame\GameResult;

class IllegalMoveException extends GameException {

    /**
     * @var string
     */
    protected $move;

    /**
     * @var GameResult
     */
    protected $result;

    /**
     * Constructor
     *
     * @param Player     $player
     * @param MiniGame   $miniGame
     * @param string     $move
     * @param GameResult $result
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct(Player $player, MiniGame $miniGame, $move, GameResult $result=null, $message="", $code=0, \Exception $previous=null)
    {
        $this->move = $move;
        $this->result = $result;
        parent::__construct($player, $miniGame, $message, $code, $previous);
    }

    /**
     * @return string
     */
    public function getMove() {
        return $this->move;
    }
} 