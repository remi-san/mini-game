<?php

namespace MiniGame\Test\Mock\Move;

use MiniGame\Move;

class ManagedMove implements Move
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
