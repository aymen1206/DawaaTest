<!doctype html>
<html lang="en">
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2017 12:34:57 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('/assets/img/logo/badge.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>HR Coordinator Page</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/css/material-dashboard.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{asset('/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.icon.css')}}" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{asset('/assets/img/sidebar-1.jpg')}}">
           
            <div class="logo logo-mini">
                <a class="simple-text">
                    
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{asset('/assets/img/logo/badge.png')}}" />
                    </div>
                    <a class="simple-text">
                    {{$user->name}}
                    </a>            
                </div>
                <ul class="nav">
                     <li  >
                        <a  href="{{ route('App.show') }}">
                            <i class="material-icons">folder</i>
                            <p>@lang('MainPages.apps')</p>
                        </a>
                    </li>
                     <li  >
                        <a  href="{{ route('App.Reports') }}">
                            <i class="material-icons">desktop_mac</i>
                            <p>@lang('MainPages.Reports')</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">@lang('MainPages.TheApplications')</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="locale/en" >   Enlgish    </a></li>
                            <li><a  href="locale/ar" >    العربية   </a></li>
                            <li><a href="{{ route('profile') }}"><i class="material-icons">
                                person</i></a></li>
                            <li><a   href="{{ route('logout') }}"  onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                <i class="material-icons">power_settings_new</i>
                                </a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf </form></li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>                        
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                            @yield('content')
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>  
</body>
<!--   Core JS Files   -->
<script src="{{asset('/assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('/assets/js/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('/assets/js/moment.min.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{asset('/assets/js/chartist.min.js')}}"></script>
<!--  Plugin for the Wizard -->
<script src="{{asset('/assets/js/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('/assets/js/bootstrap-notify.js')}}"></script>
<!--   Sharrre Library    -->
<script src="{{asset('/assets/js/jquery.sharrre.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{asset('/assets/js/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{asset('/assets/js/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{asset('/assets/js/nouislider.min.js')}}"></script>
<!-- Select Plugin -->
<script src="{{asset('/assets/js/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{asset('/assets/js/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('/assets/js/sweetalert2.js')}}"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('/assets/js/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{asset('/assets/js/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{asset('/assets/js/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('/assets/js/material-dashboard.js')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('/assets/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
   function getPackge(cmd){
    var value = cmd.value;
    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText); exit;
            var obj = JSON.parse(this.responseText)
 
            document.getElementById('pho').value = obj['PHO'];
        }
    };
    xhttp.open("GET", "methods.php?id="+value+"&mthod=getPackge", true);
    xhttp.send();
}
</script>

</html>