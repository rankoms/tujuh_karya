@extends('layouts.app_landing')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
	integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
	#header {

		background: radial-gradient(79.63% 79.63% at 70.87% 20.37%, #1A0653 0%, #3C0046 100%)
			/* warning: gradient uses a rotation that is not supported by CSS and may not behave as expected */
		;
	}
</style>
@section('content')
	@include('landing.header_new_page')

	<main id="main">

		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio page-portfolio services container">
			<div class="" data-aos="fade-up">

				<h3>Galery</h3>
				<h2>What we have done so far.</h2>

				<div class="wrapper-portfolio">

					<div class="row custom-portfolio gx-3 mb-3" data-aos="fade-up">

						<div class="col-lg-3 col-sm-12 ">
							<div class="row">
								<div class="col-12 ">
									<a href="{{ asset('img/portfolio/images_1.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_1.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-12">
							<div class="row">
								<div class="col-lg-12 col-sm-12">
									<div class="row">

										<div class="col-lg-12 col-sm-12 short-div">
											<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
												class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
													class="img-fluid img-atas" alt="">
											</a>
										</div>
										<div class="col-lg-12 col-sm-12 short-div">

											<a href="{{ asset('img/portfolio/images_3.png') }}" data-gallery="portfolioGallery"
												class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_3.png') }}"
													class="img-fluid" alt="">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="row">
								<div class="col-sm-12">
									<a href="{{ asset('img/portfolio/images_5.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img "><img src="{{ asset('img/portfolio/images_5.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row custom-portfolio gx-3 gy-1" data-aos="fade-up" data-aos-delay="200">
						<div class="col-lg-3 col-sm-12 short-div">
							<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
									class="img-fluid img-atas" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-sm-12 short-div">
							<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
									class="img-fluid img-atas" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-sm-12 short-div">
							<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
									class="img-fluid img-atas" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-sm-12 short-div">
							<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
									class="img-fluid img-atas" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-sm-12 short-div">
							<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
									class="img-fluid img-atas" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-sm-12 short-div">
							<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
									class="img-fluid img-atas" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-sm-12 short-div">
							<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
									class="img-fluid img-atas" alt="">
							</a>
						</div>
						<div class="col-lg-3 col-sm-12 short-div">
							<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
									class="img-fluid img-atas" alt="">
							</a>
						</div>
					</div>
					<div class="row custom-portfolio gx-3" data-aos="fade-up" data-aos-delay="200">

						<div class="col-lg-3 col-sm-12 ">
							<div class="row">
								<div class="col-12 ">
									<a href="{{ asset('img/portfolio/images_1.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_1.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-12">
							<div class="row">
								<div class="col-lg-12 col-sm-12">
									<div class="row">

										<div class="col-lg-12 col-sm-12 short-div">
											<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
												class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
													class="img-fluid img-atas" alt="">
											</a>
										</div>
										<div class="col-lg-12 col-sm-12 short-div">

											<a href="{{ asset('img/portfolio/images_3.png') }}" data-gallery="portfolioGallery"
												class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_3.png') }}"
													class="img-fluid" alt="">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="row">
								<div class="col-sm-12">
									<a href="{{ asset('img/portfolio/images_5.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img "><img src="{{ asset('img/portfolio/images_5.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Portfolio Section -->

		@include('landing.contact')

	</main><!-- End #main -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
		integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	@include('landing.footer')
@endsection
