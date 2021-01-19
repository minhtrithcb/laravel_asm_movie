<?php

use App\Http\Controllers\FilmBoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmLeController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\DirController;

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
    return view('page.index');
});

// admin
Route::group(['prefix' => 'admin'], function() {
    // Quản lý phim
    Route::resource('filmle', FilmLeController::class);
    Route::resource('filmbo', FilmBoController::class);

    // Quản lý thể loại
    Route::resource('genres', GenresController::class);    

    // Quản lý thông tin đạo diễn
    Route::resource('director', DirController::class);    
});

Route::get('admin', function () {
    return view('admin.page.index');
});

