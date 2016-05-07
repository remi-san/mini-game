<?php

namespace MiniGame\Test\Mock;

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
