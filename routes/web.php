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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function (){

    Route::get('/', 'StudentsController@index')->name('home');
    Route::get('create', 'StudentsController@create')->name('viewdata');
});

Route::get('/','StudentsController@index');
Route::get('back','StudentsController@back');
Route::get('create','StudentsController@create');
Route::post('insert', 'StudentsController@insert');
Route::get('delete/{id}','StudentsController@delete');
Route::get('edit/{id}','StudentsController@edit');
Route::post('update/{id}', 'StudentsController@update');
Route::get('read/{id}','StudentsController@read');
Route::get('about','StudentsController@about');
Route::get('home','StudentsController@home');

