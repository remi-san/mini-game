<?php

namespace MiniGame\Test\Mock\Move;

use MiniGame\Move;

class UnmanagedMove implements Move
{
    /**
     * Returns the text
     *
     * @return string
     */
    public function getText()
    {
        return 'unmanaged';
    }
}
