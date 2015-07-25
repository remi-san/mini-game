<?php
namespace MiniGame\Test\Mock;

use MiniGame\Result\AbstractGameResult;

class TestGameResult extends AbstractGameResult
{
    public function getAsMessage()
    {
        return '';
    }
}
