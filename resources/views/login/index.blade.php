<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/img/img-4-blt.png')}}">
    <link rel="icon" type="image/png" href="{{url('assets/img/img-4-blt.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        DSATELI3R - Administrator
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/administrator/icons/font-awesome.min.css') }}">

    <!-- CSS Files -->
    <link href="{{ asset('assets/administrator/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/administrator/css/paper-dashboard.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/administrator/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/administrator/css/plugins/toastr.min.css') }}" rel="stylesheet" />
</head>

<body class="login-page">
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                {{-- <a class="navbar-brand" href="javascript:;">DSATELI3R</a> --}}
                <a><img href="/" src="{{url('assets/img/img-5-blt.png')}}" class="rounded-2" style="widht:10px; height:35px" alt=""></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">
                            <i class="nc-icon nc-layout-11"></i>
                            Landing Page
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page ">
        <div class="full-page section-image" filter-color="black"
            style="background-image: url('{{ asset('assets/administrator/img/bg/fabio-mangione.jpg') }}')">
            <div class="content">
                <div class="container">
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                        <form id="form-login">
                            <div class="card card-login">
                                <div class="card-header">
                                    <div class="card-header ">
                                        <h3 class="header text-center">Login Page</h3>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-single-02"></i>
                                            </span>
                                        </div>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-key-25"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password" placeholder="Password"
                                            class="form-control">
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <button class="btn btn-danger btn-round btn-block mb-3" type="submit">Sign
                                        In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a></li>
                                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>, made with <i class="fa fa-heart heart"></i> by DSATELI3R
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/administrator/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/administrator/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/administrator/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/administrator/js/plugins/fecth-api.min.js') }}"></script>
    <script src="{{ asset('/assets/administrator/js/plugins/loadingoverlay.min.js') }}"></script>
    <script src="{{ asset('/assets/administrator/js/plugins/toastr.min.js') }}"></script>
    <script>
        toastr.options.positionClass = "toast-top-center mt-3";
        toastr.options.timeOut = 1500;
    </script>
    <script>
        let baseUrl = (url) => {
            return `{{ url('/') }}${url}`;
        }

        $('#form-login').submit(function(e) {
            e.preventDefault();

            let data = new FormData(this);
            $.LoadingOverlay('show');
            $.httpRequest({
                url: baseUrl('/api/auth'),
                method: 'POST',
                data: data,
                response: (res) => {
                    $.LoadingOverlay('hide');
                    if (res.statusCode == 200) {
                        window.location.replace(baseUrl('/administrator/dashboard'));
                    } else {
                        toastr.error(res.message);
                    }
                }
            });
        });
    </script>

</body>

</html>
