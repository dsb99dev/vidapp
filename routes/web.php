<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->name('dashboard');

Route::post('/video-category', [App\Http\Controllers\VideoCategoryController::class, 'store'])
    ->name('video-category.store');

Route::get('/video-category', [App\Http\Controllers\VideoCategoryController::class, 'index'])
    ->name('video-category.index');

Route::get('/video-category/{videoCategoryNameInSlugFormat}', [App\Http\Controllers\VideoCategoryController::class, 'show'])
    ->name('video-category.show');

Route::post('/rumble-channel', [App\Http\Controllers\RumbleChannelController::class, 'store'])
    ->name('rumble-channel.store');

Route::post('/rumble-video', [App\Http\Controllers\RumbleVideoController::class, 'store'])
    ->name('rumble-video.store');