<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function __contruct()
    {
        $this->middleware(['guest'])->except('logout');
    }

    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        } else {
            return view('pages.auth.login');
        }
        // Auth::logout();
    }

    public function login(Request $request)
    {
        $user = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'facebook_id' => null,
            'github_id' => null
        ], $request->remember_me);

        if (!$user) {
            return [
                'status' => 'error',
                'message' => 'Sai email hoặc mật khẩu'
            ];
        } else {
            if(Auth::user()->confirm == false) {
                $email = Auth::user()->email;
                Auth::logout();
                return [
                    'status' => 'error',
                    'message' => 'Tài khoản chưa được xác thực',
                    'link_authencation' =>  route('verification.verify', ['email' => $email])
                ];
                
            } else {
                if(Auth::user()->status == false) {
                    Auth::logout();
                    return [
                        'status' => 'error',
                        'message' => 'Tài khoản của bạn đã bị khóa',
                        'link_authencation' => route('preventAccount')
                    ];
                } else {
                    return [
                        'status' => 'success',
                        'message' => 'Đăng nhập thành công'
                    ];
                }
            }
        }
    }

    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user_google = Socialite::driver('google')->user();
        if(!$user_google) {
            return redirect()->route('login')->with('error', 'Đã có lỗi xảy ra!');
        } else {
            $user = User::where([
                'google_id' => $user_google->id,
                'email' => $user_google->email,
            ])->first();

            if(!$user) {
                $check_email = User::where([
                    'email' => $user_google->email,
                    'google_id' => null,
                    'facebook_id' => null,
                    'github_id' => null
                ])->first();

                if (!$check_email) {
                    $user = User::create([
                        'name' => $user_google->name,
                        'email' => $user_google->email,
                        'password' => Str::random(20),
                        'google_id' => $user_google->id,
                        'email_verified_at' => now(),
                        'image' => str_replace('=s96-c', '', $user_google->avatar),
                        'status' => 1,
                        'remember_token' => $user_google->token,
                        'confirm' => 1,
                        'confirmation_code' => Str::random(6),
                        'confirmation_code_expired_in' => now()
                    ]);
                } else {
                    $user = User::where([
                        'email' => $user_google->email,
                        'google_id' => null,
                        'facebook_id' => null,
                        'github_id' => null
                    ])->update([
                        'google_id' => $user_google->id,
                        'image' => str_replace('=s96-c', '', $user_google->avatar),
                        'email_verified_at' => now(),
                        'confirm' => 1,
                        'confirmation_code' => Str::random(6),
                        'confirmation_code_expired_in' => now(),
                        'remember_token' => $user_google->token
                    ]);
                }
            }
        }
        if ($user->status == false) {
            return redirect()->route('preventAccount');
        } else {
            Auth::login($user, true);
            return redirect()->route('home');
        }
    }

    public function facebookLogin()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback() {
        $user_facebook = Socialite::driver('facebook')->user();

        if(!$user_facebook) {
            return redirect()->route('login')->with('error', 'Đã có lỗi xảy ra!');
        } else {
            $user = User::where([
                'facebook_id' => $user_facebook->id,
                'email' => $user_facebook->email
            ])->first();

            if(!$user) {
                $user = User::create([
                    'name' => $user_facebook->name,
                    'email' => $user_facebook->email,
                    'password' => bcrypt(Str::random(20)),
                    'facebook_id' => $user_facebook->id,
                    'email_verified_at' => now(),
                    'image' => $user_facebook->avatar,
                    'confirm' => 1,
                    'confirmation_code' => Str::random(6),
                    'confirmation_code_expired_in' => now()
                ]);

                Auth::login($user, true);
                return redirect()->route('home');
            } else {
                if ($user->status == false) {
                    return redirect()->route('preventAccount');
                } else {
                    Auth::login($user, true);
                    return redirect()->route('home');
                }
            }
        }
    }

    public function githubLogin()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubCallback() {
        $user_github = Socialite::driver('github')->user();

        if(!$user_github) {
            return redirect()->route('login')->with('error', 'Đã có lỗi xảy ra!');
        } else {
            $user = User::where([
                'github_id' => $user_github->id,
                'email' => $user_github->email
            ])->first();

            if(!$user) {
                $user = User::create([
                    'name' => $user_github->nickname,
                    'email' => $user_github->email,
                    'password' => Str::random(20),
                    'github_id' => $user_github->id,
                    'email_verified_at' => now(),
                    'image' => $user_github->avatar,
                    'confirm' => 1,
                    'confirmation_code' => Str::random(6),
                    'confirmation_code_expired_in' => now()
                ]);

                Auth::login($user, true);
                return redirect()->route('home');
            } else {
                if ($user->status == false) {
                    return redirect()->route('preventAccount');
                } else {
                    Auth::login($user, true);
                    return redirect()->route('home');
                }
            }
        }
        
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return view('pages.auth.logout');
        } else {
            return redirect()->route('login');
        }
    }

    public function preventAccount()
    {
        return view('pages.auth.preventAccount');
    }
}
