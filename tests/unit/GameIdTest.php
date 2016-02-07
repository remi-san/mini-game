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
        $id = MiniGameId::create();

        $this->assertTrue(Uuid::isValid((string) $id));
    }

    public function testGivenId()
    {
        $vId = 42;
        $id = MiniGameId::create($vId);

        $this->assertEquals($vId, (string) $id);
    }
}
