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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', App\Http\Controllers\PostController::class);

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/login-google-success', [App\Http\Controllers\Auth\LoginGoogleController::class, 'login']);

Route::get('/login-github', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/login-github-success', [App\Http\Controllers\Auth\LoginGithubController::class, 'login']);
