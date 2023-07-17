@extends('layouts.admin.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->

                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Tất cả đơn hàng</h4>
                                <form class="app-search d-none d-md-block">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm" autocomplete="off"
                                            id="search-options" value="" />
                                        <span class="mdi mdi-magnify search-widget-icon"></span>
                                        <span
                                            class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                            id="search-close-options"></span>
                                    </div>
                                </form>
                            </div>

                            <!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 46px">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cardtableCheck" />
                                                            <label class="form-check-label" for="cardtableCheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Người mua</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cardtableCheck01" />
                                                            <label class="form-check-label" for="cardtableCheck01"></label>
                                                        </div>
                                                    </td>
                                                    <td><a href="#" class="fw-medium">#VL2110</a></td>
                                                    <td>William Elmore</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
