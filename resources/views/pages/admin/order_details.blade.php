@extends('layouts.admin.master')
@section('title')
    {{$title}}
@endsection
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-9">
                    {{-- col-lg-3 mt-3 --}}
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title flex-grow-1 mb-0">{{$order->order_hash_id}}</h5>
                                
                                <div class="d-flex gap-2 flex-wrap mx-3">
                                    <button class="btn btn-danger" id="remove-actions" onClick="deleteMultiple()"><i
                                            class="ri-delete-bin-2-line"></i></button>
                                    <a href="{{route('orders.index')}}" class="btn btn-danger btn-sm"><i
                                            class="ri-arrow-go-back-line align-bottom me-1"></i>Quay lại</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-nowrap align-middle table-borderless mb-0">
                                    <thead class="table-light text-muted">
                                        <tr>
                                            <th scope="col">Chi tiết đơn hàng</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col" class="text-end">Tổng cộng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order_detail_list as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                        <img src="{{$item->product->image_main}}" alt="" class="img-fluid d-block">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="fs-15 my-1"><a href="{{ route('san-pham.detail', ['slug' => $item->product->slug]) }}"
                                                            class="d-inline-block text-truncate" style="width:500px;">{{$item->product->name}}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{number_format($item->price)}} VNĐ</td>
                                            <td>{{$item->quantity}}</td>
                                            
                                            <td class="fw-medium text-end">
                                                {{number_format($item->quantity * $item->price)}} VNĐ
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr class="border-top border-top-dashed">
                                            <td colspan="2"></td>
                                            <td colspan="3" class="fw-medium p-0">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Tạm tính :</td>
                                                            <td class="text-end">{{number_format($item->order->pre_total)}} VNĐ</td>
                                                        </tr>
                                                        @if($order->coupon)
                                                        <tr>
                                                            <td>Giảm giá <span class="text-muted">({{$order->coupon->coupon_hash_id}})</span> :</td>
                                                            <td class="text-end">-{{number_format($order->coupon->discount)}} VNĐ</td>
                                                        </tr>
                                                        @endif
                                                        {{-- <tr>
                                                            <td>Shipping Charge :</td>
                                                            <td class="text-end">$65.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Estimated Tax :</td>
                                                            <td class="text-end">$44.99</td>
                                                        </tr> --}}
                                                        <tr class="border-top border-top-dashed">
                                                            <th scope="row">Tổng cộng :</th>
                                                            <th class="text-end">{{number_format($item->order->total)}} VNĐ</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!--end card-->
                    
                </div>
                <!--end col-->
                <div class="col-xl-3">
                    
                    <!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <h5 class="card-title flex-grow-1 mb-0">Thông tin khách hàng</h5>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0 vstack gap-3">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="{{$order->user->image}}" alt="" class="avatar-sm rounded shadow">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="fs-14 mb-1">{{$order->user->name}}</h6>
                                            <p class="text-muted mb-0">Khách hàng</p>
                                        </div>
                                    </div>
                                </li>
                                <li><i class="ri-mail-line me-2 align-middle text-muted fs-16"></i>{{$order->user->email}}</li>
                                <li><i class="ri-phone-line me-2 align-middle text-muted fs-16"></i>{{$order->address->phone}}</li>
                            </ul>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0"><i class="ri-map-pin-line align-middle me-1 text-muted"></i>Địa chỉ nhận hàng</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled vstack gap-2 fs-13 mb-0">
                                <li class="fw-medium fs-14"><i class="ri-account-circle-line me-2 align-middle text-muted fs-16"></i>{{$order->address->fullname}}</li>
                                <li><i class="ri-phone-line me-2 align-middle text-muted fs-16"></i>{{$order->address->phone}}</li>
                                <li><i class=" ri-map-pin-user-line me-2 align-middle text-muted fs-16"></i>{{$order->address->address}}</li>
                            </ul>
                        </div>
                    </div>
                    <!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0"><i class="ri-secure-payment-line align-bottom me-1 text-muted"></i>Phương thức thanh toán</h5>
                        </div>
                        <div class="card-body">
                           
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0">
                                    <p class="text-muted mb-0">Phương thức thanh toán:</p>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-0">{{$order->payment->payment_name}}</h6>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <p class="text-muted mb-0">Tổng cộng:</p>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-0">{{number_format($item->order->total)}} VNĐ</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->

    
</div>
@endsection