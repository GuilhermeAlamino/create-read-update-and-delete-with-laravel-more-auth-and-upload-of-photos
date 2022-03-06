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

Route::get('/', ['as' => 'welcome.login', 'uses' => 'auth\LoginController@welcomeLogin']);
Route::get('/login/logout', ['as' => 'welcome.login.logout', 'uses' => 'auth\LoginController@sair']);
Route::post('/login/entrar', ['as' => 'welcome.login.entrar', 'uses' => 'auth\LoginController@entrar']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/users/register', ['as' => 'welcome.list', 'uses' => 'crud\WelcomeController@welcomeList']);

    Route::get('/admin/user/lista', ['as' => 'admin.user.lista', 'uses' => 'crud\Create@index']);

    Route::get('/admin/user/adicionar', ['as' => 'admin.user.adicionar', 'uses' => 'crud\Create@criar']);

    Route::post('/admin/user/salvar', ['as' => 'admin.user.salvar', 'uses' => 'crud\Create@salvar']);

    Route::get('/admin/user/editar/{id}', ['as' => 'admin.user.editar', 'uses' => 'crud\Create@editar']);

    Route::put('/admin/user/atualizar/{id}', ['as' => 'admin.user.atualizar', 'uses' => 'crud\Create@atualizar']);

    Route::get('/admin/user/deletar/{id}', ['as' => 'admin.user.deletar', 'uses' => 'crud\Create@deletar']);
});

// Route::get('/admin/user/lista', ['as' => 'admin.user.lista', 'uses' => 'crud\Create@index']);

// Route::get('/admin/user/adicionar', ['as' => 'admin.user.adicionar', 'uses' => 'crud\Create@criar']);

// Route::post('/admin/user/salvar', ['as' => 'admin.user.salvar', 'uses' => 'crud\Create@salvar']);

// Route::get('/admin/user/editar/{id}', ['as' => 'admin.user.editar', 'uses' => 'crud\Create@editar']);

// Route::put('/admin/user/atualizar/{id}', ['as' => 'admin.user.atualizar', 'uses' => 'crud\Create@atualizar']);

// Route::get('/admin/user/deletar/{id}', ['as' => 'admin.user.deletar', 'uses' => 'crud\Create@deletar']);
