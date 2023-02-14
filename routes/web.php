<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\PictureController as AdminPictureController;
use App\Http\Controllers\Admin\SlideController as AdminSlideController;
use App\Http\Controllers\Admin\VideoController as AdminVideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\VideoController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('q-ino', function () {
    return view('q-ino');
});

Route::get('q-gro', function () {
    return view('q-gro');
});

Route::get('q-edu', function () {
    return view('q-edu');
});

Route::get('news', [NewsController::class, 'index']);
Route::get('news/{news}', [NewsController::class, 'show']);
Route::get('video', [VideoController::class, 'index']);

Route::prefix('admin')->as('admin.')->group(function () {
    Route::resource('/', AdminHomeController::class);
    Route::resource('news', AdminNewsController::class);
    Route::resource('video', AdminVideoController::class);
    Route::resource('picture', AdminPictureController::class);
    Route::resource('slide', AdminSlideController::class);
});
