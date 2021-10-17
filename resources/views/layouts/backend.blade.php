<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>TakeMyITClass</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="frontendIT/assets/images/fav-icon/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="backendIT/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="backendIT/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="backendIT/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-layout="horizontal" data-topbar="dark">

<!-- Begin page -->
<div id="layout-wrapper">
   @include('layouts.includes.header')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                @yield('content')

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © TakeMyITClass. </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block"> Crafted With <i class="mdi mdi-heart text-danger"></i> by <a href="https://steveowago.me" target="_blank" class="text-reset">Steve Owago</a> </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="backendIT/assets/libs/jquery/jquery.min.js"></script>
<script src="backendIT/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="backendIT/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="backendIT/assets/libs/simplebar/simplebar.min.js"></script>
<script src="backendIT/assets/libs/node-waves/waves.min.js"></script>
<script src="backendIT/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="backendIT/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

<!-- apexcharts -->
<script src="backendIT/assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="backendIT/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="backendIT/assets/js/app.js"></script>

</body>
</html>
