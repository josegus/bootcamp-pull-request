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
    return view('welcome');
});

Route::get('fermelli', function () {
    echo 'fermelli';
});

Route::get('/ebrjose', function () {
    return ['saludo' => 'Hola Mundo!!!'];
});

Route::get('/santillan', function () {
    echo 'Hola soy Santillan';
    return view('welcome');
});

Route::get('valentramos', function () {
    return view('welcome');
});
