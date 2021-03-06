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
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
Route::get('/', function () {
    return view('welcome');
});
//Rutas propias
           //URL    Controlador @ metodo
Route::get('user', 'UserController@Mostrar');
//Route::get('user/{user}', 'UserController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('send','mailController@send');