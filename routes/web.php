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
    return view('Welcome');
});

Route::get('/login',['uses'=>'loginController@index']);
Route::post('/login', ['as'=>'login', 'uses'=>'loginController@verify']);
Route::get('/home', ['uses'=>'homeController@index']);
Route::get('/logout', ['as'=>'logout', 'uses'=>'logoutController@index']);
//userlist & details
Route::get('/student/userlist', ['as'=>'student.index', 'uses'=>'studentController@index']);
Route::get('/student/details/{id}', 'studentController@details')->name('student.details');
//update
Route::get('/student/edit/{id}','studentController@edit')->name('student.edit');
Route::post('/student/edit/{id}','studentController@update')->name('student.update');
//details
Route::get('/student/delete/{id}','studentController@delete')->name('student.delete');
//Route::get('/student/delete/{id}','studentController@destroy')->name('student.destroy');