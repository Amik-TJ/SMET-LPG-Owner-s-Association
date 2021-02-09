<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LPG Auto Gas Station & Conversion Workshop Owner's Association Bangladesh">
    <link rel="icon" href="/images/logo1.png">



{{-----------------------------Quixlab Theme Styles Starts-------------------------------------}}
<!-- Chartist -->
    <link rel="stylesheet" href="/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    {{-----------------------------Quixlab Theme Styles Ends-------------------------------------}}


    <title>LPG Auto Gas Station & Conversion Workshop Owner's Association Bangladesh</title>



    {{--DataLoader Table--}}
    @yield('data_table_bootstrap')
    @yield('custom_style')
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
    <!-- Topbar -->
@include('inc.quixlab_topbar')
<!-- End of Topbar -->


@include('inc.quixlab_sidebar')


<!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

    {{--<div class="container-fluid mt-3">--}}

    <!-- Begin Page Content -->
    @include('inc.messages')
    @yield('content')
    <!-- /.container-fluid -->


    </div>
@include('inc.quixlab_footer')
<!--**********************************
       Main wrapper end
   ***********************************-->
</div>
<!--**********************************
      Quix Lab Scripts
   ***********************************-->

<script src="plugins/common/common.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/settings.js"></script>
<script src="js/gleek.js"></script>
<script src="js/styleSwitcher.js"></script>
<!--**********************************
      Quix Lab Scripts Ends
   ***********************************-->




@yield('data_table')
@yield('filename_bootstrap_js')
@yield('extra_js')
</body>
</html>





