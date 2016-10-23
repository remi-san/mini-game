<?php
namespace MiniGame\Test\Entity;

use Faker\Factory;
use Faker\Generator;
use MiniGame\Entity\MiniGameId;
use Rhumsaa\Uuid\Uuid;

class GameIdTest extends \PHPUnit_Framework_TestCase
{
    /** @var Generator */
    private $faker;

    public function setUp()
    {
        $this->faker = Factory::create();
    }

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
        $innerId = $this->faker->uuid;
        $id = MiniGameId::create($innerId);

        $this->assertEquals($innerId, (string) $id);
    }

    public function testEquals()
    {
        $innerId = $this->faker->uuid;
        $id = MiniGameId::create($innerId);
        $sameId = MiniGameId::create($innerId);

        $this->assertTrue($id->equals($sameId));
        $this->assertTrue($sameId->equals($id));

        $otherInnerId = $this->faker->uuid;
        $otherId = MiniGameId::create($otherInnerId);
        $this->assertFalse($id->equals($otherId));
        $this->assertFalse($otherId->equals($id));
    }
}
