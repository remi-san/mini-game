<?php
namespace MiniGame\Entity;

use Rhumsaa\Uuid\Uuid;

class PlayerId
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
     * @param  PlayerId $id
     * @return bool
     */
    public function equals(PlayerId $id)
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
     * @return PlayerId
     */
    public static function create($id = null)
    {
        $obj = new self();

        $obj->id = ($id) ? (string) $id : Uuid::uuid4()->toString();

        return $obj;
    }
}
