<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerificationController;

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
Route::get('blog', function () {
    return view('pages.client.blog');
}) -> name('blog'); 
Route::get('checkout', function () {
    return view('pages.client.checkout');
}) -> name('checkout');
Route::get('services', function () {
    return view('pages.client.services');
}) -> name('services');
Route::get('contact', function () {
    return view('pages.client.contact');
}) -> name('contact');
Route::get('about', function () {
    return view('pages.client.about');
}) -> name('about');







Route::get('policy', function () {
    return view('pages.client.policy');
}) -> name('policy');

Route::get('cart', function () {
    return view('pages.client.cart');
}) -> name('cart');

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('auth.login');

    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('auth.register');
    Route::post('re_register', [RegisterController::class, 're_register'])->name('auth.re_register');
    Route::get('email/verify/{email}',[VerificationController::class,'verify'])->name('verification.verify');
    Route::post('email/verify_OTP',[VerificationController::class,'verify_OTP'])->name('verification.verify_OTP');
    Route::post('email/logout_OTP',[VerificationController::class,'logout_OTP']);

    Route::get('google/login', [LoginController::class, 'googleLogin'])->name('auth.google.login');
    Route::get('google/callback', [LoginController::class, 'googleCallback']);

    Route::get('facebook/login', [LoginController::class, 'facebookLogin'])->name('auth.facebook.login');
    Route::get('facebook/callback', [LoginController::class, 'facebookCallback']);

    Route::get('github/login', [LoginController::class, 'githubLogin'])->name('auth.github.login');
    Route::get('github/callback', [LoginController::class, 'githubCallback']);

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('password/reset', [ForgotPasswordController::class, 'index'])->name('password.reset');
    Route::post('password/reset', [ForgotPasswordController::class, 'sendResetLinkEmail']);
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'index'])->name('password.reset.token');
    Route::post('password/email', [ResetPasswordController::class, 'reset'])->name('password.email');

});

Route::get('test', function () {
    return view('test');
});

Route::get('cart', function () {
    return view('pages.client.cart');
});

Route::get('404', function () {
    return view('errors.404');
});
Route::get('500', function () {
    return view('errors.500');
});
