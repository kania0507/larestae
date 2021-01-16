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
//use App\Http\Middleware\VerifyAdmin;


Route::middleware(['auth'])->group(function(){
    //Route::get('/', 'HomeController@index');
    Route::get('/dashboard', function () {
        return view('dashboard/dashboard');
    });

    
    Route::get('/home', 'HomeController@index')->name('home');

    
});

Route::middleware(['auth', 'verifyAdmin'])->group(function(){

    Route::resource('product/category', 'Product\CategoryController');
    Route::resource('product', 'Product\ProductController');
    Route::resource('user', 'User\UserController');
    Route::resource('role', 'User\RoleController');
});

Auth::routes(['register'=>false]);

Route::get('/{any}', 'SpaController@index')->where('any', '.*');