<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/send', [
    'uses' => 'EmailController@send',
    'as' => 'user.sendMail'
]);

Route::post('/rest_api', [
    'uses' => 'EmailController@test'
]);

Route::get('/send_test', function () {
    Mail::raw('Sending emails with Mailgun and Laravel is easy!', function ($message) {
        $message->to('nimesha95@live.com');
    });
});

Route::get('/desktops/{type}/{brand?}', [
    'uses' => 'ProductController@getDesktops',
]);

Route::get('/laptops/{type}/{brand?}', [
    'uses' => 'ProductController@getLaptops',
]);

Route::get('/acc/{type}', [
    'uses' => 'ProductController@getAcc',
]);

Route::get('/product/{id}', [
    'uses' => 'ProductController@showItem',
    'as' => 'product.show'
]);

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout',
    'middleware' => 'auth'
]);

Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postRegUser',
            'as' => 'user.signup'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });

    Route::group(['middleware' => ['auth', 'user']], function () {
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        Route::get('/profile/vieworders', [
            'uses' => 'UserController@viewOrders',
            'as' => 'user.orders'
        ]);

        Route::get('/add-to-cart/{id}', [
            'uses' => 'ProductController@getAddToCart',
            'as' => 'product.addToCart'
        ]);

        Route::get('/remove_item/{count}/{rowid}/{curcount?}', [
            'uses' => 'ProductController@getRemoveFromCart',
            'as' => 'product.RemoveFromCart'
        ]);

        Route::get('/plus_item/{rowid}/{curcount}', [
            'uses' => 'ProductController@getPlusOneCart',
            'as' => 'product.PlusOneCart'
        ]);

        Route::get('/cart', [
            'uses' => 'ProductController@getCart',
            'as' => 'user.getCart'
        ]);

        Route::get('/track', [
            'uses' => 'UserController@getTrack',
            'as' => 'user.getTrack'
        ]);

        Route::post('/checkout', [
            'uses' => 'ProductController@checkout',
            'as' => 'user.checkout'
        ]);

        Route::post('/editinfo', [
            'uses' => 'UserController@postEditInfo',
            'as' => 'user.editinfo'
        ]);

        Route::post('/get_addr', [
            'uses' => 'UserController@postAddr',
            'as' => 'getAddr'
        ]);

        Route::get('/send_test', function () {
            Mail::raw('Sending emails with Mailgun and Laravel is easy!', function ($message) {
                $message->to('nimesha95@live.com');
            });
        });

        Route::get('/paywithbank/{id}', [
            'uses' => 'ProductController@getBank',
            'as' => 'user.getBank'
        ]);

        Route::post('/paywithbank', [
            'uses' => 'ProductController@postBank',
            'as' => 'user.postBank'
        ]);

        Route::get('paywithpaypal/{id}', array('as' => 'addmoney.paywithpaypal', 'uses' => 'AddMoneyController@postPaymentWithpaypal',));

        Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal', 'uses' => 'AddMoneyController@payWithPaypal',));
        Route::post('paypal', array('as' => 'addmoney.paypal', 'uses' => 'AddMoneyController@postPaymentWithpaypal',));
        Route::get('paypal', array('as' => 'payment.status', 'uses' => 'AddMoneyController@getPaymentStatus',));

    });

});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', [
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index',
    ]);

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/reports', [
            'uses' => 'AdminController@getReports',
            'as' => 'admin.reports',
        ]);

        Route::get('/additems', [
            'uses' => 'AdminController@getAdditems',
            'as' => 'admin.additems',
        ]);

        Route::post('/redirect_add', [
            'uses' => 'AdminController@redirect_add',
            'as' => 'admin.redirect_add',
        ]);

        Route::post('/additems', [
            'uses' => 'AdminController@postAdditems',
            'as' => 'admin.additems',
        ]);

        Route::post('/signup', [
            'uses' => 'AdminController@postRegUser',
            'as' => 'admin.reguser'
        ]);

        Route::post('/edit_item', [
            'uses' => 'AdminController@getEditItem',
            'as' => 'admin.get_edit_item'
        ]);


    });

});

Route::group(['middleware' => ['auth', 'stockmanager']], function () {
    Route::get('/stockmanager', [
        'uses' => 'StockManagerController@getIndex',
        'as' => 'stockmanager.index',
    ]);

    Route::group(['prefix' => 'stockmanager'], function () {
        Route::post('/add_stock', [
            'uses' => 'StockManagerController@getAddStock',
            'as' => 'stockmanager.addstock',
        ]);

        Route::post('/redirect_add', [
            'uses' => 'StockManagerController@redirect_add',
            'as' => 'stock.redirect_add',
        ]);

        Route::get('/additems', [
            'uses' => 'StockManagerController@getAdditems',
            'as' => 'stock.additems',
        ]);

        Route::post('/fill_product_dropdown', [
            'uses' => 'StockManagerController@fillDrop',
            'as' => 'fill_dropdown'
        ]);

        Route::post('/submit_stock', [
            'uses' => 'StockManagerController@AddStock',
            'as' => 'submit_stock'
        ]);

        Route::post('/cur_orders', [
            'uses' => 'StockManagerController@check_orders',
            'as' => 'check_orders'
        ]);

        Route::post('/deli_orders', [
            'uses' => 'StockManagerController@check_deli_orders',
            'as' => 'check_deli_orders'
        ]);

        Route::post('/stock_stat/{id}', [
            'uses' => 'StockManagerController@check_stock_stat',
            'as' => 'check_stock_stat'
        ]);

        Route::post('/addToFirebase', [
            'uses' => 'StockManagerController@addToFB',
            'as' => 'add_to_fbase'
        ]);

        Route::get('/getOrder/{id}', [
            'uses' => 'StockManagerController@getOrder',
            'as' => 'stock.getOrder',
        ]);

        Route::post('/submit_invoice', [
            'uses' => 'StockManagerController@submitInvoice',
            'as' => 'stock.subInv'
        ]);

        Route::post('/crit_stock', [
            'uses' => 'StockManagerController@crit_stock_msg',
            'as' => 'stock.SendCritStock'
        ]);
    });

});

Route::group(['middleware' => ['auth', 'cashier']], function () {
    Route::get('/cashier', [
        'uses' => 'CashierController@getIndex',
        'as' => 'cashier.index',
    ]);

    Route::group(['prefix' => 'cashier'], function () {
        Route::get('/{cash}', [
            'uses' => 'CashierController@show',
            'as' => 'cashier.show',
        ]);

        Route::put('/{cash}', [
            'uses' => 'CashierController@update',
            'as' => 'cashier.update',
        ]);

    });
});

Route::group(['middleware' => ['auth', 'technician']], function () {
    Route::get('/technician', [
        'uses' => 'TechnicianController@getIndex',
        'as' => 'technician.index',
    ]);


});