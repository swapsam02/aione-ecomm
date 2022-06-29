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

        <!-- App css -->
        <link href="{{ asset('dashboard/dist/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard/dist/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        @yield('content')

        <footer class="footer footer-alt">
            2022 &copy; Ai 1 Store
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('dashboard/dist/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('dashboard/dist/assets/js/app.min.js') }}"></script>
        
    </body>
</html>