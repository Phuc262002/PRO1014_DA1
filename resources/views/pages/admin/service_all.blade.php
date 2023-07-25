@extends('layouts.admin.master')
@section('title')
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
                                        <p class="text-uppercase fw-medium text-muted mb-0">Invoices Sent</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +89.24 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                                data-target="559.25">0</span>k</h4>
                                        <span class="badge bg-warning me-1">2,258</span> <span class="text-muted"> Invoices
                                            sent</span>
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
                                        <p class="text-uppercase fw-medium text-muted mb-0">Paid Invoices</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-danger fs-14 mb-0">
                                            <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +8.09 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                                data-target="409.66">0</span>k</h4>
                                        <span class="badge bg-warning me-1">1,958</span> <span class="text-muted"> Paid by
                                            clients</span>
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
                                        <p class="text-uppercase fw-medium text-muted mb-0">Unpaid Invoices</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-danger fs-14 mb-0">
                                            <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +9.01 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                                data-target="136.98">0</span>k</h4>
                                        <span class="badge bg-warning me-1">338</span> <span class="text-muted"> Unpaid by
                                            clients</span>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light rounded fs-3">
                                            <i data-feather="clock" class="text-success icon-dual-success"></i>
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
                                        <p class="text-uppercase fw-medium text-muted mb-0">Cancelled Invoices</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +7.55 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                                data-target="84.20">0</span>k</h4>
                                        <span class="badge bg-warning me-1">502</span> <span class="text-muted"> Cancelled
                                            by clients</span>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light rounded fs-3">
                                            <i data-feather="x-octagon" class="text-success icon-dual-success"></i>
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
                                        <div class="d-flex gap-2 flex-wrap">
                                            <button class="btn btn-danger" id="remove-actions" onClick="deleteMultiple()"><i
                                                    class="ri-delete-bin-2-line"></i></button>
                                            <a href="apps-invoices-create.html" class="btn btn-success"><i
                                                    class="ri-add-line align-bottom me-1"></i> Create Invoice</a>
                                        </div>
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

                                        <div class="col-xxl-1 col-sm-4">
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
                                                    <th  data-sort="sdt">Email</th>
                                                    <th  data-sort="service_id">Dịch vụ</th>
                                                    <th  data-sort="book-date">Ngày</th>
                                                    <th  data-sort="book-time">Giờ</th>
                                                    <th  data-sort="pet_name">Tên Pet</th>
                                                    <th  data-sort="description">Ghi chú</th>
                                                    <th  data-sort="status"> Status</th>
                                                    <th  data-sort="action">Action</th>
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
                                                                </td>
                                                                <td class="email">
                                                                    {{ $item-> user->email}}
                                                                </td>
                                                                <td class="service">{{$item->service->name}}</td>
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
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted mb-0">We've searched more than 150+ invoices We did not find any invoices for you search.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                
                                                <div class="d-flex justify-content-end mt-3">
                                                    {{$book_service->appends(request()->query())->links() }}
                                                
                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-labelledby="deleteOrderLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-5 text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px">
                                                            </lord-icon>
                                                            <div class="mt-4 text-center">
                                                                <h4>You are about to delete a order ?</h4>
                                                                <p class="text-muted fs-15 mb-4">Deleting your order will remove all of your information from our database.</p>
                                                                <div class="hstack gap-2 justify-content-center remove">
                                                                    <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                                    <button class="btn btn-danger" id="delete-record">Yes, Delete It</button>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
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
                <div class="modal-dialog modal-dialog-centered">
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
                                    <label for="email-field" class="form-label">Dịch vụ</label>
                                    <input type="text" class="form-control" placeholder="{{$item->service->name}} " disabled />
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


     
