@extends('layout.landing_page.master')

@section('tittle')
	Detail Architecture | DSATELI3R
@endsection

@section('banner')
<div class="hero page-inner overlay" style="background-image: url('/template/property/untree.co-property/images/hero_bg_3.jpg');">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-9 text-center text-center mt-5">
				<h1 class="heading" data-aos="fade-up">Sarana_stell</h1>

				<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
					<ol class="breadcrumb text-center justify-content-center">
						<li class="breadcrumb-item "><a href="/">Home</a></li>
						<li class="breadcrumb-item active text-white-50" aria-current="page">Sarana_stell</li>
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
				<div class="vidio-discripsi">
					<div class="col">
						<h2 class="heading text-primary mb-3">Sarana_stell</h2>
						<div class="text">
							<p class="meta">California, United States. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione laborum quo quos omnis sed magnam id, ducimus saepe, debitis error earum, iste dicta odio est sint dolorem magni animi tenetur.</p>
						</div>
					</div>
				</div>
				<div class="card shadow-lg p-3 bg-body rounded mb-3">
                    <div class="video-container"> 
                       <iframe allowfullscreen="" class="YOUTUBE-iframe-video rounded-3" frameborder="0" height="300" src="https://www.youtube.com/embed/sMtWxBOL34M" width="100%"></iframe> 
                   </div>
                </div>

				<div class="card p-3 mb-2">

					<div class="col">
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Name</label>
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name..">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Comment</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>

						<div class="col d-flex justify-content-between">
							<div></div>
							<button type="button" class="btn btn-primary btn-sm">Send</button>
						</div>
					</div>
				</div>

				<div class="card border bg-transparent rounded-3" style="height: 400px; overflow: scroll;">

					<div class="card-body" >
						<div class="d-sm-flex mb-2">
							<div class="card border rounded-3 p-3">
								<div>
									<div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
										<div>
											<h5 class="m-0">Louis Ferguson</h5>
											<span class="me-3 small">June 18, 2021 at 11:55 am</span>
										</div>
									</div>
									<h6><span class="text-body fw-success">Comment</span> How does an Angular application work? Far advanced settling say finished raillery. Offered chiefly farther Satisfied conveying a dependent contented he gentleman agreeable do be.</h6>
									
								</div>
							</div>
						</div>

						<div class="d-sm-flex mb-2">
							<div class="card border rounded-3 p-3">
								<div>
									<div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
										<div>
											<h5 class="m-0">Louis Ferguson</h5>
											<span class="me-3 small">June 18, 2021 at 11:55 am</span>
										</div>
									</div>
									<h6><span class="text-body fw-success">Comment</span> How does an Angular application work? Far advanced settling say finished raillery. Offered chiefly farther Satisfied conveying a dependent contented he gentleman agreeable do be.</h6>
									
								</div>
							</div>
						</div>

						<div class="d-sm-flex">
							<div class="card border rounded-3 p-3">
								<div>
									<div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
										<div>
											<h5 class="m-0">Louis Ferguson</h5>
											<span class="me-3 small">June 18, 2021 at 11:55 am</span>
										</div>
									</div>
									<!-- Content -->
									<h6><span class="text-body fw-success">Comment</span> How does an Angular application work? Far advanced settling say finished raillery. Offered chiefly farther Satisfied conveying a dependent contented he gentleman agreeable do be.</h6>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>

            <div class="col-lg-4">
				<div class="card shadow-lg p-4 bg-body rounded mb-3">
					<h4 class="mb-4">Other projects</h4>
					<div class="col mb-3 d-flex justify-content-between">
						<img class="rounded me-3" style="height: 100px; width: 170px" src="/template/property/untree.co-property/images/img_1.jpg" alt="">
						<h6 class="mb-0"><a href="#">Fundamentals of Business Analysis</a></h6>
					</div>

					<div class="col mb-3 d-flex justify-content-between">
						<img class="rounded me-3" style="height: 100px; width: 170px" src="/template/property/untree.co-property/images/img_1.jpg" alt="">
						<h6 class="mb-0"><a href="#">Fundamentals of Business Analysis</a></h6>
					</div>

					<div class="col mb-3 d-flex justify-content-between">
						<img class="rounded me-3" style="height: 100px; width: 170px" src="/template/property/untree.co-property/images/img_1.jpg" alt="">
						<h6 class="mb-0"><a href="#">Fundamentals of Business Analysis</a></h6>
					</div>

					<div class="col mb-3 d-flex justify-content-between">
						<img class="rounded me-3" style="height: 100px; width: 170px" src="/template/property/untree.co-property/images/img_1.jpg" alt="">
						<h6 class="mb-0"><a href="#">Fundamentals of Business Analysis</a></h6>
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

				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_2.jpg" alt="Image" class="img-fluid">
					</a>

				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_3.jpg" alt="Image" class="img-fluid">
					</a>

				</div> <!-- .item -->
			</div>


			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_4.jpg" alt="Image" class="img-fluid">
					</a>

				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_5.jpg" alt="Image" class="img-fluid">
					</a>

				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_6.jpg" alt="Image" class="img-fluid">
					</a>

				</div> <!-- .item -->
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_7.jpg" alt="Image" class="img-fluid">
					</a>

				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_8.jpg" alt="Image" class="img-fluid">
					</a>

				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="property-single.html" class="img">
						<img src="/template/property/untree.co-property/images/img_1.jpg" alt="Image" class="img-fluid">
					</a>

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
