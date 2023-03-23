@extends('layouts.app_landing')

@section('content')
	@include('landing.header')

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
					data-aos-delay="200">
					<h2>WE CREATE EVENT</h2>
					<h1>" EXTRADONARY "</h1>
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">


		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">
				<h3>WELCOME TO TUJUH KARYA SINERGI</h3>

				<div class="row content">
					<div class="col-lg-12 p-4
					">
						<h2>
							Lorem Ipsum for your design, website, and copywriting works. Use our tool to generate chunks of text that is free
							from repetition and copyright claims. 3D Images Increase Sales.
						</h2>
						<h1>" We create great events "</h1>
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services position-relative">
			<img src="{{ asset('img/floating/floating_1.png') }}" alt="Floating 1" class="position-absolute floating-1">
			<img src="{{ asset('img/floating/floating_2.png') }}" alt="Floating 2" class="position-absolute floating-2">
			<div class="container" data-aos="fade-up">
				<h3>WHAT WE DO</h3>
				<h2>We do it at its best</h2>
				<p class="p-title">We are the pioneer and leading company in managing and organizing an international music festival
					for years in
					Indonesia. We are an expert in executing world-class and memorable events. Collaborate with us, and we will exceed
					your expectation.</p>

				<div class="row">
					<div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon text-center"><img src="{{ asset('img/ticket.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>TICKETING PLATFORM AND REGISTRATION SYSTEM</h4>
							<p>We are the pioneer and leading company in managing and organizing an international music festival for years in
								Indonesia. We are an expert in executing world-class and memorable events. Collaborate with us, and we will
								exceed your expectation.</p>
						</div>
					</div>

					<div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box text-center">
							<div class="icon"><img src="{{ asset('img/star.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>ARTIST/TALENT BOOKING</h4>
							<p>Do you need live entertainment for your event? Many years of experience in this field, we have worked with many
								talents, from emerging new talents/artists to well-known talents/artists. We maintain our relationships well and
								with that, we can help you to create impressive events.</p>
						</div>
					</div>

					<div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box text-center">
							<div class="icon"><img src="{{ asset('img/partner.svg') }}" width="auto" alt="thumbnail"></div>
							<h4><a href="">SPONSORSHIP AND PARTNERSHIP</a></h4>
							<p>With our strong relationship and extensive experience working with various companies, we can help to provide
								you with marketing services for your events.</p>
						</div>
					</div>

					<div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in" data-aos-delay="400">
						<div class="icon-box text-center">
							<div class="icon"><img src="{{ asset('img/event.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>EVENTS</h4>
							<p>We began our journey in 2005 by creating one of the largest jazz festivals in the world. As years go by, we
								continue to grow and with our experience, we will provide you with professional insights and help to execute your
								event smoothly.</p>
						</div>
					</div>

				</div>

			</div>
		</section>
		<section class="services position-relative pt-0">

			<img src="{{ asset('img/floating/floating_3.png') }}" alt="Floating 1" class="position-absolute floating-3 d-none">
			<div class="container" data-aos="fade-up">

				<h3>OUR APPROACH</h3>
				<h2>Idea. Develop. Execute.</h2>

				<div class="row">
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="angka">52</div>
							<h5>EVENT LAUNCHED</h5>
						</div>
					</div>
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="angka">1,250</div>
							<h5>WORKING HOURS</h5>
						</div>
					</div>
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="angka">124</div>
							<h5>SATISFIED CLIENTS</h5>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="services position-relative pt-0">
			<div class="why-choose-me" data-aos="fade-up">
				<h3>WHY CHOOSE TUJUH KARYA SINERGI PRODUCTION?</h3>
				<h2>We listen. We discuss. <br />We advise.We Provide.</h2>

				<div class="row">
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon text-center"><img src="{{ asset('img/creative.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>We are creative
							</h4>
							<p>One of the keys to a successful event is a creative mind. Our team is full of passion, we crave for challenges
								that gives excitement, and ready to have a creative discussion with you to produce a splendid event.</p>
						</div>
					</div>
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon text-center"><img src="{{ asset('img/listener.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>We are a good listener</h4>
							<p>Our team is filled with people passionate about events. Share your thoughts and we will help to develop the
								concept, design, and execute your event from beginning to end.</p>
						</div>
					</div>
					<div class="col-xl-4 col-sm-12 d-flex mt-4 mb-4 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon text-center"><img src="{{ asset('img/time.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>We deliver on time</h4>
							<p>Time is the most essential part of crafting an event. We are ready to meet your deadlines in executing an event
								that is astounding.</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End Services Section -->


		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio services">
			<div class="" data-aos="fade-up">

				<h3>RECENT CASE STUDIES</h3>
				<h2>What we have done so far.</h2>

				<div class="wrapper-portfolio">

					<div class="row custom-portfolio" data-aos="fade-up" data-aos-delay="200">

						<div class="col-lg-2 col-sm-12 offset-lg-1 p-0">
							<div class="row">
								<div class="col-12 ">
									<a href="{{ asset('img/portfolio/images_1.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_1.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="row">
								<div class="col-lg-4 col-sm-12 p-0">
									<div class="row">

										<div class="col-lg-12 col-sm-12 short-div">
											<a href="{{ asset('img/portfolio/images_2.png') }}" data-gallery="portfolioGallery"
												class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_2.png') }}"
													class="img-fluid" alt="">
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
								<div class="col-lg-8 col-sm-12 p-0">
									<a href="{{ asset('img/portfolio/images_4.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_4.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-sm-12 p-0">
							<div class="row">
								<div class="col-sm-12">

									<a href="{{ asset('img/portfolio/images_5.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img short-div"><img
											src="{{ asset('img/portfolio/images_5.png') }}" class="img-fluid" alt="">
									</a>
									<a href="{{ asset('img/portfolio/images_6.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img short-div"><img
											src="{{ asset('img/portfolio/images_6.png') }}" class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row custom-portfolio" data-aos="fade-up" data-aos-delay="200">

						<div class="col-lg-2 col-sm-12 p-0 offset-lg-1 ">
							<div class="row">
								<div class="col-sm-12">
									<a href="{{ asset('img/portfolio/images_7.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img short-div"><img
											src="{{ asset('img/portfolio/images_7.png') }}" class="img-fluid" alt="">
									</a>
									<a href="{{ asset('img/portfolio/images_8.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img short-div"><img
											src="{{ asset('img/portfolio/images_8.png') }}" class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="row">
								<div class="col-lg-8 col-sm-12 p-0">
									<a href="{{ asset('img/portfolio/images_9.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_9.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-lg-4 col-sm-12 p-0">
									<div class="row">

										<div class="col-lg-12 col-sm-12 short-div">
											<a href="{{ asset('img/portfolio/images_10.png') }}" data-gallery="portfolioGallery"
												class="portfolio-lightbox preview-link portfolio-img"><img
													src="{{ asset('img/portfolio/images_10.png') }}" class="img-fluid" alt="">
											</a>
										</div>
										<div class="col-lg-12 col-sm-12 short-div">
											<a href="{{ asset('img/portfolio/images_11.png') }}" data-gallery="portfolioGallery"
												class="portfolio-lightbox preview-link portfolio-img"><img
													src="{{ asset('img/portfolio/images_11.png') }}" class="img-fluid" alt="">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-sm-12 p-0">
							<div class="row">
								<div class="col-12 ">
									<a href="{{ asset('img/portfolio/images_12.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_12.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Portfolio Section -->


		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients section-bg services">
			<div class="container" data-aos="fade-up">
				<h3 class="mb-4">CLIENTS AND PARTNERS</h3>

				<div class="row" data-aos="zoom-in">

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center offset-lg-2">
						<img src="{{ asset('img/client/client-1.svg') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/client-2.svg') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/client-3.svg') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/client-4.svg') }}" class="img-fluid" alt="Client">
					</div>

				</div>

			</div>
		</section><!-- End Cliens Section -->

		<section id="client-services" class="client-services services">

			<div class="container" data-aos="fade-up">
				<h3>DON'T TAKE OUR FOR IT!</h3>
				<h2>Hear What Our Clients and Partners Say.</h2>
				<div class="bungkus-swiper">

					<swiper-container class="mySwiper" space-between="30" slides-per-view="auto" pagination="true"
						pagination-clickable="true" navigation="true">
						<swiper-slide>
							<div class="row">
								<div class="col-sm-12 d-flex bungkus-notes">
									<div>
										<img src="{{ asset('img/notes/notes_1.png') }}" alt="notes" width="90px" height="90px">
									</div>
									<div class="kanan">
										<div class="title-name text-start">John Fang</div>
										<div class="title-type text-start">Music</div>
										<div class="title-description text-start">
											Suspendisse ultrices at diam lectus nullam.
											Nisl, sagittis viverra enim erat tortor ultricies massa turpis. Arcu pulvinar aenean nam laoreet nulla.
										</div>
									</div>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="row">
								<div class="col-sm-12 d-flex bungkus-notes">
									<div>
										<img src="{{ asset('img/notes/notes_1.png') }}" alt="notes" width="90px" height="90px">
									</div>
									<div class="kanan">
										<div class="title-name text-start">John Fang</div>
										<div class="title-type text-start">Music</div>
										<div class="title-description text-start">
											Suspendisse ultrices at diam lectus nullam.
											Nisl, sagittis viverra enim erat tortor ultricies massa turpis. Arcu pulvinar aenean nam laoreet nulla.
										</div>
									</div>
								</div>
							</div>
						</swiper-slide>
						<swiper-slide>
							<div class="row">
								<div class="col-sm-12 d-flex bungkus-notes">
									<div>
										<img src="{{ asset('img/notes/notes_1.png') }}" alt="notes" width="90px" height="90px">
									</div>
									<div class="kanan">
										<div class="title-name text-start">John Fang</div>
										<div class="title-type text-start">Music</div>
										<div class="title-description text-start">
											Suspendisse ultrices at diam lectus nullam.
											Nisl, sagittis viverra enim erat tortor ultricies massa turpis. Arcu pulvinar aenean nam laoreet nulla.
										</div>
									</div>
								</div>
							</div>
						</swiper-slide>
					</swiper-container>
				</div>

			</div>
		</section>


		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact p-0">
			<div data-aos="fade-up">
				<div class="row">
					<div class="col-lg-7 mt-5 mt-lg-0 align-items-stretch kiri p-4">
						<div class="wrapper-text info">

							<h3>SAY HELLO!</h3>

							<h2>We would like to hear from you.</h2>

							<div class="row">
								<div class="col-lg-4">

									<div class="phone d-flex">
										<img src="{{ asset('img/contact/phone.svg') }}" alt="Phone">
										<p>+1 5589 55488 55s</p>
									</div>
								</div>
								<div class="col-lg-8">

									<div class="address d-flex">
										<img src="{{ asset('img/contact/address.svg') }}" alt="Address">
										<p>A108 Adam Street, New York, NY 535022</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">

									<div class="email d-flex align-self-baseline">
										<img src="{{ asset('img/contact/email.svg') }}" alt="Email">
										<p>info@example.com</p>
									</div>
								</div>
							</div>


							<form id="formContact" class="php-email-form">
								@csrf
								<div class="form-group">
									<input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="message" rows="10" placeholder="Message" required></textarea>
								</div>
								<div class="text-end"><button type="submit">Sumbit</button></div>
							</form>

							<div class="d-flex wrapper-sosmed">

								<div class="address">
									<a href="{{ config('config_page.sosmed_facebook') }}" class="me-3">

										<i class="bi bi-facebook"></i>
									</a>
								</div>

								<div class="email">
									<a href="{{ config('config_page.sosmed_twitter') }}" class="me-3">
										<i class="bi bi-twitter"></i>
									</a>
								</div>

								<div class="phone">
									<a href="{{ config('config_page.sosmed_instagram') }}" class="me-3">
										<i class="bi bi-instagram"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 d-flex align-items-stretch p-0">
						<div class="info">

							<iframe
								src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
								frameborder="0" allowfullscreen></iframe>
						</div>

					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
		integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	@include('landing.footer')

	<script>
		$('#formContact').on('submit', function(e) {
			e.preventDefault();
			var formData = $(this).serialize();
			$.ajax({
				url: "{{ route('contact.store') }}",
				method: 'POST',
				data: formData,
				global: false,
				async: false,
				dataType: 'json',
				beforeSend: function() {

				},
				success: function(response) {
					const meta = response.meta;
					Swal.fire(
						'Success',
						meta.message,
						'success'
					).then((result) => {
						if (result.isConfirmed) {}
					});
				},
				error: function(error) {

					const data = JSON.parse(error.responseText);

					Swal.fire(
						'Fail',
						error.responseJSON.message,
						'error'
					);
				},
			});
		});
	</script>
@endsection
