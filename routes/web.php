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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/','EnviarEmailController@index')->name('home');
Route::post('/enviar','EnviarEmailController@enviaEmail')->name('enviar-email');
//E:\DEV\creph\vendor\swiftmailer\swiftmailer\lib\classes\Swift\Transport/StreamBuffer.php
