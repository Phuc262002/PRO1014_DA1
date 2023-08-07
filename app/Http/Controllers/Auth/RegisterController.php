<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserVerification;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function __contruct()
    {
        
    }

    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        } else {
            return view('pages.auth.register');
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|min:8|regex:/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[A-Za-z\d]{8,}$/',
            'password_confirmation' => 'required|required_with:password|same:password'
        ],[
            'name.required' => 'Vui lòng nhập tên.',
            'name.max' => 'Tên không được vượt quá 50 ký tự.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password_confirmation.required_with' => 'Vui lòng nhập xác nhận mật khẩu.',
            'password_confirmation.same' => 'Xác nhận mật khẩu không khớp.',
            'password_confirmation.required' => 'Vui lòng nhập xác nhận mật khẩu.'
        ]);

        try {
            $validator->validate();
        } catch (ValidationException $exception) {
            return [
                'status' => 'error',
                'message' => 'Đăng ký thất bại',
                'errors' => $exception->errors()
            ];
        }

        $user = User::where([
            'email' => $request->email,
            'facebook_id' => null,
            'github_id' => null,
        ])->first();

        if ($user) {
            if ($user['confirm'] == true)
                return [
                    'status' => 'error',
                    'message' => 'Email đã tồn tại',
                ];
            else {
                return [
                    'status' => 'error',
                    'message' => 'Email đã được đăng kí.',
                ];
            }
        }

        $user = User::create(array_merge(
            $validator->validated(),
            [
                'password' => $request->password,
                'confirm' => false,
                'confirmation_code' => rand(100000, 999999),
                'confirmation_code_expired_in' => Carbon::now()->addSecond(60)
            ]
        ));

        try {
            Mail::to($user->email)->send(new UserVerification($user));
            return [
                'status' => 'success',
                'message' => 'Đăng ký thành công.',
                'link_authencation' =>  route('verification.verify', ['email' => $user->email])
            ];
        } catch (\Exception $err) {
            $user->delete();
            return [
                'status' => 'error',
                'message' => 'Không thể gửi email xác nhận, vui lòng thử lại.',
            ];
        }

        return [
            'status' => 'error',
            'message' => 'Lỗi gửi OTP, vui lòng thử lại.',
        ];
    }

    public function re_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:100',
            // 'password' => 'string|min:6',
        ]);

        if ($validator->fails()) {
            return [
                'status' => 'error',
                'message' => 'Đăng ký thất bại',
                'errors' => $validator->errors()
            ];
        }
        
        $user = User::where([
            'email' => $request->email,
            'facebook_id' => null,
            'github_id' => null,
        ])->first();
            
        if ($user) {
            if ($user['confirm'] == true)
                return [
                    'status' => 'error',
                    'message' => 'Email đã tồn tại',
                ];
            else {
                $user->confirmation_code = rand(100000, 999999);
                $user->confirmation_code_expired_in = Carbon::now()->addSecond(60);
                $user->save();
                try {
                    Mail::to($user->email)->send(new UserVerification($user));
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Gửi lại mã xác nhận thành công.',
                    ], 201);
                } catch (\Exception $err) {
                    $user->delete();
                    return [
                        'status' => 'error',
                        'message' => 'Không thể gửi email xác nhận, vui lòng thử lại.',
                    ];
                }
            }
        }
        return [
            'status' => 'error',
            'message' => 'Lỗi gửi OTP, vui lòng thử lại.',
        ];
    }

}
