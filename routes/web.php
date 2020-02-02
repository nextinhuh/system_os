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

Route::group(['prefix' => '/'], function () {
    
    Route::get('', 'LoginController@tela_login')->name("login");
    Route::post('logando', 'LoginController@logando')->name("logando");
    Route::get('deslogando', 'LoginController@deslogando')->name("deslogando");
});


Route::get('/main', function () {
        return view('main_page', $menu = ['menu' => 1]);
})->middleware('logado')->name('main');


Route::group(['prefix' => '/order/', 'middleware' => ['logado']], function () {
    
        Route::get('register', 'ServiceOrderController@order_register')->name("order_register");
        Route::get('search', 'ServiceOrderController@order_search')->name("order_search");
        Route::post('register_order', 'ServiceOrderController@register')->name("registrar_ordem"); // FORM CADASTRA NOVA ORDEM
        Route::get('search_order', 'ServiceOrderController@searching_number')->name("search_num"); //FORM PESQUISA ORDEM POR NUMERO
        Route::get('search_order2', 'ServiceOrderController@searching_name')->name("search_name"); //FORM PESQUISA ORDEM POR NOME
        Route::get('edit', 'ServiceOrderController@order_edit')->name("order_edit");
        Route::get('search_order3', 'ServiceOrderController@searching_number2')->name("search_num2"); //FORM PESQUISA ORDEM POR NUMERO PARA EDITAR
        Route::post('edit_os', 'ServiceOrderController@editing')->name("edit_os"); // FORM EDITAR OS
    
});



Route::group(['prefix' => '/user/', 'middleware' => ['logado', 'privilegio']], function () {
    
        Route::get('register', 'UserController@user_register')->name("user_register");
        Route::get('alter', 'UserController@user_alter')->name("user_alter");
        Route::post('register_employer', 'EmployerController@employ_register')->name("employer_register"); //FORM CADASTRAR FUNCIONARIO
        Route::post('register_user', 'UserController@register')->name("register"); //FORM CADASTRAR USUARIO
        Route::get('register_emp', 'EmployerController@pg_register')->name("pg_employer_register");
        Route::post('alter_user', 'UserController@alter')->name("alter"); //FORM ALTERAR SENHA
        
    
});
