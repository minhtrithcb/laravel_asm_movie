@extends('admin.layout.master')

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Quản lí phim</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="/">Dashboard</a></li>
        <li><span>Quản lí phim</span></li>
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
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-between align-items-center pl-3 pr-3" style="height: 70px; ">
                        <h4 class="header-title m-0">Danh sách phim </h4>
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#addmodel1">Thêm Phim </button>
                    </div>
                    <!-- Modal -->
                    @if ($errors->any())
                    <script type="text/javascript">
                        $(document).ready(function () { $('#addmodel1').modal('show');});
                    </script>
                    @endif
                    <div class="modal fade" id="addmodel1">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document" >
                            <div class="modal-content" >
                                <div class="modal-header">
                                    <h5 class="modal-title">Thêm Phim lẻ</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    {{-- ===== POST ADD ===== --}}
                                    <form action="{{ route('film.store') }}" method="POST" id="addgenres" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="tenfilm" class="form-label">Tên Phim</label>
                                                    <input type="text" class="form-control" id="tenfilm" name="tenfilm" value="{{old('tenfilm')}}" placeholder="Tên phim">
                                                    @error('tenfilm')<small style="color: #e74c3c">{{$message }}</small>@enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="namphathanh" class="form-label">Năm phát hành</label>
                                                    <input type="month" class="form-control" id="namphathanh" name="namphathanh" value="{{old('namphathanh')}}" placeholder="Năm phát hành">
                                                    @error('namphathanh')<small style="color: #e74c3c">{{$message }}</small>@enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="diemimdb" class="form-label">Điểm IMDB</label>
                                                    <input type="number" class="form-control" id="diemimdb" name="diemimdb" value="{{old('diemimdb')}}" placeholder="Số điểm imdb">
                                                    @error('diemimdb')<small style="color: #e74c3c">{{$message }}</small>@enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="link" class="form-label">Đường dẫn</label>
                                                    <input class="form-control" type="text" name="link" id="link" placeholder="Đường dẫn phim">
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="thoiluong" class="form-label">Thời lượng</label>
                                                    <input type="number" class="form-control" id="thoiluong" name="thoiluong" value="{{old('thoiluong')}}" placeholder="Thời gian chiếu">
                                                    @error('thoiluong')<small style="color: #e74c3c">{{$message }}</small>@enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="linkyoutube" class="form-label">Đường đẫn youtube</label>
                                                    <input class="form-control" type="text" name="linkyoutube" id="linkyoutube" placeholder="Đường dẫn youtube">
                                                </div>
                                              
                                                <div class="form-group">
                                                    <label for="noidung" class="form-label">Nội dung</label>
                                                    <textarea class="form-control" id="noidung" name="noidung" rows="6"  placeholder="Điền nội dung">{{old('noidung')}}</textarea>
                                                    @error('noidung')<small style="color: #e74c3c">{{$message }}</small>@enderror
                                                </div>

                                            </div>

                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="poster" class="form-label">Hình ảnh poster</label>
                                                    <input class="form-control" type="file" name="poster" id="poster">
                                                    @error('poster')<small style="color: #e74c3c">{{$message }}</small>@enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="wallpaper" class="form-label">Hình ảnh Wallpaper</label>
                                                    <input class="form-control" type="file" name="wallpaper" id="wallpaper">
                                                    @error('wallpaper')<small style="color: #e74c3c">{{$message }}</small>@enderror
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-4">
                                                        <div class="">Thể loại:</div>
                                                        <div class="dropdown">
                                                            <button class="btn btn-default dropdown-toggle" type="button" 
                                                                    id="dropdownMenu1" data-toggle="dropdown" 
                                                                    aria-haspopup="true" aria-expanded="true">
                                                              <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu checkbox-menu allow-focus" aria-labelledby="dropdownMenu1">
                                                                @foreach ($genres as $key => $item)
                                                                <li ><span>
                                                                    <input type="checkbox" value="{{$item->id}}" id="check{{$key}}" name="theloai[]">
                                                                    <label style="display: inline" class="form-check-label" for="check{{$key}}">{{$item->name}}</label>
                                                                </span></li>
                                                              @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <div class="">Diễn viên:</div>
                                                        <div class="dropdown">
                                                            <button class="btn btn-default dropdown-toggle" type="button" 
                                                                    id="dropdownMenu2" data-toggle="dropdown" 
                                                                    aria-haspopup="true" aria-expanded="true">
                                                              <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu checkbox-menu allow-focus" aria-labelledby="dropdownMenu2" style="width: 250px !important">
                                                                @foreach ($actor as $key => $item)
                                                                <li ><span>
                                                                    <input type="checkbox" value="{{$item->id}}" id="checkw{{$key}}" name="dienvien[]">
                                                                    <label style="display: inline" class="form-check-label" for="checkw{{$key}}">{{$item->name}}</label>
                                                                </span></li>
                                                              @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="">Đạo diễn</div>
                                                    <select class="form-control" name="daodien">
                                                        @foreach ($dir as $key => $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://dashboard.jwplayer.com/#/content/list?property=cdfb36de-70bf-11ea-ad56-9afb9ec3d975&pageLength=10&view=list">
                                        <div class="btn btn-info">Lấy đường dẫn phim</div></a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- === table === --}}
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase" style="background-color: #303641">
                                    <tr class="text-white">
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên Phim</th>
                                        <th scope="col">năm phát hành</th>
                                        <th scope="col">Thời lượng</th>
                                        <th scope="col">Hình</th>
                                        <th scope="col">Thông tin khác</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($film as $key => $item)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td style="width: 200px">{{$item->title}}</td>
                                        <td>{{$item->year_release}}</td>
                                        <td>{{$item->time}} phút</td>
                                        <td>
                                            <img src="{{ asset('storage/img/'.$item->poster) }}" alt="{{$item->poster}}" style="width: 60px; height: 70px; object-fit: cover">
                                        </td>
                                        <td>
                                            <a href="{{ route('film.show',$item->id) }}" class="btn btn-primary rounded-0">Xem chi tiết</a>
                                        </td>
                                        <td>
                                            <form action=" {{ route('film.destroy',$item->id)}}" method="post" style="display: inline"> 
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger rounded-0" onclick="return confirm('Bạn có muốn xóa không')">Xóa</button>
                                            </form>
                                            <a href="{{ route('film.edit',$item->id)}} ">
                                                <div class="btn btn-info rounded-0">Sửa</div>
                                            </a>
                                        </td>
                                    </tr>    
                                    @endforeach                     
                                </tbody>
                            </table>
                            {{ $film->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection