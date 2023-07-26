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
                                        <p class="text-uppercase fw-medium text-muted mb-0">Tổng dịch vụ</p>
                                    </div>
                                    
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                                data-target="{{$book_service_count->sum('total_price')}}">0</span> VNĐ</h4>
                                        <span class="badge bg-warning me-1">{{count($book_service_count)}}</span> <span class="text-muted"> 
                                            Dịch vụ</span>
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
                                        <p class="text-uppercase fw-medium text-muted mb-0">Dịch vụ cần xác nhận</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                                data-target="{{$book_service_pending->sum('total_price')}}">0</span> VNĐ</h4>
                                        <span class="badge bg-warning me-1">{{count($book_service_pending)}}</span> <span class="text-muted">
                                            Dịch vụ cần xác nhận</span>
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
                                        <p class="text-uppercase fw-medium text-muted mb-0">Dịch vụ đã hủy</p>
                                    </div>
                                    
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                                data-target="{{$book_service_cancel->sum('total_price')}}">0</span> VNĐ</h4>
                                        <span class="badge bg-warning me-1">{{count($book_service_cancel)}}</span> <span class="text-muted">Dịch vụ đã hủy
                                            </span>
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
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                                data-target="{{$book_service_complete->sum('total_price')}}">0</span> VNĐ</h4>
                                        <span class="badge bg-warning me-1">{{count($book_service_complete)}}</span> <span class="text-muted"> Dịch vụ
                                            </span>
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
                                    <h5 class="card-title mb-0 flex-grow-1">Quản lý dịch vụ </h5>
                                    <div class="flex-shrink-0">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-soft-light border border-dashed border-start-0 border-end-0">
                                <form action="{{route('book-service.index')}}">
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
                                                <select class="form-control" data-choices data-choices-search-false
                                                    name="status" id="idStatus">
                                                    <option {{$status == "ALL" ? 'selected' : ''}} value="ALL" selected>Tất cả dịch vụ</option>
                                                    <option {{$status == "COMPLETED" ? 'selected' : ''}} value="COMPLETED">Dịch vụ hoàn thành</option>
                                                    <option {{$status == "ACCEPTED" ? 'selected' : ''}}  value="ACCEPTED">Dịch vụ được chấp nhận</option>
                                                    <option {{$status == "CANCELED" ? 'selected' : ''}} value="CANCELED">Dịch vụ đã hủy</option>
                                                    <option {{$status == "PENDING" ? 'selected' : ''}} value="PENDING">Dịch vụ đang xử lý</option>
                                                    <option {{$status == "HOLDING" ? 'selected' : ''}} value="HOLDING">Dịch vụ tạm giữ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-xxl-2 col-sm-4">
                                            <button type="submit" class="btn btn-primary w-100">
                                                <i class="ri-equalizer-fill me-1 align-bottom"></i> Áp dụng
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
                                                            <input class="form-check-input" type="checkbox"
                                                                id="checkAll" value="option">
                                                        </div>
                                                    </th>
                                                    <th  data-sort="id">ID</th>
                                                    <th  data-sort="customer_name">Khách hàng</th>
                                                    {{-- <th  data-sort="sdt">Email</th> --}}
                                                    <th  data-sort="service_id">Dịch vụ</th>
                                                    <th  data-sort="total_price">Giá</th>

                                                    <th  data-sort="book_date">Ngày</th>
                                                    <th  data-sort="book_time">Giờ</th>
                                                    <th  data-sort="pet_name">Tên Pet</th>
                                                    <th  data-sort="description">Ghi chú</th>
                                                    <th  data-sort="status">Trạng thái</th>
                                                    <th  data-sort="action">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all" id="invoice-list-data">
                                                @foreach ($book_service  as $item)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="chk_child" >
                                                                   </div>
                                                                </th>
                                                                <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="{{$item->book_service_hash_id}}" class="fw-medium link-primary">{{$item->book_service_hash_id}}</a>

                                                                <td class="user_id ">
                                                                   <div class="d-flex align-items-center">
                                                                    {{ $item-> user->name}}
                                                                   </div>
                                                                </td>`
                                                              
                                                                <td class="service">{{$item->service->name}}</td>
                                                                <td class="service">{{number_format($item->total_price)}} VNĐ</td>
                                                                <td class="book_date"><small class="text-muted"></small>{{$item->book_date}}</td>
                                                                <td class="book_time">{{$item -> book_time}}</td>
                                                                <td class="pet_name">{{$item -> pet_name}}</td>
                                                                <td class="description">{{$item -> description}}</td>
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
                                                    {{$book_service->appends(request()->query())->links() }}
                                                
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

             @foreach ($book_service as $item)
            <div class="modal fade" id="showModal{{$item->id}}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>

                        <form class="tablelist-form" autocomplete="off" action="{{ route('book-service.update', ['book_service' => $item->id]) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('put')
                            <div class="modal-body">
                                <input type="hidden" id="id-field" />

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Tên khách hàng</label>
                                    <input type="text" class="form-control" placeholder="{{$item->user->name}}" disabled />
                                </div>

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Email:</label>
                                    <input type="text" class="form-control" placeholder="{{$item->user->email}}" disabled />
                                </div>
                                

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Tổng tiền</label>
                                    <input type="text" class="form-control" placeholder="{{number_format($item->total_price)}} VNĐ" disabled />
                                </div>

                                <div class="mt-3">
                                    <label for="email-field" class="form-label">Ghi chú khách hàng</label>
                                    <textarea type="text" class="form-control" rows="5" name="description" disabled >{{$item->description}}</textarea>
                                </div>
                                <div class="mt-3">
                                    <label for="email-field" class="form-label">Ghi chú của quản lý</label>
                                    <textarea type="text" class="form-control" rows="5" name="admin_note" >{{$item->admin_note}}</textarea>
                                </div>
                                <div class="mt-3">
                                    <label for="status-field" class="form-label">Tình trạng dịch vụ</label>
                                    <select class="form-control" data-choices data-choices-search-false name="status" id="status-field"  required>
                                        <option {{$status == "ACCEPTED" ? 'selected' : ''}} value="ACCEPTED">Dịch vụ được chấp nhận</option>
                                        <option {{$status == "COMPLETED" ? 'selected' : ''}} value="COMPLETED">Dịch vụ hoàn thành</option>
                                        <option {{$status == "CANCELED" ? 'selected' : ''}} value="CANCELED">Hủy dịch vụ</option>
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


     
