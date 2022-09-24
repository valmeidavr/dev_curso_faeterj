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

Route::get('/aulas', function () {
    return view('aulas');
});
Route::get('/contato', function () {
    return view('contato');
});

Route::get('/', 'CursoController@index');

Route::get('/cursos', 'CursoController@index');

Route::get('/curso/{id}', 'CursoController@show_cursos');

//Cadastros
Route::get('/cadastro/cursos', 'CursoController@cadastro');
Route::post('/cadastro/cursos/salvar', 'CursoController@salvar_curso')->name('salvar_curso');
