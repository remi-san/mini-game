<?php
namespace MiniGame\Test;

use MiniGame\Test\Mock\GameObjectMocker;
use MiniGame\Test\Mock\TestPlayerOptions;

class PlayerOptionsTest extends \PHPUnit_Framework_TestCase
{
    use GameObjectMocker;

    public function setUp()
    {
    }

    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * @test
     */
    public function test()
    {
        $id = $this->getPlayerId(42);

        $options = new TestPlayerOptions($id, 'toto');

        $this->assertEquals($id, $options->getPlayerId());
        $this->assertEquals('toto', $options->getName());
    }
}
