<!doctype html>
<html lang="ar">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{asset('/app-assets/css/bootstrap.min.css')}}"><!-- Incude Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('/app-assets/css/themify-icons.css')}}"><!-- Incude Themify Icon -->
    <link rel="stylesheet" href="{{asset('/app-assets/css/jquery.dataTables.min.css')}}"><!-- Incude Data Table -->
    <link rel="stylesheet" href="{{asset('/app-assets/css/animate.css')}}"><!-- Incude Animate Css -->
    <link rel="stylesheet" href="{{asset('/app-assets/css/main.css')}}"><!-- Incude Main Css -->
    <script src="{{asset('/app-assets/js/js/jquery-3.2.1.slim.min.js')}}"></script><!-- Incude JQuery -->
    <script src="{{asset('/app-assets/js/js/popper.min.js')}}"></script><!-- Incude Popper Js -->
    <script src="{{asset('/app-assets/js/js/bootstrap.min.js')}}"></script><!-- Incude Bootsrap Js -->
    <script src="{{asset('/app-assets/js/js/jquery.dataTables.min.js')}}"></script><!-- Incude Data Table -->
    <script src="{{asset('/app-assets/js/js/wow.min.js')}}"></script><!-- Incude Wow JS-->
    <script src="{{asset('/app-assets/js/js/jquery.nicescroll.min.js')}}"></script><!-- Incude Nice Scroll JS-->
    <script>
        new WOW().init(); /* Trigger Wow JS */
    </script>
    <script src="{{asset('/app-assets/js/js/main.js')}}"></script><!-- Incude Main JS-->
    <title>تعبئة  طلب التقديم</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/app-assets/images/logo/logo.png')}}">
</head>

<body>

    <!-- START TOP HEADER AREA -->
    <div class="top-area text-white">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="logo-area py-2">
                        <img src="{{asset('/app-assets/images/logo/logo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="search-input wow flipInX" data-wow-duration="1s">
                <div class="box">
                    <i class="ti ti-arrow-left"></i>
                    <input type="text" dir="rtl" />
                </div>
            </div>
        </div><!-- End Container -->
    </div>
    <!-- END TOP HEADER AREA -->
            @yield('content')
    <div class="footer-copyright text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer-copy-right">
                        <p class="text-white">تم تصميم البرنامج عن طريق المبرمج &copy; <a href="#">ايمن هاشم</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>