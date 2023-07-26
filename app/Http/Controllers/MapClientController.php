<?php

namespace App\Http\Controllers;

use App\Models\Information_user;
use App\Models\User;
use Illuminate\Http\Request;

class MapClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Chỉnh sửa địa chỉ';
        $inforUser = Information_user::where('user_id',Auth()->user()->id)->get();
        return view('pages.client.maps', compact('title','inforUser'));
        //dd($inforUser);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {       
        $title = 'Pets Care - Thêm địa chỉ';
        $user_id = request()->input('service_id');
        $inforUser = Information_user::all();
        return view('pages.client.form-add-maps', compact('title', 'user_id', 'inforUser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd(auth()->user()->id);
        if(auth()->check()){
            $add_address = Information_user::create([
                'user_id' => auth()->user()->id,
                'fullname'=> $request->fullname,
                'phone'=> $request->phone,
                'address'=> $request->address
            ]);

            if($request->is_default) {
                $address = Information_user::all();
                foreach($address as $item) {
                    if($item->id == $add_address->id) {
                        $item->is_default = true;
                        $item->save();
                    } else {
                        $item->is_default = false;
                        $item->save();
                    }
                }
            }

            if($add_address){
                return redirect()->route('dia-chi.index')->with('success', 'Thêm địa chỉ thành công');
            }else{
                return back()->with('error', 'Thêm địa chỉ thất bại');
            }
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Information_user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Information_user $information_user, $dia_chi = null)
    {
        $title = 'Pets Care - Chỉnh sửa địa chỉ';
        $inforUser = Information_user::where('id', $dia_chi)->first();
        return view('pages.client.edit-maps', compact('title','inforUser'));
        //dd($inforUser,$dia_chi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Information_user $information_user, $dia_chi = null)
    {
        $update_infor_user = Information_user::updateOrCreate([
            'id' => $dia_chi,
        ], [
            'fullname'=> $request->fullname,
            'phone'=> $request->phone,
            'address'=> $request->address
        ]);

        if($request->is_default) {
            $address_all = Information_user::all();
            foreach($address_all as $item) {
                if($item->id == $dia_chi) {
                    $item->is_default = true;
                    $item->save();
                } else {
                    $item->is_default = false;
                    $item->save();
                }
            }
        }

        if ($update_infor_user) {
            return back()->with('success', 'Cập nhật thông tin địa chỉ thành công');
        } else {
            return back()->with('error', 'Cập nhật thông tin địa chỉ thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Information_user $Information_user, $dia_chi = null)
    {
        try {
            $delete_info_user = Information_user::destroy($dia_chi);

            if ($delete_info_user) {
                return redirect()->route('dia-chi.index')->with('success', "Xóa thông tin địa chỉ thành công.");
            } else {
                return redirect()->route('dia-chi.index')->with('error', "Xóa thông tin địa chỉ thất bại.");
            }
        } catch (\Exception $e) {
            return redirect()->route('dia-chi.index')->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
        }
        
    }
    
}
