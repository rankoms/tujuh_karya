@extends('layouts.app_landing')

@section('content')
	@include('landing.header')

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up"
					data-aos-delay="200">
					<h2>{{ \config('config_page.wording_hero_h2') }}</h2>
					<h1>{{ \config('config_page.wording_hero_h1') }}</h1>
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">


		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">
				<h3>{{ config('config_page.wording_about_h3') }}</h3>

				<div class="row content">
					<div class="col-lg-12 p-4
					">
						<h4 style="text-align:justify;">Didirikan pada tahun 2022, PT. Tujuh Karya Sinergi bergerak di bidang promotor,
							event organizer, dan periklanan yang memiliki tujuan memasarkan dunia hiburan di Indonesia. Pada tahun 2019,
							sebelum perusahaan diresmikan oleh Badan Hukum, kami sudah mengadakan festival untuk pertama kali nya yang dikenal
							sebagai Pesta Semalam Minggu Vol.1, yang dimana akar dari munculnya festival lanjutan seperti Pesta Semalam Minggu
							Vol.2, Pesta Semalam Minggu “Pesta Lagi 2022, Pesta Semalam Minggu Vol.3 hingga Pesta Semalam Minggu “Pesta Lagi”
							2023.</h4></br>
						<h4 style="text-align:justify;">Tujuh Karya Sinergi kini telah konsisten menjalankan 6 event terhitung sejak Maret
							2023, dan akan terus menyelenggarakan Festival Musik dengan terus meningkatan kualitas untuk menghibur masyarakat
							luas.</h4></br>
						<h4 style="text-align:justify;">Pada intinya Tujuh Karya Sinergi bertujuan untuk mempromosikan Dunia Hiburan
							terutama Festival Musik, kami terus berupaya mempresentasikan hiburan yang berkualitas dan tersusun dengan baik,
							sekaligus memantapkan diri sebagai perusahaan yang diakui oleh masyarakat untuk menyelenggarakan acara secara
							nasional maupun internasional.</h4></br>
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->

		<!-- ======= Services Section ======= -->
		<section id="services" class="services position-relative">
			<img src="{{ asset('img/floating/floating_1.png') }}" alt="Floating 1" class="position-absolute floating-1">
			<img src="{{ asset('img/floating/floating_2.png') }}" alt="Floating 2" class="position-absolute floating-2">
			<div class="container" data-aos="fade-up">
				<h2>KAMI MELAKUKANNYA</br>DENGAN SEBAIK-BAIKNYA</h2>
				<p class="p-title">Kami berusaha untuk menjadi perusahaan ternama dalam mengelola dan menyelenggarakan festival musik
					dalam taraf nasional hingga internasional. Kami ahli dalam melaksanakan acara yang berkesan. </p>

				<div class="row">

					<div class="col-xl-12 col-md-12 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in"
						data-aos-delay="200">
						<div class="icon-box text-center">
							<div class="icon"><img src="{{ asset('img/star.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>PEMESANAN ARTIS/TALENTA</h4>
							<p>Jika anda membutuhkan hiburan langsung untuk acara anda, kami siap membantu dengan pengalaman bertahun-tahun
								dalam bidang ini, kami telah bekerja sama dengan artis ternama. Kami menjaga relasi dengan baik, dengan </p>
						</div>
					</div>

					<div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box text-center">
							<div class="icon"><img src="{{ asset('img/partner.svg') }}" width="auto" alt="thumbnail"></div>
							<h4><a href="">SPONSOR DAN KEMITRAAN</a></h4>
							<p>Kami dapat membantu menyediakan kebutuhan pemasaran untuk acara anda melalui hubungan yang kuat dengan berbagai
								perusahaan. </p>
						</div>
					</div>

					<div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-4" data-aos="zoom-in" data-aos-delay="400">
						<div class="icon-box text-center">
							<div class="icon"><img src="{{ asset('img/event.svg') }}" width="auto" alt="thumbnail"></div>
							<h4>ACARA</h4>
							<p>Kami memulai perjalanan kami di tahun 2019 dengan membuat salah satu festival musik di Kota Bekasi. Seiring
								berjalannya waktu, kami terus berkembang dan dengan pengalaman kami, kami akan memberikan pengetahuan secara
								profesional yang akan membantu Anda untuk melaksanakan sebuah acara. </p>
						</div>
					</div>

				</div>

			</div>
		</section>


		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio services">
			<div class="" data-aos="fade-up">

				<h3>GALLERY</h3>
				<h2></h2>

				<div class="wrapper-portfolio">

					<div class="row custom-portfolio" data-aos="fade-up" data-aos-delay="200">

						<div class="col-lg-2 col-sm-2 offset-lg-1 p-0">
							<div class="row">
								<div class="col-12 ">
									<a href="{{ asset('img/portfolio/images_1.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_1.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="row">
								<div class="col-lg-4 col-sm-4 p-0">
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
								<div class="col-lg-8 col-sm-8 p-0">
									<a href="{{ asset('img/portfolio/images_4.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_4.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-sm-2 p-0">
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

						<div class="col-lg-2 col-sm-2 p-0 offset-lg-1 ">
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
						<div class="col-lg-6 col-sm-6">
							<div class="row">
								<div class="col-lg-8 col-sm-8 p-0">
									<a href="{{ asset('img/portfolio/images_9.png') }}" data-gallery="portfolioGallery"
										class="portfolio-lightbox preview-link portfolio-img"><img src="{{ asset('img/portfolio/images_9.png') }}"
											class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-lg-4 col-sm-4 p-0">
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
						<div class="col-lg-2 col-sm-2 p-0">
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

				<a href="{{ route('galery') }}" class="text-center see-more">See More</a>
			</div>
		</section><!-- End Portfolio Section -->


		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients section-bg services">
			<div class="container" data-aos="fade-up">
				<h3 class="mb-4">CLIENTS AND PARTNERS</h3>

				<div class="row" data-aos="zoom-in">

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/1.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/2.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/3.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/4.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/5.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/6.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/7.png') }}" class="img-fluid" alt="Client">
					</div>

					<div class="col-lg-2 col-md-6 col-6 d-flex align-items-center justify-content-center">
						<img src="{{ asset('img/client/8.png') }}" class="img-fluid" alt="Client">
					</div>

				</div>
			</div>
		</section><!-- End Cliens Section -->

		<section id="client-services" class="client-services services">

			<div class="container" data-aos="fade-up">
				<h3>TESTIMONIAL</h3>
				<h2></h2>
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

		@include('landing.contact')

	</main><!-- End #main -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
		integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
	@include('landing.footer')
@endsection
