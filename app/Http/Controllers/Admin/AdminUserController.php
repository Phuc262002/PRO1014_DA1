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
        $users = User::paginate(10);
        return view('pages.admin.user_manager', compact('title', 'users'));
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
            if ($request->save_action == 'save_and_back') {
                return redirect()->route('user.index')->with('success', "Cập nhật sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_edit') {
                return back()->with('success', "Cập nhật sản phẩm thành công.");
            } else if ($request->save_action == 'save_and_new') {
                return redirect()->route('user.create')->with('success', "Cập nhật sản phẩm thành công.");
            }
        } else {
            return back()->with('error', "Cập nhật sản phẩm thất bại.");
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