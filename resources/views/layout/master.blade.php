<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Raven</title>
    <base href="{{asset('/')}}">
    <link rel="icon" href="img/logo2.png" type="image" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- === opening header === -->
    @include('inc.header')
    <!-- === close header === -->

    <!-- === opening banner === -->
    @include('inc.banner')
    <!-- === close banner === -->

    <!-- === opening content === -->
    <section class="container">
        <div class="row">
            <div class="col-9">
                <div class="content-navi d-flex justify-content-between align-items-center">
                    <b class="col">PHIM HOT</b>
                    <span class="d-flex align-items-center  justify-content-between" >
                        <ul class="d-flex  justify-content-between" style="margin: 0; list-style: none;">
                            <li><a href="a-w" class="a-w">Phim Hot</a></li>
                            <li><a href="a-w" class="a-w" style="margin: 0 10px;">Phim lẻ</a></li>
                            <li><a href="a-w" class="a-w">TV Show</a></li>
                        </ul>
                        <a href="" class="btn btn-danger" style="margin-left: 10px; padding: 0 5px; font-size: 0.9rem;">xem tất cả</a>
                    </span>
                </div>
                @yield('content')
            </div>
            <div class="col-3">
                <div class="content-navi d-flex justify-content-between align-items-center">
                    <b>PHIM HOT TRONG TUẦN</b>
                </div>
                @yield('sidebar')
            </div>
        </div>        
    </section>
    <!-- ==== close content ==== -->

    <!-- === opening content === -->
    <section class="container">
        <div class="row">
            <div class="col-9">
                <div class="content-navi d-flex justify-content-between align-items-center">
                    <b>PHIM BỘ</b>
                    <span class="d-flex align-items-center">
                        <p class="m-0" style="color: gray;">1101</p>
                        <a href="" class="btn btn-danger" style="margin-left: 10px; padding: 0 5px; font-size: 0.9rem;">xem tất cả</a>
                    </span>
                </div>
                @yield('content')
            </div>
            <div class="col-3">
                <div class="content-navi d-flex justify-content-between align-items-center">
                    <b>TOP PHIM CHIẾU RẠP</b>
                </div>
                @yield('sidebar')
            </div>
        </div>        
    </section>
    <!-- ==== close content ==== -->

    <!-- === opening content === -->
    <section class="container">
        <div class="row">
            <div class="col-9">
                <div class="content-navi d-flex justify-content-between align-items-center">
                    <b>PHIM CHIẾU RẠP</b>
                    <span class="d-flex align-items-center">
                        <p class="m-0" style="color: gray;">1101</p>
                        <a href="" class="btn btn-danger" style="margin-left: 10px; padding: 0 5px; font-size: 0.9rem;">xem tất cả</a>
                    </span>
                </div>
                @yield('content')
            </div>
            <div class="col-3">
                <div class="content-navi d-flex justify-content-between align-items-center">
                    <b>TOP PHIM TRUYỀN HÌNH</b>
                </div>
                @yield('sidebar')
            </div>
        </div>        
    </section>
    <!-- ==== close content ==== -->

    <!-- -----opening footer -----  -->
    @include('inc.footer')
    <!-- -----close footer -----  -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/app.js"></script>
</html>