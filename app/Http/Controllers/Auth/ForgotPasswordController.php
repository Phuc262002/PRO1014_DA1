<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('pages.auth.pass_reset');
    }

    public function sendResetLinkEmail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
        ],[
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.exists' => 'Email không tồn tại',
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors()->first());
        }

        $checkEmail = User::where([
            'email' => $request->email,
            'google_id' => null,
            'facebook_id' => null,
            'github_id' => null,
        ])->first();

        if ($checkEmail) {
            $status = Password::sendResetLink(
                $request->only('email')
            );

            return $status === Password::RESET_LINK_SENT
                ? back()->with(['success' => ('Link đặt lại mật khẩu đã được gửi vào email của bạn. Vui lòng kiểm tra email của bạn để đặt lại mật khẩu.')])
                : back()->with(['error' => ('Đã có lỗi xảy ra, vui lòng thử lại sau!')]);
        } else {
            return back()->with(['error' => ('Email không tồn tại!')]);
        }
    }
}
