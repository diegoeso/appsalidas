<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <title>
            @yield('title')
        </title>
        <link href="{{ asset('dist/css/styles.css') }}" rel="stylesheet"/>
        <link crossorigin="anonymous" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
        <script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
        </script>
        <!-- JavaScript -->
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js">
        </script>
        <!-- CSS -->
        <link href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" rel="stylesheet"/>
        <!-- Default theme -->
        <link href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" rel="stylesheet"/>
    </head>
    <body class="sb-nav-fixed">
        @include('layouts.role.administrador.navbar')
        <div id="layoutSidenav">
            @include('layouts.role.administrador.nav')
            <div id="layoutSidenav_content">
                @yield('content')
            @include('layouts.role.administrador.footer')
            </div>
        </div>
        <script>
            var baseuri='{!!asset('');!!}';
        </script>
        {{-- @yield('script') --}}
        <script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.5.1.min.js">
        </script>
        <script crossorigin="anonymous" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js">
        </script>
        <script src="{{ asset('dist/js/scripts.js') }}">
        </script>
        <script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js">
        </script>
        <script src="{{ asset('dist/assets/demo/chart-area-demo.js') }}">
        </script>
        <script src="{{ asset('dist/assets/demo/chart-bar-demo.js') }}">
        </script>
        <script crossorigin="anonymous" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
        </script>
        <script crossorigin="anonymous" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
        </script>
        <script src="{{ asset('dist/assets/demo/datatables-demo.js') }}">
        </script>
        @yield('script')
    </body>
</html>
