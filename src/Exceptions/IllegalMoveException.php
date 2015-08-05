<?php
namespace MiniGame\Exceptions;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\PlayerId;
use MiniGame\GameResult;
use MiniGame\Move;

class IllegalMoveException extends GameException
{
    /**
     * @var string
     */
    private $move;

    /**
     * Constructor
     *
     * @param PlayerId   $playerId
     * @param MiniGameId $miniGameId
     * @param GameResult $result
     * @param Move       $move
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct(
        PlayerId $playerId,
        MiniGameId $miniGameId,
        GameResult $result = null,
        Move $move = null,
        $message = "",
        $code = 0,
        \Exception $previous = null
    ) {
        $this->move = $move;
        parent::__construct($playerId, $miniGameId, $result, $message, $code, $previous);
    }

    /**
     * @return string
     */
    public function getMove()
    {
        return $this->move;
    }
}
