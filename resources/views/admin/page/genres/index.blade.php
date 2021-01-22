@extends('admin.layout.master')

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Quản lý thể loại</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="/">Dashboard</a></li>
        <li><span>Quản lý thể loại phim</span></li>
    </ul>
</div>
@endsection

@section('content')
<div class="main-content-inner">
    <!-- overview area start -->
    @if (session('msg'))
        <div class="alert alert-success  mt-3" role="alert">
            {{session('msg')}}
        </div>
    @endif
  
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-between align-items-center pl-3 pr-3" style="height: 70px; ">
                        <h4 class="header-title m-0">Danh sách thể loại</h4>
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#addmodel1">Thêm thể loại</button>
                    </div>
                    <!-- Modal -->
                    @if ($errors->any())
                    <script type="text/javascript">
                        $(document).ready(function () { $('#addmodel1').modal('show');});
                    </script>
                    @endif
                    <div class="modal fade" id="addmodel1" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Thêm Thể loại</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- ===== POST ADD ===== --}}
                                        <form action="{{ route('genres.store') }}" method="POST" id="addgenres">
                                            @csrf
                                            <div class="form-group">
                                              <label for="tentheloai" class="form-label">Tên Thể loại</label>
                                              <input type="text" class="form-control" id="tentheloai" name="tentheloai" value="{{old('tentheloai')}}">
                                              @error('tentheloai')
                                                <small style="color: #e74c3c">{{$message }}</small>
                                              @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Trạng thái</label>
                                                <select class="form-control" id="trangthai" name="trangthai">
                                                    <option value="1" selected>Hiển thị</option>
                                                    <option value="0">Ẩn đi</option>
                                                </select>
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
                                <thead class="text-uppercase" style="background-color: #303641">
                                    <tr class="text-white">
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên Thể loại</th>
                                        <th scope="col">Tên Slug</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($genres as $key => $item)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->slug}}</td>
                                        <td>
                                            @if ($item->active == 1)
                                                <span class="badge bg-success text-white">Đang hiện</span></td>
                                            @else 
                                                <span class="badge bg-danger text-white">Đang Ẩn</span></td>
                                            @endif
                                        <td>
                                            <form action="{{ route('genres.destroy', $item->id) }}" method="post" style="display: inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger rounded-0" onclick="return confirm('Bạn có muốn xóa không')">Xóa</button>
                                            </form>
                                            <a href="{{ route('genres.edit', $item->id)}}">
                                                <div class="btn btn-info rounded-0">Sửa</div>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $genres->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection