@extends('admin.layout.master')

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Quản lý thể loại</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="/">Dashboard</a></li>
        <li><span>Chỉnh sửa thể loại phim</span></li>
    </ul>
</div>
@endsection

@section('content')
<div class="main-content-inner">
    <div class="  mt-3">
        <a href="{{ route('genres.index') }}"><button class="btn btn-primary">Trở về</button></a>
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-between align-items-center pl-3 pr-3" style="height: 70px; ">
                        <h4 class="header-title m-0">Chỉnh sửa thể loại</h4>
                    </div>
                    
                      {{-- ===== POST UPDATE ===== --}}
                      <form action="{{ route('genres.update',$genres->id)}}" method="POST" id="addgenres">
                        @method('put')
                        @csrf
                        <div class="form-group">
                          <label for="tentheloai" class="form-label">Tên Thể loại</label>
                          <input type="text" class="form-control" id="tentheloai" name="tentheloai" value="{{$genres->name}}">
                          @error('tentheloai')
                            <small style="color: #e74c3c">{{$message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Trạng thái</label>
                            <select class="form-control" id="trangthai" name="trangthai">
                                @if ($genres->active == 1)
                                    <option value="1" selected>Hiển thị</option>
                                    <option value="0" >Ẩn đi</option>
                                @else 
                                    <option value="1" >Hiển thị</option>
                                    <option value="0" selected>Ẩn đi</option>
                                @endif
                            </select>
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