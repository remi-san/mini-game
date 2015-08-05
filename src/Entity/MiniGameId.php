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
     *
     * @param string $id
     */
    public function __construct($id = null)
    {
        $this->id = ($id) ? (string) $id : Uuid::uuid4()->toString();
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->id;
    }
}
