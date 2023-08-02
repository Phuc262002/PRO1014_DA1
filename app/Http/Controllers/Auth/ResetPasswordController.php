<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
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
                return view('pages.auth.error_msg');
            } else {
                return view('pages.auth.pass_change', [
                    'token' => $token,
                    'email' => $request->email
                ]);
            }
        } else {
            return view('pages.auth.error_msg');
        }
    }


    public function reset(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'token' => 'required',
            'password' => 'required|min:8|regex:/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[A-Za-z\d]{8,}$/',
            'password_confirmation' => 'required|same:password'
        ],[
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không đúng định dạng.',
            'email.exists' => 'Email không tồn tại.',
            'token.required' => 'Token không được để trống.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.regex' => 'Mật khẩu phải có ít nhất 1 chữ hoa, 1 chữ thường và 1 số.',
            'password_confirmation.required' => 'Xác nhận mật khẩu không được để trống.',
            'password_confirmation.same' => 'Xác nhận mật khẩu không khớp.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $resetToken = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        if ($resetToken && Hash::check($request->token, $resetToken->token)) {
            $now = Carbon::now();
            if ($now->diffInMinutes($resetToken->created_at) > 60) {
                return view('pages.auth.error_msg');
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
                        if ($user->confirm == false) {
                            Auth::logout();
                            return redirect()->route('verification.verify', ['email' => $user->email]);
                        } else {
                            Auth::login($user);
                            return redirect()->route('home');
                        }
                        
                    } else {
                        return back()->withErrors(['password' => 'Mật khẩu mới không được trùng với mật khẩu cũ']);
                    }
                } else {
                    return back()->withErrors(['email' => 'Email này đã được đăng ký bằng tài khoản mạng xã hội']);
                }

            }
        } else {
            return view('pages.auth.error_msg');
        }
    }

}