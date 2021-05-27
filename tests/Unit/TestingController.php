<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TestingController extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testMethod()
    {
        $test = new PatientController();
        $hasil = $test->exampleMethod(4,4);
        $this->assertEquals(8, $hasil);
    }
}
