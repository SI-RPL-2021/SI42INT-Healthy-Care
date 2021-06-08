<?php

namespace Tests\Unit;

use App\Http\Controllers\MyController;
use PHPUnit\Framework\TestCase;

class YourTest extends TestCase
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

    public function testMethod(){
        $my = new MyController();
        $hasil = $my->exampleMethod(4,4);
        $this->assertEquals(8, $hasil);

    }
}
