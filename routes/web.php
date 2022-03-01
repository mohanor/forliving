<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@redirectUser')->middleware('verified');
Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'is_admin'], function(){
        Route::get('/dashbord', "AdminController@dashbord")->name('dashbord');
        Route::get('/orders', "AdminController@orders")->name('orders');
        
        Route::prefix('category')->group(function () {
            Route::get('/list', 'AdminController@categories')->name('categories');
            Route::get('/create', 'AdminController@create')->name('create-category');
            Route::post('/save', 'AdminController@saveCategory')->name('savecategory');
        });

        Route::prefix('product')->group(function () {
            Route::get('/list', 'AdminController@products')->name('products');
            Route::get('/create', 'AdminController@createProduct')->name('create-product');
            Route::post('/save', 'AdminController@saveProduct')->name('saveproduct');
            Route::get('/edit/{id}', 'AdminController@edit')->name('edit-product');
            //Route::patch('/update/{id}', array('as' => 'news.update', 'uses' => 'NewsController@update'));
            Route::delete('/delete/{id}', 'AdminController@destroy')->name('delete-product');
        });
    });
});

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'is_client'], function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/add-review/{id}', 'HomeController@review')->name('create-review');
        Route::post('/add-review', 'HomeController@storeReview')->name('add-review');
    });
});

Route::get('/index', 'ProductsController@index')->name('products.index');
Route::post('/index', 'CartController@store')->name('cart.store');
Route::post('/addToCartFromDetails', 'CartController@addToCartFromDetails')->name('addToCartFromDetails');
Route::get('/shoping-cart', 'CartController@shpingCart')->name('shoping.cart');
Route::get('/checkout', 'CartController@checkout')->name('checkout');
Route::get('/checkoutnow/{id}', 'CartController@shopNow')->name('checkoutnow');
Route::post('/sendOrder', 'CartController@sendOrder')->name('sendOrder');
Route::post('/sendOrderNow', 'CartController@sendOrderNow')->name('sendOrderNow');
Route::post('/result', 'ProductsController@search')->name('result');
Route::get('/result', 'ProductsController@getSearch')->name('result');
Route::get('/only/{catergory}', 'ProductsController@getSearchByCategory')->name('only');
Route::get('/product-details/{id}', 'ProductsController@getProduct')->name('product-details');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/checkout', 'CartController@checkout')->name('checkout');

Route::prefix('ar')->group(function () {

    Route::post('/result', 'ProductsArController@search')->name('resultar');
    Route::get('/index', 'ProductsController@indexar')->name('products.indexar');
    Route::get('/shoping-cart', 'CartController@shpingCartAr')->name('shoping.cart.ar');
    Route::get('/checkout', 'CartArController@checkout')->name('checkoutar');
    Route::get('/sendOrder', function(){return view("donear");});
    Route::get('/product-details/{id}', 'ProductsController@getProductAr')->name('product-details-ar');
    
    Route::get('/checkout', 'CartController@checkoutAr')->name('checkout.ar');
    Route::get('/checkoutnow/{id}', 'CartController@checkoutNowAr')->name('checkoutnow.ar');

    
    Route::post('/sendOrderar', 'CartController@sendOrderAr')->name('sendOrderar');


    Route::get('/contact', function(){
        return "arabic contact";
    })->name('contact.ar');
});