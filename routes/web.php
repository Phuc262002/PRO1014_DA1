<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('home');
})->name('home');

Route::get('shop', function () {
    return view('pages.client.shop');
}) -> name('shop');

Route::get('policy', function () {
    return view('pages.client.policy');
}) -> name('policy');

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('auth.login');

    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('auth.register');

    Route::get('google/login', [LoginController::class, 'googleLogin'])->name('auth.google.login');
    Route::get('google/callback', [LoginController::class, 'googleCallback']);

    Route::get('facebook/login', [LoginController::class, 'facebookLogin'])->name('auth.facebook.login');
    Route::get('facebook/callback', [LoginController::class, 'facebookCallback']);

    Route::get('github/login', [LoginController::class, 'githubLogin'])->name('auth.github.login');
    Route::get('github/callback', [LoginController::class, 'githubCallback']);

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware('auth')-> get('test', function () {
    return view('test');
});