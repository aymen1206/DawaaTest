
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

    <script type="text/javascript">
        $(function(){
            $("input[name=ph]")[0].oninvalid = function () {
            this.setCustomValidity("رقم الجوال غير صحيح");
        };
        $("input[name=ph]")[0].oninput= function () {
            this.setCustomValidity("");
        };
        });
    </script>
    <script src="{{asset('/app-assets/js/js/main.js')}}"></script><!-- Incude Main JS-->
    <title>إذارة تطبيق اكس</title>
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
                <div class="col-md-6">
                    <div class="top-menu text-right">
                        <ul class="list-unstyled px-0">
                            <li class="menu">
                                <a href="#" class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti ti-settings"></i></a>
                                <div class="dropdown-menu wow zoomIn" aria-labelledby="dropdownMenuLink" data-wow-duration="1s">
                                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                        <span class="sign"><i class="ti ti-user"></i></span>
                                        <div class="caption">
                                            <p>الملف الشخصي</p>

                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"  
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="sign"><i class="ti ti-lock"></i></span>
                                        <div class="caption">
                                            <p>تسجيل الخروج</p>

                                        </div>
                                    </a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
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

    <!-- START MAIN TABS -->
    <section class="main-tabs">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item">
                    <a class="nav-link " id="contact-tab" data-toggle="tab" href="#tow" role="tab" aria-controls="contact" aria-selected="false"><i class="ti ti-user"></i>موظفين الموارد البشرية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{ route('App.admin') }}" ><i class="ti ti-layers-alt"></i>مراجعة الطلبات</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show  wow flipInX" id="tow" role="tabpanel" aria-labelledby="contact-tab" data-wow-duration="1s">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('users') }}">إضافة   موظف  جديد</a></li>
                        <li><a href="{{ route('user.show') }}">إدارة  موظفين الموارد البشرية</a></li>
                    </ul>
                </div>

            </div>
        </div><!-- End Container -->
    </section>
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