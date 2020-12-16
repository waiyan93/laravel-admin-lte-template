<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}">

    @yield('css')
</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="height: auto;">
    <div class="wrapper">
        <!-- Navbar -->
        @include('backend.partials.commons._navbar')

        <!-- Main Sidebar Container -->
        @include('backend.partials.commons._sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- content -->
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('backend.partials.commons._bottom')
    </div>
    <script src="{{ asset('js/backend.js') }}"></script>
    @yield('js')
</body>

</html>