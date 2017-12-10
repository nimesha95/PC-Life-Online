<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SigninTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSignIn()
    {
        //normal user login
        $this->browse(function ($browser) {
            $browser->visit('user/signin')
                ->type('email', 'hippo@hippo.com')
                ->type('password', '1234')
                ->click('.signin')
                ->assertPathIs('/user/profile');
        });
    }

    public function testSignOut()
    {
        //wrong password test
        $this->browse(function ($browser) {
            $browser->visit('/user/profile')
                ->click('.drp')
                ->click('.signout_link')
                ->assertPathIs('/user/signin');
        });
    }

    public function testWrongPass()
    {
        //wrong password test
        $this->browse(function ($browser) {
            $browser->visit('user/signin')
                ->type('email', 'helo@helo.com')
                ->type('password', '123456')
                ->click('.signin')
                ->assertSee('credentials');
        });
    }

    public function testWrongUname()
    {
        //wrong username test
        $this->browse(function ($browser) {
            $browser->visit('user/signin')
                ->type('email', 'heloX@helo.com')
                ->type('password', '123456')
                ->click('.signin')
                ->assertSee('credentials');
        });
    }
}
