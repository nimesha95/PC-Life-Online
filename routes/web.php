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

Route::post('/search', [
    'uses' => 'ProductController@search',
    'as' => 'product.search'
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
        Route::get('/testing', [
            'uses' => 'UserController@getTest',
            'as' => 'user.test'
        ]);

        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        Route::get('/profile1', [
            'uses' => 'UserController@getProfile1',
            'as' => 'user.profile1'
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
        Route::get('/reports/{type?}/{day?}', [
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

        Route::post('/removeusr', [
            'uses' => 'AdminController@removeUsr',
            'as' => 'admin.removeuser'
        ]);

        Route::post('/removeitem', [
            'uses' => 'AdminController@removeItem',
            'as' => 'admin.removeitem'
        ]);

        Route::get('/user_history', [
            'uses' => 'AdminController@getUserHistory',
            'as' => 'admin.getUserHistory'
        ]);

        Route::post('/edit_item', [
            'uses' => 'AdminController@getEditItem',
            'as' => 'admin.get_edit_item'
        ]);

        Route::get('/view/{id}', [
            'uses' => 'AdminController@show',
            'as' => 'admin.show',
        ]);

        Route::post('/syncNoti', [
            'uses' => 'AdminController@syncData',
            'as' => 'sync_noti'
        ]);

        Route::post('/syncEarning', [
            'uses' => 'AdminController@syncEarning',
            'as' => 'sync_earning'
        ]);

        Route::get('/delivery_report', [
            'uses' => 'AdminController@getDeliReport',
            'as' => 'admin.report_deli'
        ]);

        Route::get('/cus', [
            'uses' => 'AdminController@custHistory',
            'as' => 'admin.report_cust_history'
        ]);

        Route::get('/cus/{cus}', [
            'uses' => 'AdminController@showDets',
            'as' => 'admin.report_cust_history1'
        ]);


        //sales report
        Route::get('/salesReport', [
            'uses' => 'AdminController@showSales',
            'as' => 'admin.showSales'
        ]);
        Route::get('/salesReport/{proid}', [
            'uses' => 'AdminController@showSalesItem',
            'as' => 'admin.showSales1'
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

    Route::post('/cashier', [
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
    //return to Technician homepage (Dashboard)
    Route::get('/technician', [
        'uses' => 'TechnicianController@getIndex',
        'as' => 'technician.index1',
    ]);

    Route::post('technician.index', [
        'uses' => 'TechnicianController@store',
        'as' => 'technician.index',

    ]);
    Route::post('/store', [
        'uses' => 'TechnicianController@custstore',
        'as' => 'customizestore',

    ]);
    Route::post('/repairinvoice', [
        'uses' => 'TechnicianController@submitInvoice',
        'as' => 'RepairInv'
    ]);
    Route::post('/customtask', [
        'uses' => 'TechnicianController@custtask',
        'as' => 'customizetask',

    ]);
    //new task to database
    Route::post('/addnewtask', [
        'uses' => 'TechnicianController@addnewtask',
        'as' => 'addnewtask',

    ]);
    //device Questions
    Route::post('/addReview', [
        'uses' => 'TechnicianController@addReview',
        'as' => 'addReview',

    ]);
    Route::group(['prefix' => 'technician'], function () {
        Route::get('/custom/{type}', [
            'uses' => 'TechnicianController@custom',
            'as' => 'technician.customize',
        ]);
        Route::get('/Jobs/{type}', [
            'uses' => 'TechnicianController@viewjobsall',
            'as' => 'Jobs',
        ]);
        Route::get('/newjob/{type}', [
            'uses' => 'TechnicianController@Newjob',
            'as' => 'Newjob',
        ]);
        //NewJob form quarry
        Route::post('/Newjobstore',

            [
                'uses' => 'TechnicianController@NewjobStore',
                'as' => 'NewjobStore',

            ]);
        Route::get('/customtask', [
            'uses' => 'TechnicianController@customtask',
            'as' => 'technician.ctsk',
        ]);
        Route::get('/devacc', [
            'uses' => 'TechnicianController@deviceacc',
            'as' => 'technician.Deviceacc',
        ]);
        Route::get('/devquestion', [
            'uses' => 'TechnicianController@devq',
            'as' => 'technician.Question',
        ]);
        Route::get('/UserRegister', [
            'uses' => 'TechnicianController@userreg',
            'as' => 'technician.Question',
        ]);
        Route::post('/Reguser',
            //User register form quarry
            [
                'uses' => 'TechnicianController@userregform',
                'as' => 'userregister',

            ]);
        Route::post('/Addjobtask',
            //User register form quarry
            [
                'uses' => 'TechnicianController@Addtsktojob',
                'as' => 'Addjobtask',

            ]);
        Route::post('/ViewWarranty',
            //User register form quarry
            [
                'uses' => 'TechnicianController@viewwarranty',
                'as' => 'viewwarranty',

            ]);
        Route::get('/ViewWarranty', [
            'uses' => 'TechnicianController@userreg',
            'as' => 'viewwarranty',
        ]);
        Route::post('/Viewjob', [
            'uses' => 'TechnicianController@viewjob',
            'as' => 'viewjob',
        ]);
        Route::post('/ConfirmJob', [
            'uses' => 'TechnicianController@Addcustomer',
            'as' => 'ConfirmJob',
        ]);

        Route::post('/Deletetask', [
            'uses' => 'TechnicianController@Deletetsktojob',
            'as' => 'deletetask',
        ]);
        Route::post('/Confirmtask', [
            'uses' => 'TechnicianController@confrimtsktojob',
            'as' => 'Confirmtask',
        ]);


    });
});