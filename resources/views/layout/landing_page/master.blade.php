<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="{{url('assets/img/img-4-blt-rm.png')}}">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{url('/template/property/untree.co-property/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{url('/template/property/untree.co-property/fonts/flaticon/font/flaticon.css')}}">

	<link rel="stylesheet" href="{{url('/template/property/untree.co-property/css/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{url('/template/property/untree.co-property/css/aos.css')}}">
	<link rel="stylesheet" href="{{url('/template/property/untree.co-property/css/style.css')}}">

	

	@yield('css')

	<title> @yield('tittle')</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			@include('layout.landing_page.header')
		</div>
	</nav>

	@yield('banner')

	@yield('project')

	@yield('product')

	@yield('reviews')

	@yield('product_banner')

	@yield('contact')

	@yield('team')

	<div class="site-footer">
		<div class="container">
			@include('layout.landing_page.footer')
      	</div> <!-- /.container -->
    </div> <!-- /.site-footer -->


    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="{{url('/template/property/untree.co-property/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('/template/property/untree.co-property/js/tiny-slider.js')}}"></script>
    <script src="{{url('/template/property/untree.co-property/js/aos.js')}}"></script>
    <script src="{{url('/template/property/untree.co-property/js/navbar.js')}}"></script>
    <script src="{{url('/template/property/untree.co-property/js/counter.js')}}"></script>
    <script src="{{url('/template/property/untree.co-property/js/custom.js')}}"></script>

	{{-- translate --}}
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 

	@yield('script')
  </body>
  </html>
