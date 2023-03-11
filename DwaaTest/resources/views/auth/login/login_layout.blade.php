<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>X-App</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap-extended.css')}}">

    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/app.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('/app-assets/css/scroll.css')}}">
    <!-- END Page Level CSS-->
    <script src="{{asset('/app-assets/js/scripts/jquery/jquery.js')}}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('/app-assets/css/main.css')}}"><!-- Incude Main Css -->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns"  style="background-color:#1f1f14;">

    @yield('content')
                






<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript" src="{{asset('app-assets/dataTable/dataTables.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{{--<script type="text/javascript" src="{{asset('app-assets/dataTable/buttons.min.js')}}"></script>--}}
<!-- BEGIN VENDOR JS-->
<script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>

<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('/app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>

<script src="{{asset('/app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>

<script src="{{asset('/app-assets/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>
<script src="{{asset('/app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"
        type="text/javascript"></script>

<script src="{{asset('/app-assets/data/jvector/visitor-data.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->


<script>
    $(document).ready(function ($) {
        $('#myTable').DataTable({
            columnDefs: [
                {
                    targets: [0, 1, 2],

                }
            ],
            iDisplayLength: 50,
            bPaginate:true,
            sPaginationType:"full_numbers",
            bLengthChange: true,
            bInfo : true,
            order: [[ 0, "desc" ]],
            lengthMenu: [ [10, 50, 100, -1], [10, 50, 100, "All"] ],

        });
    });
</script>
<script type="text/javascript">
    $('.changeStatusToVerify').on('click', function () {
        var request_id = $(this).attr('reqid');
        if (!confirm('Are you sure you want to verify this request?')) {
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: '{{-- URL::Route("/admin/update-status-to-verify") --}}',
                data: {request_id: request_id},
                success: function (data) {
                    window.location.reload();
                }
            });
        }
    });
</script>
<script src="{{asset('/app-assets/js/scrolljs.min.js')}}" crossorigin="anonymous"></script>


<script>
    $(function () {
        $('.datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $("#start-date").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
            onClose: function (selectedDate) {
                $("#end-date").datepicker("option", "minDate", selectedDate);
            }
        });
        $("#end-date").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
            onClose: function (selectedDate) {
                $("#start-date").datepicker("option", "maxDate", selectedDate);
            }
        });
    });
</script>
<script>
    $(function () {
        $('.scrolldiv').floatingScrollbar();
    });

</script>
<script type="text/javascript">
    function download_csv(csv, filename) {
        var csvFile;
        var downloadLink;

        // CSV FILE
        csvFile = new Blob([csv], {type: "text/csv"});

        // Download link
        downloadLink = document.createElement("a");

        // File name
        downloadLink.download = filename;

        // We have to create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);

        // Make sure that the link is not displayed
        downloadLink.style.display = "none";

        // Add the link to your DOM
        document.body.appendChild(downloadLink);

        // Lanzamos
        downloadLink.click();
    }

    function export_table_to_csv(filename) {
        var csv = [];
        var rows = document.querySelectorAll("table tr");

        for (var i = 0; i < rows.length; i++) {
            var row = [], cols = rows[i].querySelectorAll("td, th");

            for (var j = 0; j < cols.length; j++)
                row.push("\"" + cols[j].innerText + "\"");

            csv.push(row.join(","));
        }

        // Download CSV
        download_csv(csv.join("\n"), filename);
    }

    document.getElementById("jsonfile").addEventListener("click", function () {
        // var html = document.querySelector("table").outerHTML;
        export_table_to_csv("table.csv");
    });


</script>
</body>
</html>