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
    return view('login');
});

Route::get('/admin', 'UserExerciseController@listUsers')->name('admin');

Route::get('/aluno/{id}', 'UserExerciseController@listExercises')->name('aluno');

Route::get('/usuario/{id}', 'UserExerciseController@showUser')->name('user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('part', 'PartController');

Route::resource('exercise', 'ExerciseController');

//Route::get('/user', 'UserExerciseController@showUsers');
Route::get('/user/{id}/exercise', 'UserExerciseController@index');
//Route::get('/user/{id}/exercise/create', 'UserExerciseController@create');
Route::post('/user/{id}/exercise/create', 'UserExerciseController@store')->name('user.exercises');
//Route::get('/user/{id}/exercise/create', 'UserExerciseController@store')->name('user.exercises');
Route::get('/part/{id}/get-exercises', 'UserExerciseController@listExercisesByPart');

Route::post('/user/{id}/exercise/update', 'UserExerciseController@update');
Route::post('/user/{id}/exercise/destroy', 'UserExerciseController@destroy');
Route::post('/user-register', 'Auth\RegisterController@create')->name('user-register');
Route::post('/user-update/{id}', 'Auth\RegisterController@update')->name('user-update');
