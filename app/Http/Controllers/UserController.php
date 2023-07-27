<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', '=', Auth::user()->id)
            ->with('address_list')
            ->get();
        return view('pages.client.account', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, $thong_tin_ca_nhan = null)
    {
        if ($request->name == null) {
            return back()->with('error', 'Vui lòng nhập tên của bạn');
        }

        $user = User::find($thong_tin_ca_nhan);
        // dd($request->all(), $user);

        if ($request->hasFile('image')) {
            $imageName = time() . rand(1000, 9999) . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('assets/images/user_avatars'), $imageName);
        }

        if ($request->old_password != null || $request->new_password != null || $request->confirm_password != null) {
            if ($request->old_password == null || $request->new_password == null || $request->confirm_password == null) {
                return back()->with('error', 'Vui lòng nhập đầy đủ mật khẩu');
            } else {
                if (Hash::check($user->password, $request->old_password)) {
                    return back()->with('error', 'Mật khẩu cũ không đúng');
                } else {
                    if ($request->new_password != $request->confirm_password) {
                        return back()->with('error', 'Mật khẩu mới khác với mật khẩu cũ');
                    } else {
                        if (Hash::check($request->new_password, $user->password)) {
                            return back()->with('error', 'Mật khẩu mới không được trùng với mật khẩu cũ');
                        } else {
                            $user->password = $request->new_password;
                            $user->save();

                            Auth::logout();
                            return redirect()->route('login')->with('success', 'Đổi mật khẩu thành công');
                        }
                    }
                }
            }
        }

        $update_user = User::updateOrCreate([
            'id' => $user->id,
        ], [
            'name' => $request->name,
            'email' => $user->email,
            'password' => $user->password,
            'google_id' => $user->google_id,
            'facebook_id' => $user->facebook_id,
            'github_id' => $user->github_id,
            'email_verified_at' => $user->email_verified_at,
            'confirm' => $user->confirm,
            'confirmation_code' => $user->confirmation_code,
            'confirmation_code_expired_in' => $user->confirmation_code_expired_in,
            'status' => $user->status,
            'is_admin' => $user->is_admin,
            'image' => $request->image ? route('home') . "/assets/images/user_avatars/" . $imageName : $user->image
        ]);

        if ($update_user) {
            return back()->with('success', 'Cập nhật thông tin thành công');
        } else {
            return back()->with('error', 'Cập nhật thông tin thất bại');
        }

        // Ca
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}