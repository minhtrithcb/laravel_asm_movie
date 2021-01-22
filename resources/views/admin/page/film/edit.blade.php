@extends('admin.layout.master')

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Quản lý Phim</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="/">Dashboard</a></li>
        <li><span>Chỉnh sửa Phim</span></li>
    </ul>
</div>
@endsection

@section('content')
<div class="main-content-inner">
    <div class="  mt-3">
        <a href="{{ url()->previous() }}"><button class="btn btn-primary">Trở về</button></a>
        {{-- <a href="{{route('film.index')}}"><button class="btn btn-primary">Trở về</button></a> --}}
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-between align-items-center pl-3 pr-3" style="height: 70px; ">
                        <h4 class="header-title m-0">Chỉnh sửa Phim</h4>
                    </div>
                      {{-- ===== PUT UPDATE ===== --}}
                      <form action="{{ route('film.update',$film->id) }}" method="post" id="adddir" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="tenphim" class="form-label">Tên Phim</label>
                                    <input type="text" class="form-control" id="tenphim" name="tenphim" value="{{$film->title}}">
                                    @error('tenphim') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                </div>
        
                                <div class="form-group">
                                    <label for="namphathanh" class="form-label">Năm Phát hành</label>
                                    <input type="text" class="form-control" id="namphathanh" name="namphathanh" value="{{$film->year_release}}">
                                    @error('namphathanh') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                </div>
        
                                <div class="form-group">
                                    <label for="thoiluong" class="form-label">Thời lượng</label>
                                    <input type="number" class="form-control" id="thoiluong" name="thoiluong" value="{{$film->time}}">
                                    @error('thoiluong') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                </div>
        
                                <div class="form-group">
                                    <label for="imdb" class="form-label">Điểm IMDB</label>
                                    <input type="text" class="form-control" id="imdb" name="imdb" value="{{$film->imdb}}">
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
                                    <label for="noidung" class="form-label">Nội dung</label>
                                    <textarea name="noidung" id="noidung" class="form-control" rows="7">{{$film->content}}</textarea>
                                    @error('noidung') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                </div>
                            </div>

                            <div class="col">
                                
                                <div class="row d-flex justify-content-between" style="padding: 20px">
                                    <div class="form-group" style="width: 30%; ">
                                        <label class="form-label d-block">Hình poster Cũ</label>
                                        <img src="{{ asset('storage/img/'.$film->poster) }}" alt="{{$film->poster}}" style="height: 230px">
                                    </div>
            
                                    <div class="form-group" style="width: 68%;">
                                        <label class="form-label d-block">Hình wallpaper Cũ</label>
                                        <img src="{{ asset('storage/img/'.$film->wallpaper) }}" alt="{{$film->wallpaper}}" style="height: 230px">
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label for="poster" class="form-label" >Hình ảnh poster</label>
                                    <input class="form-control" type="file" name="poster" id="poster">
                                </div>

                                <div class="form-group">
                                    <label for="wallpaper" class="form-label">Hình ảnh wallpaper</label>
                                    <input class="form-control" type="file" name="wallpaper" id="wallpaper">
                                </div>

                                <div class="form-group">
                                    <label class="">Đạo diễn</label>
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
        
                                <div class="row">
                                    <div class="form-group col-3">
                                        <label class="">Thể loại:</label>
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" 
                                                    id="dropdownMenu1" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="true">
                                              <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu checkbox-menu allow-focus" aria-labelledby="dropdownMenu1">
                                                @foreach ($gen as $key => $item)                                            
                                                    <li ><span>
                                                        <input type="checkbox" value="{{$item->id}}" id="check{{$key}}" name="theloai[]" 
                                                        @foreach ($filmgenres as $i)
                                                            @if ($i->id == $item->id) checked @endif  
                                                        @endforeach >
                                                        <label style="display: inline" class="form-check-label" for="check{{$key}}">{{$item->name}}</label>
                                                    </span></li> 
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
    
                                    <div class="form-group col-3">
                                        <label class="">Diễn viên:</label>
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" 
                                                    id="dropdownMenu2" data-toggle="dropdown" 
                                                    aria-haspopup="true" aria-expanded="true">
                                              <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu checkbox-menu allow-focus" aria-labelledby="dropdownMenu2" style="width: 250px !important">
                                                @foreach ($actor as $key => $item)
                                                <li ><span>
                                                    <input type="checkbox" value="{{$item->id}}" id="checkw{{$key}}" name="dienvien[]"
                                                        @foreach ($filmactor as $i)
                                                            @if ($i->id == $item->id) checked @endif
                                                        @endforeach >
                                                    <label style="display: inline" class="form-check-label" for="checkw{{$key}}">{{$item->name}}</label>
                                                </span></li>
                                              @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
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