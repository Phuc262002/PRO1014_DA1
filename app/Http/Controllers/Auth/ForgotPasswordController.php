<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

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
                ? back()->with(['success' => ($status)])
                : back()->withErrors(['email' => ($status)]);
        } else {
            return back()->withErrors(['email' => 'Email không tồn tại trong hệ thống']);
        }
    }
}
