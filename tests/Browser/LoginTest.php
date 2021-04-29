<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use function PHPSTORM_META\type;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group anjay
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Silahkan Login')
                    ->type('email', 'maderichard@gmail.com')
                    ->type('password', 'made2000')
                    ->press('Submit')
                    ->assertSee('Username');
        });
    }
}
