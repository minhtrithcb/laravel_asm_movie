@extends('admin.layout.master')

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Quản lí phim</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="/">Trang chủ</a></li>
        <li><span>Quản lí Bộ</span></li>
    </ul>
</div>
@endsection

@section('content')
<div class="main-content-inner">
    <!-- overview area start -->
    <div class="row mt-5">
        <div class="col">
            {{-- <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Quản lý phim</h4>
                        <select class="custome-select border-0 pr-3">
                            <option selected>Last 24 Hours</option>
                            <option value="0">01 July 2018</option>
                        </select>
                    </div>
                    <div id="verview-shart">
                        
                    </div>
                </div>
            </div> --}}
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-between align-items-center pl-3 " style="height: 70px; ">
                        <h4 class="header-title m-0 col-9">Thead secondary</h4>
                        <div class="col-3 d-flex justify-content-between">
                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#addmodel1">Thêm Phim lẻ</button>
                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#addmodel2">Thêm Phim bộ</button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="addmodel1">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Thêm Phim lẻ</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                              <label for="moviename" class="form-label">Tên phim</label>
                                              <input type="text" class="form-control" id="moviename">
                                            </div>
                                           
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase bg-secondary">
                                    <tr class="text-white">
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">date</th>
                                        <th scope="col">price</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>$120</td>
                                        <td><i class="ti-trash"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>jone</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>$150</td>
                                        <td><i class="ti-trash"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>$120</td>
                                        <td><i class="ti-trash"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>jone</td>
                                        <td>09 / 07 / 2018</td>
                                        <td>$150</td>
                                        <td><i class="ti-trash"></i></td>
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
@endsection