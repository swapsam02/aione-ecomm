<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dashboard/dist/assets/images/favicon.ico') }}">

        <!-- third party css -->
        <link href="{{ asset('dashboard/dist/assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/dist/assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{ asset('dashboard/dist/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/dist/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('admin.elements.header')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.elements.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <!-- content -->
                @yield('content')
                <!-- Footer Start -->
                @include('admin.elements.footer')
                <!-- end Footer -->
            </div>
        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('dashboard/dist/assets/js/vendor.min.js') }}"></script>

        <!-- Third Party js-->
        <script src="{{ asset('dashboard/dist/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('dashboard/dist/assets/libs/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('dashboard/dist/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('dashboard/dist/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dashboard/dist/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('dashboard/dist/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('dashboard/dist/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <!-- third party js ends -->

        <!-- Dashboard init -->
        <script src="{{ asset('dashboard/dist/assets/js/pages/dashboard-2.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('dashboard/dist/assets/js/app.min.js') }}"></script>
        
    </body>
</html>