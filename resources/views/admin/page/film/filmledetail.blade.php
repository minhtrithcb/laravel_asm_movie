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
    <div class="  mt-3">
        <a href="admin/filmle"><button class="btn btn-primary">Trở về</button></a>
    </div>
    <!-- overview area start -->
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-between align-items-center pl-3 pr-3" style="height: 70px; ">
                        <h4 class="header-title m-0">Thông tin chi tiết</h4>
                    </div>
                    {{-- === table === --}}
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase" style="background-color: #303641">
                                    <tr class="text-white">
                                        <th scope="col" width="200px">Đường dẫn</th>
                                        <th scope="col" width="200px">Link youtube</th>
                                        <th scope="col" width="200px">Nội dung</th>
                                        <th scope="col"  width="150px">Hình</th>
                                        <th scope="col" width="150px">Hình slide</th>
                                        <th scope="col">Thể loại</th>
                                        <th scope="col">Đạo diễn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$film->link}}</td>
                                        <td>{{$film->link_youtube}}</td>
                                        <td>{{$film->content}} ...</td>
                                        {{-- <td>{{Str::substr($film->content, 0, 100)}} ...</td> --}}
                                        <td>
                                            <img src="{{ asset('storage/img/'.$film->poster) }}" alt="">
                                        </td>
                                        <td>
                                            <img src="{{ asset('storage/img/'.$film->wallpaper) }}" alt="">
                                        </td>
                                        <td>
                                            <ul>
                                            @foreach ($gen as $item)
                                                <li>{{$item->name}}</li>
                                            @endforeach
                                            </ul>
                                        </td>
                                        <td>{{$dir->name}}</td>
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