<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in') // mengeklik login
                    ->assertPathIs('/login') //cek link login
                    ->type('email', 'user@gmail.com') // mengisi inputan dengan atribut nama email
                    ->type('password', 'password') //mengisi password
                    ->press('LOG IN')
                    ;
        });
    }
}
