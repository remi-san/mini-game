<?php

namespace MiniGame\Test\Mock;

use MiniGame\Move;

class MyMove implements Move
{
    /**
     * Returns the text
     *
     * @return string
     */
    public function getText()
    {
        return 'test';
    }
}
