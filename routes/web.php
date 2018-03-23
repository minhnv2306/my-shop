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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
Route::group([ 'namespace' => 'Sites'], function()
{
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about-us', 'HomeController@aboutUs')->name('sites.about-us');
    Route::get('/contact-us', 'HomeController@contactUs')->name('sites.contact-us');
    Route::get('/faqs', 'HomeController@faqs')->name('sites.faqs');
    Route::get('/size-char', 'HomeController@sizeChar')->name('sites.size-char');
    Route::get('/my-account', 'HomeController@myAccount')->name('sites.my-account');
    Route::get('/cart', 'HomeController@cart')->name('sites.cart');

    Route::get('/logout', 'UserController@logout');
    Route::post('/loginSite', 'UserController@login')->name('sites.login');

    Route::group([ 'prefix' => 'users', 'middleware' => 'myauth'], function() {
        Route::get('/address', 'UserController@address')->name('user.address');
        Route::get('/create-billing-address', 'UserController@showBillingAddress')->name('user.show-billing-address');
        Route::get('/edit-billing-address', 'UserController@editBillingAddress')->name('user.edit-billing-address');
        Route::post('/save-billing-address', 'UserController@saveBillingAddress')->name('user.save-billing-address');

        Route::get('/create-shipping-address', 'UserController@showShippingAddress')->name('user.show-shipping-address');
        Route::get('/edit-shipping-address', 'UserController@editShippingAddress')->name('user.edit-shipping-address');
        Route::post('/save-shpping-address', 'UserController@saveShippingAddress')->name('user.save-shipping-address');

        Route::get('account-detail', 'UserController@showAccount')->name('user.detail-user');
        Route::post('saveUser', 'UserController@saveAccount')->name('user.save-account');
    });
});
Route::group([ 'namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('users', 'UserController@index')->name('users.index');

        Route::resource('products', 'ProductController');
    });
    Route::post('/login', 'UserController@login')->name('admin.login');
});


