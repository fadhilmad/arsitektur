@extends('layout.landing_page.master')

@section('tittle')
	Detail Interiors | DSATELI3R
@endsection

@section('banner')
<div class="hero page-inner overlay" style="background-image: url('/template/property/untree.co-property/images/hero_bg_3.jpg');">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-9 text-center mt-5">
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

				<input class="form-control form-control-sm mb-3" type="text" placeholder="Comment.." aria-label=".form-control-sm example">
			</div>

            <div class="col-lg-4">
				<div class="card shadow-lg p-3 bg-body rounded mb-3">

					<div class="img d-flex justify-content-center mb-4">
						<div></div>
						<a><img href="/" src="{{url('assets/img/img-5-blt.png')}}" class="rounded-2" style="widht:10px; height:35px" alt=""></a>
					</div>
					<form action="">
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Name</label>
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Coment</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
						</div>
						<div class="col d-flex justify-content-between">
							<div></div>
							<button type="button" class="btn btn-primary btn-sm">Send</button>
						</div>
					</form>
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
