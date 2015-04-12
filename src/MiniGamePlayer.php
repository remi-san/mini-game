<?php
namespace MiniGame;

class MiniGamePlayer implements Player {

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param int    $id
     * @param string $name
     */
    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Returns the id of the player
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the name of the player
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
} 