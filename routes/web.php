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
    Route::get('/about-us', 'HomeController@aboutUs')->name('sites.about-us');
    Route::get('/contact-us', 'HomeController@contactUs')->name('sites.contact-us');
    Route::get('/faqs', 'HomeController@faqs')->name('sites.faqs');
    Route::get('/size-char', 'HomeController@sizeChar')->name('sites.size-char');
    Route::get('/my-account', 'HomeController@myAccount')->name('sites.my-account');
    Route::get('/cart', 'HomeController@cart')->name('sites.cart');
});
Route::group([ 'namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('users', 'UserController@index')->name('users.index');
});


