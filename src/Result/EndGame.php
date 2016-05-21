<?php

namespace MiniGame\Result;

use MiniGame\GameResult;

interface EndGame extends GameResult
{
    /**
     * @return string
     */
    public function getSolution();
}
