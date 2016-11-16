<?php
namespace MiniGame\Test\Exceptions;

use Faker\Factory;
use Faker\Generator;
use MiniGame\Exceptions\IllegalMoveException;
use MiniGame\Exceptions\IllegalOptionException;
use MiniGame\Exceptions\InactiveGameException;
use MiniGame\Move;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
    /** @var Generator */
    private $faker;

    /** @var string */
    private $message;

    public function setUp()
    {
        $this->faker = Factory::create();

        $this->message = $this->faker->text();
    }

    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * @test
     */
    public function itShouldCreateAnIllegalMoveException()
    {
        $move = \Mockery::mock(Move::class);

        $exception = new IllegalMoveException($move, $this->message);

        $this->assertEquals($this->message, $exception->getMessage());
        $this->assertEquals($move, $exception->getMove());
    }

    /**
     * @test
     */
    public function itShouldCreateAnIllegalOptionException()
    {

        $optionName = $this->faker->word;
        $optionValue = $this->faker->word;

        $exception = new IllegalOptionException($this->message, $optionName, $optionValue);

        $this->assertEquals($this->message, $exception->getMessage());
        $this->assertEquals($optionName, $exception->getOptionName());
        $this->assertEquals($optionValue, $exception->getOptionValue());
    }
}
