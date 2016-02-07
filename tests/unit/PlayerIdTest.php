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
        $id = PlayerId::create();

        $this->assertTrue(Uuid::isValid((string) $id));
    }

    public function testGivenId()
    {
        $vId = 42;
        $id = PlayerId::create($vId);

        $this->assertEquals($vId, (string) $id);
    }
}
