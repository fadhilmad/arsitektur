<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        APP Name
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('assets/administrator/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/administrator/css/paper-dashboard.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/administrator/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/administrator/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="default" data-active-color="danger">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="{{asset('assets/administrator/img/logo-small.png')}}">
                    </div>
                </a>
                <a href="#" class="simple-text logo-normal">
                    Creative Tim
                </a>
            </div>
            @include('layout.administrator.sidebar')
        </div>
        <div class="main-panel">
            @include('layout.administrator.navbar')

            <div class="content">
                @yield('content')
            </div>

            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="credits ml-auto">
                            <span class="copyright">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{asset('assets/administrator/js/core/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/administrator/js/core/popper.min.js')}}"></script>
    <script src="{{asset('/assets/administrator/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/administrator/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('/assets/administrator/js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('/assets/administrator/js/plugins/bootstrap-switch.js')}}"></script>
    <script src="{{asset('/assets/administrator/js/plugins/sweetalert2.min.js')}}"></script>
    <script src="{{asset('/assets/administrator/js/plugins/bootstrap-selectpicker.js')}}"></script>
    <script src="{{asset('/assets/administrator/js/plugins/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('/assets/administrator/js/plugins/jquery.dataTables.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{asset('/assets/administrator/js/plugins/chartjs.min.js')}}"></script>
    <script src="{{asset('/assets/administrator/js/paper-dashboard.min.js')}}"></script>
    <script src="{{asset('/assets/administrator/demo/demo.js')}}"></script>

</body>

</html>
