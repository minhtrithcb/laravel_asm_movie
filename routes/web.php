<?php

use App\Http\Controllers\ActorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\DirController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;

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
Route::get('phim/{slug}', [HomeController::class, 'slug']);
// admin



Route::get('admin', function () {
    return view('admin.page.index');
});

Route::group(['prefix' => 'admin'], function() {
    // Quản lý phim
    Route::resource('film', FilmController::class);

    // Quản lý thể loại
    Route::resource('genres', GenresController::class);    

    // Quản lý thông tin đạo diễn
    Route::resource('director', DirController::class);   

    // Quản lý thông tin diễn viên
    Route::resource('actor', ActorController::class);    
});



