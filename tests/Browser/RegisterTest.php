<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Login
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Silahkan Register')
                    ->type('username', 'Berlian')
                    ->type('email', 'Berlian@gmail.com')
                    ->type('password', 'Berlian17')
                    ->type('confirm', 'Berlian17')
                    ->press('Submit')
                    ->assertPathIs('/login');
        });
    }
}
