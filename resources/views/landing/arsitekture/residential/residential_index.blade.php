@extends('layout.landing_page.master')

@section('banner')
<div class="hero page-inner overlay" style="background-image: url('/template/property/untree.co-property/images/hero_bg_3.jpg');">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-9 text-center mt-5">
				<h1 class="heading" data-aos="fade-up">RESIDENTIAL</h1>

				<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
					<ol class="breadcrumb text-center justify-content-center">
						<li class="breadcrumb-item "><a href="/home">Home</a></li>
						<li class="breadcrumb-item active text-white-50" aria-current="page">RESIDENTIAL</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
@endsection

@section('project')
<div class="section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="img-property-slide-wrap">
                    <div class="img-property-slide">
                        <img src="/template/property/untree.co-property/images/img_1.jpg" alt="Image" class="img-fluid">
                        <img src="/template/property/untree.co-property/images/img_2.jpg" alt="Image" class="img-fluid">
                        <img src="/template/property/untree.co-property/images/img_3.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="heading text-primary">5232 California Ave. 21BC</h2>
                <p class="meta">California, United States</p>
                <p class="text-black-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione laborum quo quos omnis sed magnam id, ducimus saepe, debitis error earum, iste dicta odio est sint dolorem magni animi tenetur.</p>
                <p class="text-black-50">Perferendis eligendi reprehenderit, assumenda molestias nisi eius iste reiciendis porro tenetur in, repudiandae amet libero. Doloremque, reprehenderit cupiditate error laudantium qui, esse quam debitis, eum cumque perferendis, illum harum expedita.</p>
                
                <div class="d-block agent-box p-5">
                    <div class="img mb-4">
                        <img src="/template/property/untree.co-property/images/person_2-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3 class="mb-0">Alicia Huston</h3>
                        <div class="meta mb-3">Real Estate</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione laborum quo quos omnis sed magnam id ducimus saepe</p>
                        <ul class="list-unstyled social dark-hover d-flex">
                            <li class="me-1"><a href="#"><span class="icon-instagram"></span></a></li>
                            <li class="me-1"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="me-1"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="me-1"><a href="#"><span class="icon-linkedin"></span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-properties">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_1.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						<div class="price mb-2"><span>$1,291,000</span></div>
						<div>
							<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
							<span class="city d-block mb-3">California, USA</span>

							<div class="specs d-flex mb-4">
								<span class="d-block d-flex align-items-center me-3">
									<span class="icon-bed me-2"></span>
									<span class="caption">2 beds</span>
								</span>
								<span class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">2 baths</span>
								</span>
							</div>

							<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_2.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						<div class="price mb-2"><span>$1,291,000</span></div>
						<div>
							<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
							<span class="city d-block mb-3">California, USA</span>

							<div class="specs d-flex mb-4">
								<span class="d-block d-flex align-items-center me-3">
									<span class="icon-bed me-2"></span>
									<span class="caption">2 beds</span>
								</span>
								<span class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">2 baths</span>
								</span>
							</div>

							<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_3.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						<div class="price mb-2"><span>$1,291,000</span></div>
						<div>
							<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
							<span class="city d-block mb-3">California, USA</span>

							<div class="specs d-flex mb-4">
								<span class="d-block d-flex align-items-center me-3">
									<span class="icon-bed me-2"></span>
									<span class="caption">2 beds</span>
								</span>
								<span class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">2 baths</span>
								</span>
							</div>

							<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>


			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_4.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						<div class="price mb-2"><span>$1,291,000</span></div>
						<div>
							<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
							<span class="city d-block mb-3">California, USA</span>

							<div class="specs d-flex mb-4">
								<span class="d-block d-flex align-items-center me-3">
									<span class="icon-bed me-2"></span>
									<span class="caption">2 beds</span>
								</span>
								<span class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">2 baths</span>
								</span>
							</div>

							<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_5.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						<div class="price mb-2"><span>$1,291,000</span></div>
						<div>
							<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
							<span class="city d-block mb-3">California, USA</span>

							<div class="specs d-flex mb-4">
								<span class="d-block d-flex align-items-center me-3">
									<span class="icon-bed me-2"></span>
									<span class="caption">2 beds</span>
								</span>
								<span class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">2 baths</span>
								</span>
							</div>

							<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_6.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						<div class="price mb-2"><span>$1,291,000</span></div>
						<div>
							<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
							<span class="city d-block mb-3">California, USA</span>

							<div class="specs d-flex mb-4">
								<span class="d-block d-flex align-items-center me-3">
									<span class="icon-bed me-2"></span>
									<span class="caption">2 beds</span>
								</span>
								<span class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">2 baths</span>
								</span>
							</div>

							<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>


			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_7.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						<div class="price mb-2"><span>$1,291,000</span></div>
						<div>
							<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
							<span class="city d-block mb-3">California, USA</span>

							<div class="specs d-flex mb-4">
								<span class="d-block d-flex align-items-center me-3">
									<span class="icon-bed me-2"></span>
									<span class="caption">2 beds</span>
								</span>
								<span class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">2 baths</span>
								</span>
							</div>

							<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_8.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						<div class="price mb-2"><span>$1,291,000</span></div>
						<div>
							<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
							<span class="city d-block mb-3">California, USA</span>

							<div class="specs d-flex mb-4">
								<span class="d-block d-flex align-items-center me-3">
									<span class="icon-bed me-2"></span>
									<span class="caption">2 beds</span>
								</span>
								<span class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">2 baths</span>
								</span>
							</div>

							<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_1.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						<div class="price mb-2"><span>$1,291,000</span></div>
						<div>
							<span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
							<span class="city d-block mb-3">California, USA</span>

							<div class="specs d-flex mb-4">
								<span class="d-block d-flex align-items-center me-3">
									<span class="icon-bed me-2"></span>
									<span class="caption">2 beds</span>
								</span>
								<span class="d-block d-flex align-items-center">
									<span class="icon-bath me-2"></span>
									<span class="caption">2 baths</span>
								</span>
							</div>

							<a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
		</div>
		<div class="row align-items-center py-5">
			<div class="col-lg-3">
				Pagination (1 of 10)
			</div>
			<div class="col-lg-6 text-center">
				<div class="custom-pagination">
					<a href="#">1</a>
					<a href="#" class="active">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
				</div>
			</div>
		</div>
	</div>
</div>

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