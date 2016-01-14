<?php
namespace MiniGame\Test;

use MiniGame\Entity\MiniGameId;
use Rhumsaa\Uuid\Uuid;

class GameIdTest extends \PHPUnit_Framework_TestCase
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
        $id = new MiniGameId();

        $this->assertTrue(Uuid::isValid((string) $id));
    }

    public function testGivenId()
    {
        $vId = 42;
        $id = new MiniGameId($vId);

        $this->assertEquals($vId, (string) $id);
    }
}
