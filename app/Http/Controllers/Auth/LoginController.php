<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'google_id' => null,
            'facebook_id' => null,
            'github_id' => null
        ]);

        if (!$user) {
            return [
                'status' => 'error',
                'message' => 'Sai email hoặc mật khẩu'
            ];
        } else {
            return [
                'status' => 'success',
                'message' => 'Đăng nhập thành công'
            ];
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
            return redirect()->route('login')->with('status', 'Something went wrong');
        } else {
            $user = User::where('google_id', $user_google->id)->orWhere('email', $user_google->email)->first();

            if(!$user) {
                $user = User::create([
                    'name' => $user_google->name,
                    'email' => $user_google->email,
                    'password' => bcrypt(Str::random(20)),
                    'google_id' => $user_google->id,
                    'email_verified_at' => now(),
                    'image' => $user_google->avatar
                ]);
            }
        }

        Auth::login($user, true);
        return redirect()->route('home');
    }

    public function facebookLogin()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback() {
        $user_facebook = Socialite::driver('facebook')->user();

        dd($user_facebook);

        // if(!$user_facebook) {
        //     return redirect()->route('login')->with('status', 'Something went wrong');
        // } else {
        //     $user = User::where('email', $user_facebook->email)->first();

        //     if(!$user) {
        //         $user = User::create([
        //             'name' => $user_facebook->name,
        //             'email' => $user_facebook->email,
        //             'password' => bcrypt(Str::random(20)),
        //             'facebook_id' => $user_facebook->id,
        //             'email_verified_at' => now(),
        //             'image' => $user_facebook->avatar
        //         ]);
        //     }
        // }

        // Auth::login($user, true);
        // return redirect()->route('home');
    }

    public function githubLogin()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubCallback() {
        $user_github = Socialite::driver('github')->user();

        if(!$user_github) {
            return redirect()->route('login')->with('status', 'Something went wrong');
        } else {
            $user = User::where('github_id', $user_github->id)->orWhere('email', $user_github->email)->first();

            if(!$user) {
                $user = User::create([
                    'name' => $user_github->nickname,
                    'email' => $user_github->email,
                    'password' => bcrypt(Str::random(20)),
                    'github_id' => $user_github->id,
                    'email_verified_at' => now(),
                    'image' => $user_github->avatar
                ]);
            }
        }

        Auth::login($user, true);
        return redirect()->route('home');
        
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
