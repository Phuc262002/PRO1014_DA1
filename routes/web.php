<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('shop', function () {
    return view('pages.client.shop');
})->name('shop');

Route::get('blog', function () {
    return view('pages.client.blog');
})->name('blog');

Route::get('checkout', function () {
    return view('pages.client.checkout');
})->name('checkout');

Route::get('services', function () {
    return view('pages.client.services');
})->name('services');
Route::get('contact', function () {
    return view('pages.client.contact');
})->name('contact');
Route::get('about', function () {
    return view('pages.client.about');
})->name('about');

Route::get('account', function () {
    return view('pages.client.account');
})->name('account');







Route::get('policy', function () {
    return view('pages.client.policy');
})->name('policy');

Route::get('cart', function () {
    return view('pages.client.cart');
})->name('cart');

Route::get('acc-cart', function () {
    return view('pages.client.acc-cart');
})->name('acc-cart');

Route::get('bill-detail', function () {
    return view('pages.client.bill-detail');
})->name('bill-detail');

Route::get('cart-detail', function () {
    return view('pages.client.cart-detail');
})->name('cart-detail');

Route::get('service-detail', function () {
    return view('pages.client.service-detail');
})->name('service-detail');

Route::get('maps', function () {
    return view('pages.client.maps');
})->name('maps');

Route::get('edit-maps', function () {
    return view('pages.client.edit-maps');
})->name('edit-maps');

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

    Route::get('password/reset', [ForgotPasswordController::class, 'index'])->name('password.reset');
    Route::post('password/reset', [ForgotPasswordController::class, 'sendResetLinkEmail']);
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'index'])->name('password.reset.token');
    Route::post('password/email', [ResetPasswordController::class, 'reset'])->name('password.email');

});

Route::get('test', function () {
    return view('test');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resources([
        'product' => ProductController::class,
    ]);





    Route::get('quan-ly-tai-khoan', function () {
        return view('pages.admin.product_manager');
    })->name('admin.product_manager');
    Route::get('san-pham-da-xoa', function () {
        return view('pages.admin.restore_product');
    })->name('admin.restore_product');
    Route::get('quan-ly-nguoi-dung', function () {
        return view('pages.admin.user_manager');
    })->name('admin.user_manager');
    Route::get('don-hang-da-huy', function () {
        return view('pages.admin.order_canceled');
    })->name('admin.order_canceled');
    Route::get('don-hang-dang-xu-ly', function () {
        return view('pages.admin.order_pending');
    })->name('admin.order_pending');
    Route::get('don-hang-giu-lai', function () {
        return view('pages.admin.order_holding');
    })->name('admin.order_holding');
    Route::get('don-hang-hoan-thanh', function () {
        return view('pages.admin.order_completed');
    })->name('admin.order_completed');
    Route::get('tat-ca-don-hang', function () {
        return view('pages.admin.order_all');
    })->name('admin.order_all');
    Route::get('don-hang-da-chap-nhan', function () {
        return view('pages.admin.order_accepted');
    })->name('admin.order_accepted');
    Route::get('quan-ly-nguoi-dung1', function () {
        return view('pages.admin.form_add_user');
    })->name('admin.form_add_user');
    Route::get('quan-ly-nguoi-dung2', function () {
        return view('pages.admin.form_add_service');
    })->name('admin.form_add_service');
    Route::get('quan-ly-nguoi-dung3', function () {
        return view('pages.admin.form_add_product');
    })->name('admin.form_add_product');
    Route::get('quan-ly-nguoi-dung4', function () {
        return view('pages.admin.form_add_brand');
    })->name('admin.form_add_brand');
    Route::get('quan-ly-nguoi-dung6', function () {
        return view('pages.admin.form_add_blog');
    })->name('admin.form_add_blog');
    Route::get('quan-ly-nguoi-dung7', function () {
        return view('pages.admin.form_add_banner_slider');
    })->name('admin.form_add_banner_slider');
    Route::get('quan-ly-nguoi-dung9', function () {
        return view('pages.admin.brand_manager');
    })->name('admin.brand_manager');
    Route::get('quan-ly-nguoi-dung10', function () {
        return view('pages.admin.blog_manager');
    })->name('admin.blog_manager');
    Route::get('quan-ly-nguoi-dung11', function () {
        return view('pages.admin.admin_manager');
    })->name('admin.admin_manager');
    Route::get('quan-ly-nguoi-dung12', function () {
        return view('pages.admin.form_add_list_product');
    })->name('admin.form_add_list_product');
    Route::get('quan-ly-nguoi-dung8', function () {
        return view('pages.admin.list_product');
    })->name('admin.list_product');
    Route::get('quan-ly-nguoi-dung13', function () {
        return view('pages.admin.list_blog');
    })->name('admin.list_blog');
    Route::get('quan-ly-nguoi-dung5', function () {
        return view('pages.admin.form_add_list_blog');
    })->name('admin.form_add_list_blog');
    Route::get('dich-vu-da-huy', function () {
        return view('pages.admin.service_canceled');
    })->name('admin.service_canceled');
    Route::get('dich-vu-dang-xu-ly', function () {
        return view('pages.admin.service_pending');
    })->name('admin.service_pending');
    Route::get('dich-vu-giu-lai', function () {
        return view('pages.admin.service_holding');
    })->name('admin.service_holding');
    Route::get('dich-vu-hoan-thanh', function () {
        return view('pages.admin.service_completed');
    })->name('admin.service_completed');
    Route::get('tat-ca-dich-vu', function () {
        return view('pages.admin.service_all');
    })->name('admin.service_all');
    Route::get('dich-vu-da-chap-nhan', function () {
        return view('pages.admin.service_accepted');
    })->name('admin.service_accepted');
    Route::get('banner-slider', function () {
        return view('pages.admin.banner_slider_manager');
    })->name('admin.banner_slider_manager');
    Route::get('quan-ly-dich-vu', function () {
        return view('pages.admin.service_manager');
    })->name('admin.service_manager');
    Route::get('quan-ly-dich-vu2', function () {
        return view('pages.admin.form_add_service_s');
    })->name('admin.form_add_service_s');



});

Route::get('404', function () {
    return view('errors.404');
});
Route::get('500', function () {
    return view('errors.500');
});

Route::group(['prefix' => 'trang-ca-nhan', 'middleware' => ['auth']], function () {
    Route::get('/', [UserController::class, 'index'])->name('profile');

    Route::resources([
        'product' => ProductController::class,
    ]);






});

