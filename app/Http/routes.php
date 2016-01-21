<?php

Route::get('/', [
    'as' => 'login', 'uses' => 'Auth\AuthController@getLogin'
]);

// Authentication routes...
Route::get('/auth/login', ['as' =>'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('/auth/login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('/auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('/auth/register', [
    'as' => 'getregister', 'uses' => 'Auth\AuthController@getRegister'
]);
Route::post('/auth/register', [
    'as' => 'postregister', 'uses' => 'Auth\AuthController@postRegister'
]);

// Rotas para solicitar trocar de senha...
Route::get('forgot', ['as' =>'password/email', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('forgot', ['as' =>'password/email', 'uses' => 'Auth\PasswordController@postEmail']);

// Rotas para trocar a senha...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('dashboard', ['middleware' => 'auth', 'as' => 'dashboard', 'uses' => 'HomeController@index']);



Route::group(['prefix' => 'admin'], function () {

    Route::get('/contas/lista', [
        'middleware' => 'auth',
        'as' => 'conta_list',
        'uses' => 'AccountController@listAccount'
    ]);

    Route::get('/contas/nova', [
        'middleware' => 'auth',
        'as' => 'conta_create',
        'uses' => 'AccountController@create'
    ]);
    Route::post('/contas/adicionar', [
        'middleware' => 'auth',
        'as' => 'conta_store',
        'uses' => 'AccountController@store'
    ]);

    Route::get('/contas/editar/{id}', [
        'middleware' => 'auth',
        'as' => 'conta_edit',
        'uses' => 'AccountController@edit'
    ]);
    Route::post('/contas/salvar', [
        'middleware' => 'auth',
        'as' => 'conta_update',
        'uses' => 'AccountController@update'
    ]);

    Route::get('/contas/delete/{id}', [
        'middleware' => 'auth',
        'as' => 'conta_delte',
        'uses' => 'AccountController@destroy'
    ]);

    /*
     * Routes Budgets
     */
    Route::get('/orcamento/lista', [
        'middleware' => 'auth',
        'as' => 'orcamento_list',
        'uses' => 'BudgetController@listBudget'
    ]);
    Route::get('/orcamento/novo', [
        'middleware' => 'auth',
        'as' => 'orcamento_add',
        'uses' => 'BudgetController@newBudget'
    ]);
    Route::post('/orcamento/adicionar', [
        'middleware' => 'auth',
        'as' => 'orcamento_store',
        'uses' => 'BudgetController@storeBudget'
    ]);

    Route::get('/orcamento/editar/{id}', [
        'middleware' => 'auth',
        'as' => 'orcamento_edit',
        'uses' => 'BudgetController@edit'
    ]);

    Route::post('/orcamento/editar', [
        'middleware' => 'auth',
        'as' => 'orcamento_update',
        'uses' => 'BudgetController@update'
    ]);

    Route::get('/orcamento/adicionar/item/{id}', [
        'middleware' => 'auth',
        'as' => 'orcamento_add_item',
        'uses' => 'BudgetController@addItem'
    ]);

    Route::post('/orcamento/inserir/item/', [
        'middleware' => 'auth',
        'as' => 'orcamento_store_item',
        'uses' => 'BudgetController@storeItem'
    ]);

    Route::post('/orcamento/deletar/item/{id}', [
        'middleware' => 'auth',
        'as' => 'orcamento_delete_item',
        'uses' => 'BudgetController@deleteItem'
    ]);




    /*
     * Routes Profile
     */
    Route::get('/perfil', [
        'middleware' => 'auth',
        'as' => 'perfil',
        'uses' => 'UserController@profile'
    ]);
});

//utilizar em controllers que ncesitam de autenticação
//public function __construct()
//{
//    $this->middleware('auth');
//}