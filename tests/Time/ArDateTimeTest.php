<?php

namespace ArUtil\Tests\Time;

use Carbon\Carbon;
use ArUtil\Time\ArDateTime;
use ArUtil\Tests\AbstractTestCase;

class ArDateTimeTest extends AbstractTestCase
{
    
    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }
    
    protected function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }
    
    /** @test */
    public function it_exists()
    {
        $this->assertTrue(
            class_exists(ArDateTime::class),
            'Class ArDateTime does not exist.');
    }
    
    /** @test */
    public function it_extends_carbon()
    {
        $this->assertInstanceOf(Carbon::class, new ArDateTime());
    }
}
