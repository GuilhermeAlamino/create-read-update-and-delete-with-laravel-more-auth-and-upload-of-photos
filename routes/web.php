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

Route::get('/', 'auth\LoginController@welcomeLogin')->name('welcome.login');
Route::get('/login/logout', 'auth\LoginController@sair')->name('welcome.login.logout');
Route::post('/login/entrar', 'auth\LoginController@entrar')->name('welcome.login.entrar');

Route::group(['middleware' => 'auth', 'prefix'=> 'admin', 'as' => 'admin.'], function () {

    Route::get('/users/register', 'crud\WelcomeController@welcomeList')->name('welcome.list');

    Route::post('/user/salvar', 'crud\Create@salvar')->name('admin.user.salvar');

    Route::put('/user/atualizar/{id}', 'crud\Create@atualizar')->name('admin.user.atualizar');

});

Route::group(['middleware' => 'auth', 'prefix'=> 'users', 'as' => 'users.'], function () {
    Route::get('/user/adicionar', 'crud\Create@criar')->name('users.user.adicionar');
    Route::get('/user/editar/{id}', 'crud\Create@editar')->name('users.user.editar');
    Route::get('/user/deletar/{id}', 'crud\Create@deletar')->name('users.user.deletar');

});

Route::group(['middleware' => 'auth', 'prefix'=> 'cursos', 'as' => 'cursos.'], function () {
    Route::get('/user/lista', 'crud\Create@index')->name('cursos.user.lista');
});

Route::group(['middleware' => 'auth', 'prefix'=> 'config', 'as' => 'config.'], function () {
    Route::get('/configuracao/users', 'crud\Create@config')->name('config.configusers');
});
