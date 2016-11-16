<?php
namespace MiniGame\Test\Entity;

use Faker\Factory;
use Faker\Generator;
use MiniGame\Entity\PlayerId;
use Rhumsaa\Uuid\Uuid;

class PlayerIdTest extends \PHPUnit_Framework_TestCase
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
    public function itShouldGenerateUuid()
    {
        $id = PlayerId::create();

        $this->assertTrue(Uuid::isValid((string) $id));
    }

    /**
     * @test
     */
    public function itShouldCreateAnIdGivenAUuid()
    {
        $innerId = $this->faker->uuid;
        $id = PlayerId::create($innerId);

        $this->assertEquals($innerId, (string) $id);
    }

    /**
     * @test
     */
    public function itShouldAssertTwoIdWithTheSameUuidAreEqual()
    {
        $innerId = $this->faker->uuid;
        $id = PlayerId::create($innerId);
        $sameId = PlayerId::create($innerId);

        $this->assertTrue($id->equals($sameId));
        $this->assertTrue($sameId->equals($id));

        $otherInnerId = $this->faker->uuid;
        $otherId = PlayerId::create($otherInnerId);
        $this->assertFalse($id->equals($otherId));
        $this->assertFalse($otherId->equals($id));
    }
}
