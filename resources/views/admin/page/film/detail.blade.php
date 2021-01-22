@extends('admin.layout.master')

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
    <h4 class="page-title pull-left">Quản lí phim</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="/">Dashboard</a></li>
        <li><span>Chi tiết phim {{ $film->title }}</span></li>
    </ul>
</div>
@endsection

@section('content')

<div class="main-content-inner">
    <div class="  mt-3 d-flex justify-content-between">
        <a href="{{ url()->previous() }}"><button class="btn btn-primary">Trở về</button></a>
    </div>
    <!-- overview area start -->
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('storage/img/'.$film->poster) }}" alt="">
                            <div class="row d-flex align-items-center justify-content-between p-3">
                                <button type="button" class="btn btn-primary" style="width: 48%" data-bs-toggle="modal" data-bs-target="#addmodel1x">Xem phim</button>
                                <button type="button" class="btn btn-primary" style="width: 48%" data-bs-toggle="modal" data-bs-target="#addmodel2x">Xem trailer</button>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="d-flex align-items-center justify-content-between">
                                <h1>{{$film->title}}</h1>
                                <a href="{{route('film.edit', $film->id) }}"><button class="btn btn-primary">Chỉnh sửa</button></a>
                            </div>
                            <div class="mt-3 d-flex align-items-center  p-0">
                                <div class="btn btn-danger p-1 pl-2 pr-2 mr-5" style="height: 30px;">Điểm IMDB: {{$film->imdb}}</div>
                                <div class="mr-5"><span>Năm: </span>{{$film->year_release}}</div>
                                <div class="mr-5"><span>Thời lượng: </span>{{$film->time}} phút</div>
                                <div >{{$film->view}} lược xem</div>
                            </div>
                            <div class="mt-3 p-0">
                                <b style="font-size: 1rem">Thể loại: </b>
                                @foreach ($gen as $item)
                                    <a href="" class="p-2">{{$item->name}}</a>
                                @endforeach
                            </div>
                            <hr>
                            <p style="font-size: 1.1rem" class="mb-3">Nội Dung:</p>
                            <div class=""> {{$film->content}} </div>

                            <div class="mt-4">
                                <img src="{{ asset('storage/img/'.$film->wallpaper) }}" alt="">
                            </div>

                            <hr>
                            <p style="font-size: 1.1rem" class="mb-3">Diễn viên:</p>
                            <div class="row"> 
                                @foreach ($actor as $item)
                                <div class="card col-3">
                                    <img src="{{ asset('storage/img/' . $item->image)}}" class="card-img-top" style="height: 200px ; object-fit: cover">
                                    <div class="card-body">
                                        <h6 class="card-title">{{$item->name}}</h6>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- model 1 --}}
<div class="modal fade" id="addmodel1x">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title">Xem Phim</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                @php
                    echo $film->link;
                @endphp
            </div>
        </div>
    </div>
</div>

{{-- model 2 --}}
<div class="modal fade" id="addmodel2x">
    <div class="modal-dialog modal-dialog-centered  mw-100 w-50" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title">Xem trailer</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center w-100 shit">
                @php
                    echo $film->link_youtube;
                @endphp
            </div>
        </div>
    </div>
</div>

@endsection