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
    return view('index');
});

Route::get('/adm', function () {
    return view('adm');
});

Route::get('/aluno', function () {
    return view('aluno');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('part', 'PartController');

Route::resource('exercise', 'ExerciseController');
