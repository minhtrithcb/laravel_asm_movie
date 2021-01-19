@extends('admin.layout.master')

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Quản lý Phim lẻ</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="/">Dashboard</a></li>
        <li><span>Chỉnh sửa Phim</span></li>
    </ul>
</div>
@endsection

@section('content')
<div class="main-content-inner">
    <div class="  mt-3">
        <a href="admin/filmle"><button class="btn btn-primary">Trở về</button></a>
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-between align-items-center pl-3 pr-3" style="height: 70px; ">
                        <h4 class="header-title m-0">Chỉnh sửa Phim lẻ</h4>
                    </div>
                      {{-- ===== POST UPDATE ===== --}}
                      <form action="admin/filmle/{{$film->id}}" method="POST" id="adddir" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                          <label for="tenphim" class="form-label">Tên Phim</label>
                          <input type="text" class="form-control" id="tenphim" name="tenphim" value="{{$film->title}}">
                          @error('tenphim') <small style="color: #e74c3c">{{$message }}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label for="namphathanh" class="form-label">Năm Phát hành</label>
                            <input type="number" class="form-control" id="namphathanh" name="namphathanh" value="{{$film->year_release}}">
                            @error('namphathanh') <small style="color: #e74c3c">{{$message }}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label for="thoiluong" class="form-label">Thời lượng</label>
                            <input type="number" class="form-control" id="thoiluong" name="thoiluong" value="{{$film->time}}">
                            @error('thoiluong') <small style="color: #e74c3c">{{$message }}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label for="imdb" class="form-label">Điểm IMDB</label>
                            <input type="number" class="form-control" id="imdb" name="imdb" value="{{$film->imdb}}">
                            @error('imdb') <small style="color: #e74c3c">{{$message }}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label for="link" class="form-label">Đường dẫn</label>
                            <input type="text" class="form-control" id="link" name="link" value="{{$film->link}}">
                            @error('link') <small style="color: #e74c3c">{{$message }}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label for="linkyoutube" class="form-label">Đường dẫn youtube</label>
                            <input type="text" class="form-control" id="linkyoutube" name="linkyoutube" value="{{$film->link_youtube}}">
                            @error('linkyoutube') <small style="color: #e74c3c">{{$message }}</small>@enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">Hình poster Cũ</label>
                            <img src="{{ asset('storage/img/'.$film->poster) }}" alt="{{$film->poster}}" width="200px">
                        </div>
                        <div class="form-group">
                            <label for="poster" class="form-label">Hình ảnh poster</label>
                            <input class="form-control" type="file" name="poster" id="poster">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Hình wallpaper Cũ</label>
                            <img src="{{ asset('storage/img/'.$film->wallpaper) }}" alt="{{$film->wallpaper}}" width="200px">
                        </div>
                        <div class="form-group">
                            <label for="wallpaper" class="form-label">Hình ảnh wallpaper</label>
                            <input class="form-control" type="file" name="wallpaper" id="wallpaper">
                        </div>

                        <div class="form-group">
                            <label for="noidung" class="form-label">Nội dung</label>
                            <textarea name="noidung" id="noidung" class="form-control" rows="7">{{$film->content}}</textarea>
                            @error('noidung') <small style="color: #e74c3c">{{$message }}</small>@enderror
                        </div>

                        <div class="form-group">
                            <div class="">Đạo diễn</div>
                            <select class="form-control" name="daodien">
                                @foreach ($dir as $key => $item)
                                    @if ($item->id == $film->dir_id)
                                        <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                    @else
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="">Thể loại:</div>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" 
                                        id="dropdownMenu1" data-toggle="dropdown" 
                                        aria-haspopup="true" aria-expanded="true">
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu checkbox-menu allow-focus" aria-labelledby="dropdownMenu1">
                                    @foreach ($gen as $key => $item)
                                        @if ($item->id == $x[]->id)
                                        <li ><span>
                                            <input type="checkbox" value="{{$item->id}}" id="check{{$key}}" name="theloai[]" checked>
                                            <label style="display: inline" class="form-check-label" for="check{{$key}}">{{$item->name}}</label>
                                        </span></li>
                                        @else
                                        <li ><span>
                                            <input type="checkbox" value="{{$item->id}}" id="check{{$key}}" name="theloai[]">
                                            <label style="display: inline" class="form-check-label" for="check{{$key}}">{{$item->name}}</label>
                                        </span></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection