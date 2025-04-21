<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Registrasi
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // mengunjungi url halaman utama
                    ->assertSee('Modul 3') // membaca modul 3
                    ->clickLink('Register') // mengeklik registrasi
                    ->assertPathIs('/register') // cek apakah sudah benar link register
                    ->type('name', 'user') // mengisi inputan dengan atribut nama name
                    ->type('email', 'user@gmail.com') // mengisi inputan dengan atribut nama email
                    ->type('password', 'password') //mengisi password
                    ->type('password_confirmation', 'password') //mengisi password
                    ->press('REGISTER') // click register
                    ->assertPathIs('/dashboard') // cek apakah sudah benar link dashboard
                    ;
        });
    }
}
