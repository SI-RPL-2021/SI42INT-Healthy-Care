<?php

namespace Tests\Unit;

use App\Http\Controllers\Auth\RegisterController;
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
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

    public function testMethod() {
        $test = new RegisterController();
        $hasil = $test->example(10, 15);
        $this->assertEquals(25, $hasil);
    }
}
