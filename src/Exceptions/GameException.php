<?php
namespace MiniGame\Exceptions;

use Exception;
use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\PlayerId;
use MiniGame\GameResult;

abstract class GameException extends \Exception
{
    /**
     * @var PlayerId
     */
    private $playerId;

    /**
     * @var MiniGameId
     */
    private $miniGameId;

    /**
     * @var GameResult
     */
    private $result;

    /**
     * Constructor
     *
     * @param PlayerId   $playerId
     * @param MiniGameId $miniGameId
     * @param GameResult $result
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct(
        PlayerId $playerId,
        MiniGameId $miniGameId,
        GameResult $result = null,
        $message = "",
        $code = 0,
        \Exception $previous = null
    ) {
        $this->playerId = $playerId;
        $this->miniGameId = $miniGameId;
        $this->result = $result;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return PlayerId
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * @return MiniGameId
     */
    public function getMiniGameId()
    {
        return $this->miniGameId;
    }

    /**
     * @return GameResult
     */
    public function getResult()
    {
        return $this->result;
    }
}
