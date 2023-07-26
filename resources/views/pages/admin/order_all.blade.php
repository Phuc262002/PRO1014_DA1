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
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <p class="text-uppercase fw-medium text-muted mb-0">Tổng đơn</p>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$order_count->sum('total')}}">0</span> VNĐ</h4>
                                            <span class="badge bg-warning me-1">{{count($order_count)}}</span> <span class="text-muted">Đơn hàng</span>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-light rounded fs-3">
                                                <i data-feather="file-text" class="text-success icon-dual-success"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <p class="text-uppercase fw-medium text-muted mb-0">Đơn chờ xác nhận</p>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" 
                                                data-target="{{$order_pending->sum('total')}}">0</span> VNĐ</h4>

                                            <span class="badge bg-warning me-1">{{count($order_pending)}}</span>
                                            <span class="text-muted">Đơn chờ xác nhận</span>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-light rounded fs-3">
                                                <i data-feather="check-square" class="text-success icon-dual-success"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <p class="text-uppercase fw-medium text-muted mb-0">Đơn đã hủy</p>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$order_cancel->sum('total')}}">0</span> VNĐ</h4>
                                            <span class="badge bg-warning me-1">{{count($order_cancel)}}</span> <span class="text-muted">Đơn đã hủy</span>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-light rounded fs-3">
                                                <i data-feather="x-octagon" class="text-danger icon-dual-success"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <p class="text-uppercase fw-medium text-muted mb-0">Doanh thu</p>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$order_complete->sum('total')}}">0</span> VNĐ</h4>
                                            <span class="badge bg-warning me-1">{{count($order_complete)}}</span> <span class="text-muted"> Đơn hàng</span>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-light rounded fs-3">
                                                <i data-feather="trending-up" class="text-success icon-dual-success"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="invoiceList">
                                <div class="card-header border-0">
                                    <div class="d-flex align-items-center">
                                        <h5 class="card-title mb-0 flex-grow-1">Quản lý đơn hàng</h5>
                                        
                                    </div>
                                </div>
                                <div class="card-body bg-soft-light border border-dashed border-start-0 border-end-0">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first() }}
                                        </div>
                                    @endif
                                    <form action="{{route('orders.index')}}">
                                        <div class="row g-3">
                                            <div class="col-xxl-4 col-sm-12">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search bg-light border-light" name="search" placeholder="Tìm kiếm theo ID" value="{{$search}}">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-sm-4">
                                                <input type="text" class="form-control bg-light border-light" data-date-format="d-m-y" value="{{$calendar}}" name="calendar" id="datepicker-range" placeholder="Chọn ngày">
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-sm-4">
                                                <div class="input-light">
                                                    <select class="form-control" data-choices data-choices-search-false name="status" id="idStatus">
                                                        <option {{$status == "ALL" ? 'selected' : ''}} value="ALL" selected>Tất cả đơn hàng</option>
                                                        <option {{$status == "COMPLETED" ? 'selected' : ''}} value="COMPLETED">Đơn hàng hoàn thành</option>
                                                        <option {{$status == "ACCEPTED" ? 'selected' : ''}} value="ACCEPTED">Đơn hàng chấp nhận</option>
                                                        <option {{$status == "CANCELED" ? 'selected' : ''}} value="CANCELED">Đơn hàng hủy</option>
                                                        <option {{$status == "PENDING" ? 'selected' : ''}} value="PENDING">Chờ thanh toán</option>
                                                        <option {{$status == "HOLDING" ? 'selected' : ''}} value="HOLDING">Đơn hàng tạm giữ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-2 col-sm-4">
                                                <button class="btn btn-primary w-100" type="submit">
                                                    <i class="ri-equalizer-fill me-0 align-bottom"></i> Áp dụng
                                                </button>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card">
                                            <table class="table align-middle table-nowrap" id="invoiceTable">
                                                <thead class="text-muted">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort text-uppercase">ID</th>
                                                        <th class="sort text-uppercase">Người mua</th>
                                                        <th class="sort text-uppercase">Giảm giá</th>
                                                        <th class="sort text-uppercase">Ngày mua</th>
                                                        <th class="sort text-uppercase">Tổng tiền</th>
                                                        <th class="sort text-uppercase">Trạng thái</th>
                                                        <th >Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all" id="invoice-list-data">
                                                    @foreach ($order as $item)
                                                    <tr>
                                                        <th scope="row">
                                                           <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="chk_child" value="{{$item->order_hash_id}}">
                                                           </div>
                                                        </th>
                                                        <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="{{$item->order_hash_id}}" class="fw-medium link-primary">{{$item->order_hash_id}}</a>
                                                        </td>
                                                        <td class="customer_name">
                                                           <div class="d-flex align-items-center">
                                                            {{$item->user->name}}
                                                           </div>
                                                        </td>
                                                        
                                                        <td class="email">
                                                            @if($item->coupon!=null)
                                                            {{$item->coupon!=null?number_format($item->coupon->discount):'' }} VNĐ
                                                            @endif
                                                        </td>
                                                        <td class="date"><small class="text-muted">{{$item->created_at}}</small></td>
                                                        <td class="invoice_amount">{{number_format($item->total)}} VNĐ</td>
                                                        <td class="status">
                                                            
                                                                @if ($item->status == 'PENDING')
                                                                    <span class="badge bg-primary opacity-75">{{$item->status}}</span>
                                                                @elseif($item->status == 'HOLDING')
                                                                    <span class="badge bg-warning">{{$item->status}}</span>
                                                                @elseif($item->status == 'ACCEPTED')
                                                                    <span class="badge bg-info">{{$item->status}}</span>
                                                                @elseif($item->status == 'COMPLETED')
                                                                    <span class="badge bg-success">{{$item->status}}</span>
                                                                @elseif($item->status == 'CANCELED')
                                                                    <span class="badge bg-danger">{{$item->status}}</span>
                                                                @endif
                                                            
                                                        </td>                                                      
                                                            
                                                                
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Xem thông tin">
                                                                    <a class="text-success d-inline-block remove-item-btn"  href="{{route('orders.show', ['order' => $item->id])}}">
                                                                        <i class="ri-eye-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Chỉnh sửa">
                                                                    <a href="#showModal{{$item->id}}" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                           
                                                        
                                                     </tr>
                                                     @endforeach
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h3 class="mt-2">Ops! Không tìm thấy thông tin</h3>
                                                    <h4><p class="text-muted mb-0">Chúng tôi không tìm thấy đơn hàng từ thông tin bạn cung cấp.</p></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-3">
                                            {{ $order->appends(request()->query())->links() }}
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    
                                    <!--end modal -->
                                </div>
                            </div>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @foreach ($order as $item)
            <div class="modal fade" id="showModal{{$item->id}}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>

                        <form class="tablelist-form" autocomplete="off" action="{{ route('orders.update', ['order' => $item->id]) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('put')
                            <div class="modal-body">
                                <input type="hidden" id="id-field" />

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Tên khách hàng</label>
                                    <input type="text" class="form-control" placeholder="{{$item->user->name}}" disabled />
                                </div>

                                <div class="mb-3">
                                    <label for="email-field" class="form-label">Giảm giá</label>
                                    <input type="text" class="form-control" placeholder="{{$item->coupon!=null?number_format($item->coupon->discount):'' }} " disabled />
                                </div>

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Tổng tiền</label>
                                    <input type="text" class="form-control" placeholder="{{number_format($item->total)}} VNĐ" disabled />
                                </div>

                                <div>
                                    <label for="status-field" class="form-label">Tình trạng</label>
                                    <select class="form-control" data-choices data-choices-search-false name="status" id="status-field"  required>
                                        <option {{$status == "ACCEPTED" ? 'selected' : ''}} value="ACCEPTED">Chấp nhận đơn</option>
                                        <option {{$status == "COMPLETED" ? 'selected' : ''}} value="COMPLETED">Hoàn thành đơn</option>
                                        <option {{$status == "CANCELED" ? 'selected' : ''}} value="CANCELED">Hủy đơn</option>
                                        <option {{$status == "PENDING" ? 'selected' : ''}} value="PENDING">Chờ thanh toán</option>
                                        <option {{$status == "HOLDING" ? 'selected' : ''}} value="HOLDING">Tạm giữ</option>
                                    </select>
                                </div>
                            </div>
                          
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
                                    <button type="submit"  class="btn btn-success" id="add-btn">Cập nhật thông tin</button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            
        </div>
        @endsection