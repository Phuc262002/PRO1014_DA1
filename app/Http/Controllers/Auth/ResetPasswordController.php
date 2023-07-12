<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ResetPasswordController extends Controller
{
    public function index(Request $request, $token = null)
    {
        $resetToken = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        if ($resetToken && Hash::check($token, $resetToken->token)) {
            $now = Carbon::now();
            if ($now->diffInMinutes($resetToken->created_at) > 60) {
                dd('Token đã hết hạn.');
            } else {
                return view('pages.auth.pass_change', [
                    'token' => $token,
                    'email' => $request->email
                ]);
            }
        } else {
            dd('Token không hợp lệ hoặc đã hết hạn.');
        }
    }


    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'token' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        $resetToken = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        if ($resetToken && Hash::check($request->token, $resetToken->token)) {
            $now = Carbon::now();
            if ($now->diffInMinutes($resetToken->created_at) > 60) {
                dd('Token đã hết hạn.');
            } else {

                $user = User::where([
                    'email' => $request->email,
                    'google_id' => null,
                    'facebook_id' => null,
                    'github_id' => null,
                ])->first();

                if ($user) {
                    if (!Hash::check($request->password, $user->password)) {
                        $user->password = Hash::make($request->password);
                        $user->save();
                        DB::table('password_reset_tokens')->where('email', $request->email)->delete();
                        Auth::login($user);
                        return redirect()->route('login')->with('success', 'Đổi mật khẩu thành công.');
                    } else {
                        return back()->withErrors(['password' => 'Mật khẩu mới không được trùng với mật khẩu cũ']);
                    }
                } else {
                    return back()->withErrors(['email' => 'Email này đã được đăng ký bằng tài khoản mạng xã hội']);
                }

            }
        } else {
            dd('Token không hợp lệ hoặc đã hết hạn.');
        }
    }

}