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
    return view('index');
});
Route::get('q-ino', function () {
    return view('q-ino');
});
Route::get('q-gro', function () {
    return view('q-gro');
});
Route::get('q-edu', function () {
    return view('q-edu');
});
