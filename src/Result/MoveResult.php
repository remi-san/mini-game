<?php
namespace MiniGame\Result;

use MiniGame\GameResult;

interface MoveResult extends GameResult
{
    /**
     * @return string
     */
    public function getFeedBack();
}
