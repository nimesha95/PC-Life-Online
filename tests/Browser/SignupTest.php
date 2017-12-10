<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SignupTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    public function testSignUp()
    {
        //add new user
        $this->browse(function ($browser) {
            $browser->visit('user/signup')
                ->type('email', 'abc@abc.com')
                ->type('phone', '0775635458')
                ->type('name', 'ABC')
                ->type('password', '1234')
                ->type('passwordConfirm', '1234')
                ->click('.signup')
                ->assertPathIs('/');

        });
    }

    public function testAlreadyEmailSignUp()
    {
        //signup as already registered user
        $this->browse(function ($browser) {
            $browser->visit('user/signup')
                ->type('email', 'abc@abc.com')
                ->type('phone', '0775635458')
                ->type('name', 'ABC')
                ->type('password', '1234')
                ->type('passwordConfirm', '1234')
                ->click('.signup')
                ->assertSee('already been');

        });
    }
}
