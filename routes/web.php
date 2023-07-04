<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('google-auth/login', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('google-auth/callback', function () {
    $user_google = Socialite::driver('google')->user();
    if (User::where('email', $user_google->email)->exists()) {
        return redirect()->route('home');
    }
    $user = User::updateOrCreate([
        'email' => $user_google->email
    ], [
        'name' => $user_google->name,
        'google_id' => $user_google->id,
        'email_verified_at' => now(),
        'image' => $user_google->avatar,
        'password' => Str::random(10)
    ]);
});

Route::get('login', function () {
    return view('pages.client.login');
}) -> name('login');

Route::get('register', function () {
    return view('pages.client.register');
}) -> name('register');

Route::get('test', function () {
    return view('test');
});