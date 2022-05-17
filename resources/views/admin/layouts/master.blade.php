<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title> @yield('title') | ORIARTISTS Admin Panel</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Adventures Investment" name="description" />
    <meta content="Adventures" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/img/ico.png">
    @include('admin.layouts.head-css')
</head>
@section('body')
    <body data-sidebar="dark">
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
    @include('admin.layouts.topbar')
    @include('admin.layouts.sidebar1')



        <!--  -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('admin.layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    @include('admin.layouts.vendor-scripts')
</body>

</html>
