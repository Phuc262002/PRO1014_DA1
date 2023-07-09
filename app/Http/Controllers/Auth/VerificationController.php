<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerificationController extends Controller
{

    public function verify(Request $request, $email = null)
    {
        return view('pages.auth.verify_email', [
            'email' => $email
        ]);
    }

    public function verify_OTP(Request $request)
    {
        $user = User::where([
            'email' => $request->input('email'),
            'google_id' => null,
            'facebook_id' => null,
            'github_id' => null,
        ])->first();
        if (!$user) {
            return [
                'status' => 'error',
                'message' => 'Tài khoản không tồn tại'
            ];
        }
        if (Carbon::now()->gt($user->confirmation_code_expired_in)) {
            return [
                'status' => 'error',
                'message' => 'Mã OTP đã hết hạn'
            ];
        } else {
            if ($request->input('OTP_token') != $user->confirmation_code) {
                return [
                    'status' => 'error',
                    'message' => 'Mã OTP không hợp lệ'
                ];
            }
            $user->confirm = true;
            $user->email_verified_at = Carbon::now();
            $user->save();
            Auth::login($user);
            return [
                'status' => 'success',
                'message' => 'Xác thực thành công'
            ];
        }
    }
    public function logout_OTP(Request $request)
    {
        $user = User::findOrFail($request->input('user_id'));
        if (!$user) {
            return [
                'status' => 'error',
                'message' => 'Tài khoản không tồn tại'
            ];
        }
        if ($user->confirm == false) {
            $result = $user->delete();
            if ($result)
                return ["status" => 200, "message" => "Succesfully logout in OTP screen"];
            else {
                return ["status" => 400, "message" => "Logout failed in OTP screen"];
            }
        }
        return ["status" => 400, "message" => "Unauthorized"];
    }
}
