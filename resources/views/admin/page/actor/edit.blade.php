@extends('admin.layout.master')

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Quản lý diễn viên</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="/">Dashboard</a></li>
        <li><span>Chỉnh sửa diễn viên</span></li>
    </ul>
</div>
@endsection

@section('content')
<div class="main-content-inner">
    <div class="  mt-3">
        <a href="{{ route('actor.index') }}"><button class="btn btn-primary">Trở về</button></a>
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-between align-items-center pl-3 pr-3" style="height: 70px; ">
                        <h4 class="header-title m-0">Chỉnh sửa diễn viên</h4>
                    </div>
                      {{-- ===== POST UPDATE ===== --}}
                      <form action="{{ route('actor.update',$actor->id)}}" method="POST" id="addactor" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="tendienvien" class="form-label">Đạo diễn viên</label>
                                    <input type="text" class="form-control" id="tendienvien" name="tendienvien" value="{{$actor->name}}">
                                    @error('tendienvien') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                  </div>
          
                                  <div class="form-group">
                                      <label for="namsinh" class="form-label">Năm sinh</label>
                                      <input type="text" class="form-control" id="namsinh" name="namsinh" value="{{$actor->birthday}}">
                                      @error('namsinh') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                  </div>
          
                                  <div class="form-group">
                                      <label for="quoctich" class="form-label">Quốc tịch</label>
                                      <input type="text" class="form-control" id="quoctich" name="quoctich" value="{{$actor->nationality}}">
                                      @error('quoctich') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                  </div>

                                  <div class="form-group">
                                    <label for="chieucao" class="form-label">Chiều cao</label>
                                    <input type="text" class="form-control" id="chieucao" name="chieucao" value="{{$actor->weight}}">
                                    @error('chieucao') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                </div>
          
                                  <div class="form-group ">
                                      <label for="img" class="form-label d-block">Hình cũ</label>
                                      <img src="{{ asset('storage/img/'.$actor->image) }}" id="img" alt="{{$actor->image}}" width="200px">
                                  </div>
                            </div>
                            <div class="col">

                                <div class="form-group">
                                    <label for="cannang" class="form-label">Cân nặng</label>
                                    <input type="text" class="form-control" id="cannang" name="cannang" value="{{$actor->height}}">
                                    @error('cannang') <small style="color: #e74c3c">{{$message }}</small>@enderror
                                </div>

                                <div class="form-group">
                                    <label for="hinh" class="form-label">Hình ảnh</label>
                                    <input class="form-control" type="file" name="hinh" id="hinh">
                                </div>
        
                                <div class="form-group">
                                    <label class="col-form-label">Trạng thái</label>
                                    <select class="form-control" id="trangthai" name="trangthai">
                                        @if ($actor->active == 1)
                                            <option value="1" selected>Hiển thị</option>
                                            <option value="0" >Ẩn đi</option>
                                        @else 
                                            <option value="1" >Hiển thị</option>
                                            <option value="0" selected>Ẩn đi</option>
                                        @endif
                                    </select>
                                </div>
        
                                <div class="form-group">
                                    <label for="tieusu" class="form-label">Tiểu sử</label>
                                    <textarea name="tieusu" id="tieusu" class="form-control" rows="17">{{$actor->story}}</textarea>
                                    @error('tieusu') <small style="color: #e74c3c">{{$message }}</small>@enderror
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