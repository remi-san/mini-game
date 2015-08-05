<?php
namespace MiniGame\Test;

use MiniGame\Entity\PlayerId;
use Rhumsaa\Uuid\Uuid;

class PlayerIdTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * @test
     */
    public function testGenerateId()
    {
        $id = new PlayerId();

        $this->assertTrue(Uuid::isValid($id->getId()));
        $this->assertTrue(Uuid::isValid($id->__toString()));
    }

    public function testGivenId()
    {
        $vId = 42;
        $id = new PlayerId($vId);

        $this->assertEquals($vId, $id->getId());
        $this->assertEquals($vId, $id->__toString());
    }
}
