<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerificationController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CartClientController;
use App\Http\Controllers\ServiceUserController;
use App\Http\Controllers\MapClientController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\AdminCategoryProductController;
use App\Http\Controllers\Admin\AdminCategoryBlogController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminBookServiceController;
use App\Http\Controllers\Admin\AdminCommentController;
use App\Http\Controllers\Admin\AdminBrandController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminCouponController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('san-pham', ProductController::class);
Route::get('san-pham/{slug}', [ProductController::class, 'getProductDetail'])->name('san-pham.detail');
Route::resource('dich-vu', ServiceClientController::class);
Route::resource('binh-luan', CommentController::class);
Route::resource('bai-viet', PostController::class);
Route::get('bai-viet/{slug}', [PostController::class, 'getPosttDetail'])->name('bai-viet.detail');
Route::resource('hoa-don', BillController::class);
Route::middleware('auth')->resource('thanh-toan', OrderController::class);
Route::get('gio-hang', function () {
    return view('pages.client.cart');
})->name('cart');
Route::get('ve-chung-toi', function () {
    return view('pages.client.about');
})->name('about');
Route::get('lien-he', function () {
    return view('pages.client.contact');
})->name('contact');

Route::group(['prefix' => 'tai-khoan', 'middleware' => ['auth']], function () {
    Route::resources([
        'thong-tin-ca-nhan' => UserController::class,
        'don-hang-ca-nhan' => CartClientController::class,
        'dich-vu-ca-nhan' => ServiceUserController::class,
        'dia-chi' => MapClientController::class,

    ]);

    Route::get('don-hang-ca-nhan/{bill_id}', [CartClientController::class, 'getBillDetail'])->name('don-hang-ca-nhan.bill_id');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resources([
        'product' => AdminProductController::class,
        'banner' => AdminBannerController::class,
        'category-product' => AdminCategoryProductController::class,
        'category-blog' => AdminCategoryBlogController::class,
        'service' => AdminServiceController::class,
        'user' => AdminUserController::class,
        'post' => AdminPostController::class,
        'brands' => AdminBrandController::class,
        'orders' => AdminOrderController::class,
        'coupon' => AdminCouponController::class,
        'book-service' => AdminBookServiceController::class,
        'comment' => AdminCommentController::class,
    ]);

    Route::delete('product/img-collection/{id}', [AdminProductController::class, 'destroyImgCollection'])->name('product.destroyImgCollection');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('auth.login');

    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('auth.register');
    Route::post('re_register', [RegisterController::class, 're_register'])->name('auth.re_register');
    Route::get('email/verify/{email}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/verify_OTP', [VerificationController::class, 'verify_OTP'])->name('verification.verify_OTP');
    Route::post('email/logout_OTP', [VerificationController::class, 'logout_OTP']);

    Route::get('google/login', [LoginController::class, 'googleLogin'])->name('auth.google.login');
    Route::get('google/callback', [LoginController::class, 'googleCallback']);

    Route::get('facebook/login', [LoginController::class, 'facebookLogin'])->name('auth.facebook.login');
    Route::get('facebook/callback', [LoginController::class, 'facebookCallback']);

    Route::get('github/login', [LoginController::class, 'githubLogin'])->name('auth.github.login');
    Route::get('github/callback', [LoginController::class, 'githubCallback']);

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('prevent', [LoginController::class, 'preventAccount'])->name('preventAccount');

    Route::get('password/reset', [ForgotPasswordController::class, 'index'])->name('password.reset');
    Route::post('password/reset', [ForgotPasswordController::class, 'sendResetLinkEmail']);
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'index'])->name('password.reset.token');
    Route::post('password/email', [ResetPasswordController::class, 'reset'])->name('password.email');

});

Route::get('404', function () {
    return view('errors.404');
});
Route::get('500', function () {
    return view('errors.500');
});