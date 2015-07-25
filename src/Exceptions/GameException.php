<?php
namespace MiniGame\Exceptions;

use Exception;
use MiniGame\GameResult;
use MiniGame\MiniGame;
use MiniGame\Player;

abstract class GameException extends \Exception
{
    /**
     * @var Player
     */
    protected $player;

    /**
     * @var MiniGame
     */
    protected $miniGame;

    /**
     * @var GameResult
     */
    protected $result;

    /**
     * Constructor
     *
     * @param Player     $player
     * @param MiniGame   $miniGame
     * @param GameResult $result
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct(
        Player $player,
        MiniGame $miniGame,
        GameResult $result = null,
        $message = "",
        $code = 0,
        \Exception $previous = null
    ) {
        $this->player = $player;
        $this->miniGame = $miniGame;
        $this->result = $result;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @return MiniGame
     */
    public function getMiniGame()
    {
        return $this->miniGame;
    }

    /**
     * @return GameResult
     */
    public function getResult()
    {
        return $this->result;
    }
}
