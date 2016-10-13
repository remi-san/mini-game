<?php

namespace MiniGame\Event;

use MiniGame\Entity\MiniGameId;
use MiniGame\Entity\PlayerId;

interface PlayerCreatedEvent
{
    /**
     * @return MiniGameId
     */
    public function getGameId();

    /**
     * @return PlayerId
     */
    public function getPlayerId();

    /**
     * @return string
     */
    public function getExternalReference();
}
