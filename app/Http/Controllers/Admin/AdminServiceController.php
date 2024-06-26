<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pets Care - Quản lý dịch vụ';
        $services = Service::query();
        $search = request()->input('search');
        if($search != '') {
            $services->where('name', 'like', "%$search%");
        }
        $services = $services->orderBy('created_at', 'desc')->paginate(10);
        // dd($search);
        return view('pages.admin.service_manager', compact('title', 'services','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.form_add_service_s');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        if ($request->image_service == 'Chưa có ảnh nào được chọn...') {
            return back()->with('error', "Vui lòng chọn ảnh.");
        }

        if($request->price < $request->discount_price) {
            return back()->with('error', "Giá khuyến mãi không được lớn hơn giá gốc.");
        }

        $service = Service::create($request->all());
        if ($service) {
            // if ($request->save_action == 'save_and_back') {
            //     return redirect()->route('service.index')->with('success', "Thêm dịch vụ thành công.");
            // } else if ($request->save_action == 'save_and_edit') {
            //     return redirect()->route('service.edit', $service->id)->with('success', "Thêm dịch vụ thành công.");
            // } else if ($request->save_action == 'save_and_new') {
            //     return redirect()->route('service.create')->with('success', "Thêm dịch vụ thành công.");
            // }
            return redirect()->route('service.index')->with('success', "Thêm dịch vụ thành công.");
        } else {
            return redirect()->route('service.index')->with('error', "Thêm dịch vụ thất bại.");
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        
        return view('pages.admin.edit_service_s', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {

        if($request->price < $request->discount_price) {
            return back()->with('error', "Giá khuyến mãi không được lớn hơn giá gốc.");
        }

        $update_service = Service::updateOrCreate([
            'id' => $service->id,
        ], $request->all());


        if ($update_service) {
            // if ($request->save_action == 'save_and_back') {
            //     return redirect()->route('service.index')->with('success', "Thêm dịch vụ thành công.");
            // } else if ($request->save_action == 'save_and_edit') {
            //     return redirect()->route('service.edit', $service->id)->with('success', "Thêm dịch vụ thành công.");
            // } else if ($request->save_action == 'save_and_new') {
            //     return redirect()->route('service.create')->with('success', "Thêm dịch vụ thành công.");
            // }
            return redirect()->route('service.index')->with('success', "Thêm dịch vụ thành công.");
        } else {
            return redirect()->route('service.index')->with('error', "Thêm dịch vụ thất bại.");
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    { {
            try {
                $delete_service = Service::destroy($service->id);

                if ($delete_service) {
                    return back()->with('success', "Xóa dịch vụ thành công.");
                } else {
                    return back()->with('error', "Xóa dịch vụ thất bại.");
                }
            } catch (\Exception $e) {
                return back()->with('error', "Đã xảy ra lỗi: " . $e->getMessage());
            }
        }
    }
}