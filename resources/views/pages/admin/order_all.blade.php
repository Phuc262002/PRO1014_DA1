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
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">0</span>k</h4>
                                            <span class="badge bg-warning me-1">2,258</span> <span class="text-muted"> Invoices sent</span>
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
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="409.66">0</span>k</h4>
                                            <span class="badge bg-warning me-1">1,958</span> <span class="text-muted"> Paid by clients</span>
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
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="136.98">0</span>k</h4>
                                            <span class="badge bg-warning me-1">338</span> <span class="text-muted"> Unpaid by clients</span>
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
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="84.20">0</span>k</h4>
                                            <span class="badge bg-warning me-1">502</span> <span class="text-muted"> Cancelled by clients</span>
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
                                        <h5 class="card-title mb-0 flex-grow-1">Quản lý đơn hàng</h5>
                                        <div class="flex-shrink-0">
                                            <div class="d-flex gap-2 flex-wrap">
                                            	<button class="btn btn-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            	<a href="apps-invoices-create.html" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Create Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body bg-soft-light border border-dashed border-start-0 border-end-0">
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
                                                            {{$item->coupon_id}}
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
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                    <a class="text-success d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                        <i class="ri-eye-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                                    <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                    <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
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
                                            {{ $order->appends(request()->query())->links() }}
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
            <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" autocomplete="off">
                            <div class="modal-body">
                                <input type="hidden" id="id-field" />

                                <div class="mb-3" id="modal-id" style="display: none;">
                                    <label for="id-field1" class="form-label">ID</label>
                                    <input type="text" id="id-field1" class="form-control" placeholder="ID" readonly />
                                </div>

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Customer Name</label>
                                    <input type="text" id="customername-field" class="form-control" placeholder="Enter name" required />
                                    <div class="invalid-feedback">Please enter a customer name.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="email-field" class="form-label">Email</label>
                                    <input type="email" id="email-field" class="form-control" placeholder="Enter email" required />
                                    <div class="invalid-feedback">Please enter an email.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="phone-field" class="form-label">Phone</label>
                                    <input type="text" id="phone-field" class="form-control" placeholder="Enter phone no." required />
                                    <div class="invalid-feedback">Please enter a phone.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="date-field" class="form-label">Joining Date</label>
                                    <input type="date" id="date-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" required placeholder="Select date" />
                                    <div class="invalid-feedback">Please select a date.</div>
                                </div>

                                <div>
                                    <label for="status-field" class="form-label">Status</label>
                                    <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                        <option value="">Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Block">Block</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        @endsection