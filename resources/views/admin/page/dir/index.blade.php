@extends('admin.layout.master')

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Quản lý thông tin đạo diễn</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="/">Dashboard</a></li>
        <li><span>Quản lý thông tin đạo diễn</span></li>
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
                        <h4 class="header-title m-0">Danh sách Đạo diễn</h4>
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#addmodel1">Thêm Đạo diễn</button>
                    </div>
                    <!-- Modal -->
                    @if ($errors->any())
                    <script type="text/javascript">
                        $(document).ready(function () { $('#addmodel1').modal('show');});
                    </script>
                    @endif
                    <div class="modal fade" id="addmodel1" >
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Thêm Đạo diễn</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- ===== POST ADD ===== --}}
                                        <form action="{{route('director.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="tendaodien" class="form-label">Tên đạo diễn</label>
                                                        <input type="text" class="form-control" id="tendaodien" name="tendaodien" value="{{old('tendaodien')}}">
                                                        @error('tendaodien') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="namsinh" class="form-label">Năm sinh</label>
                                                        <input type="date" class="form-control" id="namsinh" name="namsinh" value="{{old('namsinh')}}">
                                                        @error('namsinh') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="quoctich" class="form-label">Quốc tịch</label>
                                                        <input type="text" class="form-control" id="quoctich" name="quoctich" value="{{old('quoctich')}}">
                                                        @error('quoctich') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="hinh" class="form-label">Hình ảnh</label>
                                                        <input class="form-control" type="file" name="hinh" id="hinh">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tieusu" class="form-label">Tiểu sử</label>
                                                        <textarea name="tieusu" id="tieusu" class="form-control">{{old('tieusu')}}</textarea>
                                                        @error('tieusu') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Trạng thái</label>
                                                        <select class="form-control" name="trangthai">
                                                            <option value="1" selected>Hiển thị</option>
                                                            <option value="0">Ẩn đi</option>
                                                        </select>
                                                    </div>
                                                </div>
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
                                        <th scope="col">Tên Đạo diễn</th>
                                        <th scope="col">Năm sinh</th>
                                        <th scope="col">Quốc tịch</th>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col" style="width: 300px">Tiểu sử</th>
                                        <th scope="col">Lược xem</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dir as $key => $item)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->birthday}}</td>
                                        <td width="150px">{{$item->nationality}}</td>
                                        <td>
                                            <img src="{{ asset('storage/img/'.$item->image) }}" alt="{{$item->image}}" style="width: 100px">
                                        </td>
                                        <td>{{Str::substr($item->story, 0, 100) }} ...</td>
                                        <td>{{$item->view}}</td>
                                        <td>
                                            @if ($item->active == 1)
                                                <span class="badge bg-success text-white">Đang hiện</span></td>
                                            @else 
                                                <span class="badge bg-danger text-white">Đang Ẩn</span></td>
                                            @endif
                                        <td>
                                            <form action="{{ route('director.destroy',$item->id)}}" method="post" style="display: inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger rounded-0" onclick="return confirm('Bạn có muốn xóa không')">Xóa</button>
                                            </form> 
                                            <a href="{{ route('director.edit',$item->id)}}">
                                                <div class="btn btn-info rounded-0">Sửa</div>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $dir->links("pagination::bootstrap-4") }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection