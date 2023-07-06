<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
            'password' => 'required|min:8',
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

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> $request->password
        ]);

        if (!$user) {
            return [
                'status' => 'error',
                'message' => 'Đăng ký thất bại'
            ];
        } else {
            Auth::login($user);
            return [
                'status' => 'success',
                'message' => 'Đăng ký thành công'
            ];
        }
    }

}
