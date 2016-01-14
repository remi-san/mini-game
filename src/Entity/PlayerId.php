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
     *
     * @param string $id
     */
    public function __construct($id = null)
    {
        $this->id = ($id) ? (string) $id : Uuid::uuid4()->toString();
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
}
