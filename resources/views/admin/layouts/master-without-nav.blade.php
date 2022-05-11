<!doctype html>
<html>

    <head>
        <meta charset="utf-8" />

        <title>Adventures Admin Panel</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Adventures Investment" name="description" />
        <meta content="Adventures, Investment, Mobility, Fintech, Technology" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/img/ico.png">
        @include('admin.layouts.head-css')
  </head>

    @yield('body')

    @yield('content')

    @include('admin.layouts.vendor-scripts')
    </body>
</html>
