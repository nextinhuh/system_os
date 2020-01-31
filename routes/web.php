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
    return view('main_page', $menu = ['menu' => 1]);
})->name('main');

Route::group(['prefix' => '/order/'], function () {
    
    Route::get('register', 'ServiceOrderController@order_register')->name("order_register");
    Route::get('search', 'ServiceOrderController@order_search')->name("order_search");
    Route::post('register_order', 'ServiceOrderController@register')->name("registrar_ordem");
});

Route::group(['prefix' => '/user/'], function () {
    
    Route::get('register', 'UserController@user_register')->name("user_register");
    Route::get('alter', 'UserController@user_alter')->name("user_alter");
    Route::post('register_employer', 'EmployerController@employ_register')->name("employer_register");
    Route::post('register_user', 'UserController@register')->name("register");
});
