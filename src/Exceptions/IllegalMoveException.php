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
     * Constructor
     *
     * @param Player     $player
     * @param MiniGame   $miniGame
     * @param GameResult $result
     * @param string     $move
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct(Player $player, MiniGame $miniGame, GameResult $result=null, $move= null, $message="", $code=0, \Exception $previous=null)
    {
        $this->move = $move;
        parent::__construct($player, $miniGame, $result, $message, $code, $previous);
    }

    /**
     * @return string
     */
    public function getMove() {
        return $this->move;
    }
} 