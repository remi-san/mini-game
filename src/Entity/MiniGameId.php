<?php

namespace MiniGame\Entity;

use Rhumsaa\Uuid\Uuid;

class MiniGameId
{
    /**
     * @var string
     */
    private $id;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @param  MiniGameId $id
     * @return bool
     */
    public function equals(MiniGameId $id)
    {
        return $this->id === $id->id;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->id;
    }

    /**
     * Static constructor.
     *
     * @param  string $id
     *
     * @return MiniGameId
     */
    public static function create($id = null)
    {
        $obj = new self();

        $obj->id = ($id) ? (string) $id : Uuid::uuid4()->toString();

        return $obj;
    }
}
