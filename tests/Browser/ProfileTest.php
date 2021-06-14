<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProfileTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Doctor
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Silahkan Login')
                    ->type('email', 'Doctor1@gmail.com')
                    ->type('password', '123456789')
                    ->press('Submit')
                    
                    ;
        });
    }
}
