<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $title = 'Pets Care - Quản trị người dùng';
    $users = User::query();

    $search = request()->query('search');
    $confirm = request()->query('confirm');
    $user_type = request()->query('user_type');
    $status = request()->query('status');

    // dd($search, $confirm, $user_type, $status);

    if ($search) {
        $users = $users->where('name', 'LIKE', "%{$search}%");
    }

    if ($confirm && $confirm !== 'ALL') {
        if($confirm === 'CONFIRMED'){
            $users = $users->where(['confirm' => true]);
        }else if($confirm === 'UNCONFIRMED'){
            $users = $users->where(['confirm' => false]);
        }
    }

    if ($user_type && $user_type !== 'ALL') {
        if($user_type === 'ADMIN'){
            $users = $users->where(['is_admin' => true]);
        }else if($user_type === 'USER'){
            $users = $users->where(['is_admin' => false]);
        }
    }

    if ($status && $status !== 'ALL') {
        if ($status === 'INACTIVE') {
            $users = $users->where(['status' => false]);
        } else if ($status === 'ACTIVE') {
            $users = $users->where(['status' => true]);
        }
    }
    $users = $users->orderBy('id', 'DESC')->paginate(10)->withQueryString();
    return view('pages.admin.user_manager', compact('title', 'users', 'search', 'confirm', 'user_type', 'status'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.form_add_user');
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

        return view('pages.admin.edit_user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $update_user = User::updateOrCreate([
            'id' => $user->id,
        ], $request->all());
        if ($update_user) {
            return back()->with('success', "Cập nhật tài khoản thành công.");

        } else {
            return back()->with('error', "Cập nhật tài khoản thất bại.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            $delete_user = User::destroy($user->id);

            if ($delete_user) {
                return back()->with('success', "Xóa thành công.");
            } else {
                return back()->with('error', "Xóa thất bại.");
            }
        } catch (\Exception $e) {
            return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
        }
    }
}