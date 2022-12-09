<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
      <!--Main Navigation-->
  <header>
        <style>
        #intro {
            /* background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg); */
            height: 100vh;
            
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #intro {
            margin-top: -58.59px;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }
        </style>

        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(232, 230, 230, 0.8);">
                <div class="container">
                    <div class="row justify-content-center">
                        {{-- <div class="col-xl-5 col-md-8 text-center">
                            
                            <img src="/assets/img/img-1.jpeg" style="width:450px;height:150px;" class="card-img-top mb-3" alt="...">
                        </div> --}}

                        <div class="col-xl-5 col-md-8">
                            <form class="bg-white  rounded-5 shadow-5-strong p-5" action="{{route('postLogin')}}" method="post">
                                @csrf
                                <!-- Email input -->
                                <div class="text text-center p-4">
                                    <h2>Login</h2>
                                </div>

                                <div class="form-outline mb-4 p-2">
                                    <input type="email" id="form1Example1" name="email" class="form-control" />
                                    <label class="form-label" for="form1Example1">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4 p-2">
                                    <input type="password" id="form1Example2" name="password" class="form-control" />
                                    <label class="form-label" for="form1Example2">Password</label>
                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                        <label class="form-check-label" for="form1Example3">
                                            Remember me
                                        </label>
                                    </div>
                                </div>

                                    <div class="col text-center">
                                        <!-- Simple link -->
                                        <a href="#!">Forgot password?</a>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="container text-center">
                                    <button type="submit" class="btn btn-lg btn-primary">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Footer-->
  <footer class="bg-light text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
  </footer>
  <!--Footer-->
</body>
<!-- JavaScript Bundle with Popper -->
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>

</html>