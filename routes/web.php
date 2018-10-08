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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware('locale')->group( function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
    Route::get('test', function (){
        return view('test');
    });

    Route::get('test-cart', 'CartController@test');

    Auth::routes();

    Route::prefix('cart')->middleware('auth:user')->group(function (){
        Route::get('/', 'CartController@index');
        Route::post('/add-cart', 'CartController@addToCart');
    });
    Route::middleware('auth:user')->prefix('account')->group(function (){
        Route::get('/', 'UserController@index')->name('user.account');
        Route::post('/change-info', 'UserController@changeInfo')->name('change-info');
        Route::post('/change-pass', 'UserController@changePassword')->name('change-pass');

    });

    Route::prefix('admin')->group(function (){
        Route::get('/','AdminController@index')->name('admin.dashboard');
        Route::prefix('flowers')->middleware('auth:admin')->group(function (){
            Route::get('/','FlowerController@index')->name('admin.flowers.list');
            Route::get('/add','FlowerController@create')->name('admin.flowers.add');
            Route::post('/add','FlowerController@store')->name('admin.flowers.store');
            Route::get('/edit/{id}','FlowerController@edit')->name('admin.flowers.edit');
            Route::post('/edit','FlowerController@update')->name('admin.flowers.update');
            Route::post('/remove','FlowerController@delete')->name('admin.flowers.remove');
            Route::post('/change-status','FlowerController@changeShowStatus')->name('admin.flowers.change_status');
        });

        Route::prefix('salers')->middleware('auth:admin')->group(function (){
            Route::get('/','SalerController@index')->name('admin.salers.list');
//            Route::get('/add','SalerController@create')->name('admin.salers.add');
//            Route::post('/add','SalerController@store')->name('admin.salers.store');
            Route::get('/edit/{id}','SalerController@edit')->name('admin.salers.edit');
            Route::post('/edit','SalerController@update')->name('admin.salers.update');
            Route::post('/remove','SalerController@delete')->name('admin.salers.remove');
            Route::post('/change-status','SalerController@changeStatus')->name('admin.flowers.change_status');
        });

        Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.post');
        Route::get('/register','Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
        Route::post('/register','Auth\AdminRegisterController@register')->name('admin.register.post');
        Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
    });
});
