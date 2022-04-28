<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zinzer - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('Admin.layouts.head')
</head>

<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <!-- Sidebar -->
        @include('Admin.layouts.Sidebar')
        <!-- End Sidebar -->
        <div class="content-page">
            <div class="content">

                @include('Admin.layouts.Header')
                @yield('content')
            </div>

            <!-- Footer -->
            @include('Admin.layouts.footer')
            <!-- End Footer -->
        </div>

    </div>

    @include('Admin.layouts.footerJs')
</body>

</html>
