<?php
namespace MiniGame\Exceptions;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\PlayerId;
use MiniGame\GameResult;
use MiniGame\Move;

class IllegalMoveException extends \Exception
{
    /**
     * @var string
     */
    private $move;

    /**
     * Constructor
     *
     * @param Move       $move
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct(
        Move $move = null,
        $message = "",
        $code = 0,
        \Exception $previous = null
    ) {
        $this->move = $move;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function getMove()
    {
        return $this->move;
    }
}
