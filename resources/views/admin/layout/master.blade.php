<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Raven Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <base href="{{asset('/')}}">
    <link rel="shortcut icon" type="image/png" href="assetsx/images/logo2.png">
    <link rel="stylesheet" href="assetsx/css/cas.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="assetsx/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetsx/css/font-awesome.min.css">
    <link rel="stylesheet" href="assetsx/css/themify-icons.css">
    <link rel="stylesheet" href="assetsx/css/metisMenu.css">
    <link rel="stylesheet" href="assetsx/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assetsx/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assetsx/css/typography.css">
    <link rel="stylesheet" href="assetsx/css/default-css.css">
    <link rel="stylesheet" href="assetsx/css/styles.css">
    <link rel="stylesheet" href="assetsx/css/responsive.css">
    <!-- modernizr css -->
    <script src="assetsx/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="assetsx/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="/"><img src="assetsx/images/logo2.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                   @include('admin.inc.nav')
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area" style="padding: 0 30px;">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix" >
                        <div class="user-profile pull-right " style="background-color: white">
                            {{-- <img class="avatar user-thumb" src="assetsx/images/logo2.png" alt="avatar" style="object-fit: cover;"> --}}
                            <h4 class="user-name dropdown-toggle" style="color: black" data-toggle="dropdown"><b style="color: #e74c3c">Võ Minh Trí</b>  <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Thông tin</a>
                                <a class="dropdown-item" href="#">Cài đặt</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area" style="padding: 20px;">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        @yield('breadcrumbs')
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            @yield('content')
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2021. design by <a href="../">Raven</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    
    <!-- bootstrap 4 js -->
    
    <script src="assetsx/js/popper.min.js"></script>
    <script src="assetsx/js/bootstrap.min.js"></script>
    <script src="assetsx/js/owl.carousel.min.js"></script>
    <script src="assetsx/js/metisMenu.min.js"></script>
    <script src="assetsx/js/jquery.slimscroll.min.js"></script>
    <script src="assetsx/js/jquery.slicknav.min.js"></script>
    <script src="assetsx/js/plugins.js"></script>
    <script src="assetsx/js/scripts.js"></script>
    <script>
        $(".checkbox-menu").on("change", "input[type='checkbox']", function() {
        $(this).closest("li").toggleClass("active", this.checked);
        });

        $(document).on('click', '.allow-focus', function (e) {
            e.stopPropagation();
        });
    </script>
    <!-- others plugins -->
    
</body>

</html>
