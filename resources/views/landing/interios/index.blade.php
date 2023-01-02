@extends('layout.landing_page.master')

@section('tittle')
	Interiors | DSATELI3R
@endsection

@section('banner')
<div class="hero page-inner overlay" style="background-image: url('/template/property/untree.co-property/images/hero_bg_3.jpg');">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-9 text-center mt-5">
				<h1 class="heading" data-aos="fade-up">Interiors</h1>

				<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
					<ol class="breadcrumb text-center justify-content-center">
						<li class="breadcrumb-item "><a href="/">Home</a></li>
						<li class="breadcrumb-item active text-white-50" aria-current="page">Interiors</li>
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

			<div class="col-lg-7 ">
				 <div class="video-container"> 
					<iframe allowfullscreen="" class="YOUTUBE-iframe-video rounded-3" frameborder="0" height="320" src="https://www.youtube.com/embed/sMtWxBOL34M" width="100%"></iframe> 
				</div>
				<br>
				<div class="vidio-discripsi">
					<div class="col">
						<h2 class="heading text-primary mb-3">Interiors</h2>
						<div class="text">
							<p class="meta">Arsitektur Interior dan Desain merupakan mata kuliah yang sangat dinamik! Dimana ia mencakup berbagai aspek seperti desain, pemikiran yang kreatif, menggambar, teknologi, 2D/3D, pembuatan maket, masalah lingkungan, kelangsungan hidup, komunikasi, penelitian, teori kebudayaan dan sebagainya. Anda juga akan mempelajari tentang bagaimana cara mempresentasikan hasil karya Anda, baik secara visual maupun tertulis, dan dikombinasikan dengan grafik, foto, dan bahkan film. Presentasi sangatlah penting, karena akan sangat sayang jika Anda memiliki hasil karya yang hebat tetapi Anda tidak bisa membuat orang lain mengerti hasil karya Anda!</p>
						</div>
					</div>
				</div>
			</div>
            <div class="col-lg-4">
                <div class="d-block agent-box p-3 text-center">
                    <div class="img mb-4">
                        <img src="/template/property/untree.co-property/images/person_2-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3 class="mb-0">Mas Deddy</h3>
                        <div class="meta mb-3">Founder</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione laborum quo quos omnis sed magnam id ducimus saepe</p>
                        <ul class="list-unstyled social dark-hover d-flex justify-content-center">
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

					<a href="detail_project" class="img">
						<img src="/template/property/untree.co-property/images/img_1.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						
						<div>
							<span class="city d-block mb-3">Judul Project</span>
							<span class="d-block mb-2 text-black-50">Descripsi project</span>

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

							<a href="detail_project" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="detail_project" class="img">
						<img src="/template/property/untree.co-property/images/img_2.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						
						<div>
							<span class="city d-block mb-3">Judul Project</span>
							<span class="d-block mb-2 text-black-50">Descripsi project</span>

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

							<a href="detail_project" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="detail_project" class="img">
						<img src="/template/property/untree.co-property/images/img_3.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						
						<div>
							<span class="city d-block mb-3">Judul Project</span>
							<span class="d-block mb-2 text-black-50">Descripsi project</span>

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

							<a href="detail_project" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>


			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="detail_project" class="img">
						<img src="/template/property/untree.co-property/images/img_4.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						
						<div>
							<span class="city d-block mb-3">Judul Project</span>
							<span class="d-block mb-2 text-black-50">Descripsi project</span>

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

							<a href="detail_project" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="detail_project" class="img">
						<img src="/template/property/untree.co-property/images/img_5.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						
						<div>
							<span class="city d-block mb-3">Judul Project</span>
							<span class="d-block mb-2 text-black-50">Descripsi project</span>

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

							<a href="detail_project" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="detail_project" class="img">
						<img src="/template/property/untree.co-property/images/img_6.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						
						<div>
							<span class="city d-block mb-3">Judul Project</span>
							<span class="d-block mb-2 text-black-50">Descripsi project</span>

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

							<a href="detail_project" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>


			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="detail_project" class="img">
						<img src="/template/property/untree.co-property/images/img_7.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						
						<div>
							<span class="city d-block mb-3">Judul Project</span>
							<span class="d-block mb-2 text-black-50">Descripsi project</span>

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

							<a href="detail_project" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="detail_project" class="img">
						<img src="/template/property/untree.co-property/images/img_8.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						
						<div>
							<span class="city d-block mb-3">Judul Project</span>
							<span class="d-block mb-2 text-black-50">Descripsi project</span>

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

							<a href="detail_project" class="btn btn-primary py-2 px-3">See details</a>
						</div>
					</div>
				</div> <!-- .item -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="property-item mb-30">

					<a href="detail_project" class="img">
						<img src="/template/property/untree.co-property/images/img_1.jpg" alt="Image" class="img-fluid">
					</a>

					<div class="property-content">
						
						<div>
							<span class="city d-block mb-3">Judul Project</span>
							<span class="d-block mb-2 text-black-50">Descripsi project</span>

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

							<a href="detail_project" class="btn btn-primary py-2 px-3">See details</a>
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
