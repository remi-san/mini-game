<?php
namespace MiniGame\Test;

use MiniGame\MiniGamePlayer;

class MiniGamePlayerTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function testPlayer() {
        $id = 5;
        $name = 'toto';
        $player = new MiniGamePlayer($id, $name);
        $this->assertEquals($id, $player->getId());
        $this->assertEquals($name, $player->getName());
    }
} 