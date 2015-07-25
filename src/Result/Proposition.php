<?php
namespace MiniGame\Result;

use MiniGame\GameResult;

interface Proposition extends GameResult
{
    /**
     * @return string
     */
    public function getFeedBack();
}
