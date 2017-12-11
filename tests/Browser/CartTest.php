<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CartTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
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

    public function testAddToCart()
    {
        //add a item directly to cart via url
        //and check the cart content
        $this->browse(function ($browser) {
            $browser->visit('desktops/used')
                ->visit('user/add-to-cart/DS0001')
                ->visit('user/add-to-cart/DS0001')
                ->visit('user/add-to-cart/DS0001')
                ->visit('user/add-to-cart/DS0001')
                ->assertSee('4');
        });
    }

    public function testGoToCart()
    {
        //check items are in the cart
        $this->browse(function ($browser) {
            $browser->visit('user/cart')
                ->assertSee('HP Inspiron 3647');
        });
    }

    public function testRemoveFromCart()
    {
        //check items are in the cart
        $this->browse(function ($browser) {
            $browser->visit('user/cart')
                ->click('.rmCart')
                ->assertSee('is empty');
        });
    }
}
