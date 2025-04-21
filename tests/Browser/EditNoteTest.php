<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnote
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
            ->clickLink('Edit') //mengeclick edit
            ->type('title', 'update123') //mengubah title
            ->press('UPDATE') //click update
            ;
        });
    }
}
