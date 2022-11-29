@extends('layout.landing_page.master')

@section('banner')
<div class="hero page-inner overlay" style="background-image: url('/template/property/untree.co-property/images/hero_bg_1.jpg');">

	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-9 text-center mt-5">
				<h1 class="heading" data-aos="fade-up">Contact Us</h1>

				<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
					<ol class="breadcrumb text-center justify-content-center">
						<li class="breadcrumb-item "><a href="index.html">Home</a></li>
						<li class="breadcrumb-item active text-white-50" aria-current="page">Contact</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
@endsection

@section('content')
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
				<div class="contact-info">

					<div class="address mt-2">
						<i class="icon-room"></i>
						<h4 class="mb-2">Location:</h4>
						<p>43 Raymouth Rd. Baltemoer,<br> London 3910</p>
					</div>

					<div class="open-hours mt-4">
						<i class="icon-clock-o"></i>
						<h4 class="mb-2">Open Hours:</h4>
						<p>
							Sunday-Friday:<br>
							11:00 AM - 2300 PM
						</p>
					</div>

					<div class="email mt-4">
						<i class="icon-envelope"></i>
						<h4 class="mb-2">Email:</h4>
						<p>info@Untree.co</p>
					</div>

					<div class="phone mt-4">
						<i class="icon-phone"></i>
						<h4 class="mb-2">Call:</h4>
						<p>+1 1234 55488 55</p>
					</div>

				</div>
			</div>
			<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
				<form action="#">
					<div class="row">
						<div class="col-6 mb-3">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="col-6 mb-3">
							<input type="email" class="form-control" placeholder="Your Email">
						</div>
						<div class="col-12 mb-3">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="col-12 mb-3">
							<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
						</div>

						<div class="col-12">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> <!-- /.untree_co-section -->
@endsection

@section('contact')
<div class="row justify-content-center footer-cta" data-aos="fade-up">
	<div class="col-lg-7 mx-auto text-center">
		<h2 class="mb-4 ">Please contact us, if you need assistance</h2>
		<p><a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Contact us</a></p>
	</div> <!-- /.col-lg-7 -->
</div> <!-- /.row -->
@endsection

@section('team')
<div class="section section-5 bg-light">
	<div class="container">
		<div class="row justify-content-center  text-center mb-5">
			<div class="col-lg-6 mb-5">
				<h2 class="font-weight-bold heading text-primary mb-4">Our Team</h2>
				<p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit totam? Quod maiores.</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
				<div class="h-100 person">

					<img src="/template/property/untree.co-property/images/person_1-min.jpg" alt="Image"
					class="img-fluid">

					<div class="person-contents">
						<h2 class="mb-0"><a href="#">MAS DEDDY</a></h2>
						<span class="meta d-block mb-3">Founder</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

						<ul class="social list-unstyled list-inline dark-hover">
							<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
							<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
				<div class="h-100 person">

					<img src="/template/property/untree.co-property/images/person_2-min.jpg" alt="Image"
					class="img-fluid">

					<div class="person-contents">
						<h2 class="mb-0"><a href="#">MAS THONI</a></h2>
						<span class="meta d-block mb-3">Co-founder</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?</p>

						<ul class="social list-unstyled list-inline dark-hover">
							<li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
							<li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection