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
		<!-- ======= Services Section ======= -->
		<section id="event" class="event page-event">
			<div class="slider">

				<swiper-container class="mySwiper" space-between="30" slides-per-view="auto" pagination="true"
					pagination-clickable="true" navigation="true" loop="true" slides-per-view="2" initial-slide="2">
					<swiper-slide>
						<img src="{{ asset('img/event/slider-1.png') }}" alt="notes">
					</swiper-slide>
					<swiper-slide class="swiper-slide-active">
						<img src="{{ asset('img/event/slider-2.png') }}" alt="notes">
					</swiper-slide>
					<swiper-slide>
						<img src="{{ asset('img/event/slider-3.png') }}" alt="notes">
					</swiper-slide>
				</swiper-container>
			</div>
			<div class="container" data-aos="fade-up">
				<h3 class="text-center">Event</h3>
				<h2 class="text-center">Active</h2>

				<div class="row event-list past pt-4">
					@for ($i = 0; $i <= 8; $i++)
						<div class="col-xl-3 col-md-6 col-sm-12 align-items-stretch mt-4 mt-md-0 mb-4">
							<div>
								<img src="{{ asset('img/event/gambar-1.png') }}" alt="">
							</div>
							<div class="wrapper-event">
								<div class="row wrapper-event-row">
									<div class="col-6 location"><i class="fa fa-calendar-alt me-2"></i> 5 Des 2020</div>
									<div class="col-6 text-end location"><i class="fa fa-location-dot me-2"></i> Jakarta</div>
								</div>
								<div class="row">
									<h4>Lipsum generator: Lorem Ipsum - All the facts</h4>
								</div>
							</div>
							<div class="buy-now">
								Buy Now
							</div>
						</div>
					@endfor
				</div>
			</div>
			<div class="container" data-aos="fade-up">
				<h3 class="text-center">Event</h3>
				<h2 class="text-center">Past</h2>
				<div class="row event-list pt-4">
					@for ($i = 0; $i <= 8; $i++)
						<div class="col-xl-3 col-md-6 col-sm-12 align-items-stretch mt-4 mt-md-0 mb-4">
							<div>
								<img src="{{ asset('img/event/gambar-1.png') }}" alt="">
							</div>
							<div class="wrapper-event">
								<div class="row wrapper-event-row">
									<div class="col-6 location"><i class="fa fa-calendar-alt me-2"></i> 5 Des 2020</div>
									<div class="col-6 text-end location"><i class="fa fa-location-dot me-2"></i> Jakarta</div>
								</div>
								<div class="row">
									<h4>Lipsum generator: Lorem Ipsum - All the facts</h4>
								</div>
							</div>
							<div class="buy-now">
								Buy Now
							</div>
						</div>
					@endfor
				</div>
			</div>
		</section>

		@include('landing.contact')

	</main><!-- End #main -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
		integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	@include('landing.footer')
@endsection
