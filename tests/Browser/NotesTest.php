<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group note
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in') // mengeklik login
            ->assertPathIs('/login') //cek link login
            ->type('email', 'user@gmail.com') // mengisi inputan dengan atribut nama email
            ->type('password', 'password') //mengisi password
            ->press('LOG IN')// click loging
            ->assertPathIs('/dashboard') //mengecek apakah sudah masuk dashboard
            ->clickLink('Notes')//click notes
            ->assertPathIs('/notes') //cek apakah route notes
            ->clickLink('Create Note') //click create notes
            ->assertPathIs('/create-note') //cek route
            ->type('title', 'test') // mengisi title
            ->type('description','test1234') //mengisi description
            ->press('CREATE')//click create
            ;
        });
    }
}
