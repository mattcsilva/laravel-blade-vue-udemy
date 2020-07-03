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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * prefix (localhost:8000/admin/artigos)
 * namespace (foi criado o namespace admin e agora será usado)
 * middleware é passado como padrão para não adicionar em todos os construtores
 */
Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function(){

    Route::resource('artigos', 'ArtigosController');

});