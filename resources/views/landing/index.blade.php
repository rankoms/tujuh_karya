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
		<section id="services" class="services section-bg">
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

		<!-- ======= Cta Section ======= -->
		<section id="cta" class="cta">
			<div class="container" data-aos="zoom-in">

				<div class="row">
					<div class="col-lg-9 text-center text-lg-start">
						<h3>Call To Action</h3>
						<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="col-lg-3 cta-btn-container text-center">
						<a class="cta-btn align-middle" href="#">Call To Action</a>
					</div>
				</div>

			</div>
		</section><!-- End Cta Section -->

		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Portfolio</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
						consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in
						iste officiis commodi quidem hic quas.</p>
				</div>

				<ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
					<li data-filter="*" class="filter-active">All</li>
					<li data-filter=".filter-app">App</li>
					<li data-filter=".filter-card">Card</li>
					<li data-filter=".filter-web">Web</li>
				</ul>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-img"><img src="{{ asset('landing/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>App 1</h4>
							<p>App</p>
							<a href="{{ asset('landing/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-img"><img src="{{ asset('landing/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Web 3</h4>
							<p>Web</p>
							<a href="{{ asset('landing/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-img"><img src="{{ asset('landing/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>App 2</h4>
							<p>App</p>
							<a href="{{ asset('landing/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="{{ asset('landing/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Card 2</h4>
							<p>Card</p>
							<a href="{{ asset('landing/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-img"><img src="{{ asset('landing/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Web 2</h4>
							<p>Web</p>
							<a href="{{ asset('landing/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<div class="portfolio-img"><img src="{{ asset('landing/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>App 3</h4>
							<p>App</p>
							<a href="{{ asset('landing/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="{{ asset('landing/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Card 1</h4>
							<p>Card</p>
							<a href="{{ asset('landing/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<div class="portfolio-img"><img src="{{ asset('landing/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Card 3</h4>
							<p>Card</p>
							<a href="{{ asset('landing/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-img"><img src="{{ asset('landing/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
								alt="">
						</div>
						<div class="portfolio-info">
							<h4>Web 3</h4>
							<p>Web</p>
							<a href="{{ asset('landing/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery"
								class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Portfolio Section -->

		<!-- ======= Team Section ======= -->
		<section id="team" class="team section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Team</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
						consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in
						iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">

					<div class="col-lg-6">
						<div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
							<div class="pic"><img src="{{ asset('landing/img/team/team-1.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>Walter White</h4>
								<span>Chief Executive Officer</span>
								<p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4 mt-lg-0">
						<div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
							<div class="pic"><img src="{{ asset('landing/img/team/team-2.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>Sarah Jhonson</h4>
								<span>Product Manager</span>
								<p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4">
						<div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
							<div class="pic"><img src="{{ asset('landing/img/team/team-3.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>William Anderson</h4>
								<span>CTO</span>
								<p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4">
						<div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
							<div class="pic"><img src="{{ asset('landing/img/team/team-4.jpg') }}" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>Amanda Jepson</h4>
								<span>Accountant</span>
								<p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
								<div class="social">
									<a href=""><i class="ri-twitter-fill"></i></a>
									<a href=""><i class="ri-facebook-fill"></i></a>
									<a href=""><i class="ri-instagram-fill"></i></a>
									<a href=""> <i class="ri-linkedin-box-fill"></i> </a>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Team Section -->

		<!-- ======= Pricing Section ======= -->
		<section id="pricing" class="pricing">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Pricing</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
						consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in
						iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">

					<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
						<div class="box">
							<h3>Free Plan</h3>
							<h4><sup>$</sup>0<span>per month</span></h4>
							<ul>
								<li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
								<li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
								<li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
								<li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
								<li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
							</ul>
							<a href="#" class="buy-btn">Get Started</a>
						</div>
					</div>

					<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
						<div class="box featured">
							<h3>Business Plan</h3>
							<h4><sup>$</sup>29<span>per month</span></h4>
							<ul>
								<li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
								<li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
								<li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
								<li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
								<li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
							</ul>
							<a href="#" class="buy-btn">Get Started</a>
						</div>
					</div>

					<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
						<div class="box">
							<h3>Developer Plan</h3>
							<h4><sup>$</sup>49<span>per month</span></h4>
							<ul>
								<li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
								<li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
								<li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
								<li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
								<li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
							</ul>
							<a href="#" class="buy-btn">Get Started</a>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Pricing Section -->

		<!-- ======= Frequently Asked Questions Section ======= -->
		<section id="faq" class="faq section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Frequently Asked Questions</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
						consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in
						iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="faq-list">
					<ul>
						<li data-aos="fade-up" data-aos-delay="100">
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
								data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i
									class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
							<div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
								<p>
									Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida.
									Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
								</p>
							</div>
						</li>

						<li data-aos="fade-up" data-aos-delay="200">
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
								class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i
									class="bx bx-chevron-up icon-close"></i></a>
							<div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
								<p>
									Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec
									ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
									dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
								</p>
							</div>
						</li>

						<li data-aos="fade-up" data-aos-delay="300">
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3"
								class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i
									class="bx bx-chevron-up icon-close"></i></a>
							<div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
								<p>
									Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer
									enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
									convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
								</p>
							</div>
						</li>

						<li data-aos="fade-up" data-aos-delay="400">
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4"
								class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i
									class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
							<div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
								<p>
									Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel
									risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis
									blandit turpis cursus in.
								</p>
							</div>
						</li>

						<li data-aos="fade-up" data-aos-delay="500">
							<i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5"
								class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
									class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
							<div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
								<p>
									Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel.
									Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus
									vulputate eu scelerisque.
								</p>
							</div>
						</li>

					</ul>
				</div>

			</div>
		</section><!-- End Frequently Asked Questions Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
						consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in
						iste officiis commodi quidem hic quas.</p>
				</div>

				<div class="row">

					<div class="col-lg-5 d-flex align-items-stretch">
						<div class="info">
							<div class="address">
								<i class="bi bi-geo-alt"></i>
								<h4>Location:</h4>
								<p>A108 Adam Street, New York, NY 535022</p>
							</div>

							<div class="email">
								<i class="bi bi-envelope"></i>
								<h4>Email:</h4>
								<p>info@example.com</p>
							</div>

							<div class="phone">
								<i class="bi bi-phone"></i>
								<h4>Call:</h4>
								<p>+1 5589 55488 55s</p>
							</div>

							<iframe
								src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
								frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
						</div>

					</div>

					<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
						<form action="forms/contact.php" method="post" role="form" class="php-email-form">
							<div class="row">
								<div class="form-group col-md-6">
									<label for="name">Your Name</label>
									<input type="text" name="name" class="form-control" id="name" required>
								</div>
								<div class="form-group col-md-6">
									<label for="name">Your Email</label>
									<input type="email" class="form-control" name="email" id="email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Subject</label>
								<input type="text" class="form-control" name="subject" id="subject" required>
							</div>
							<div class="form-group">
								<label for="name">Message</label>
								<textarea class="form-control" name="message" rows="10" required></textarea>
							</div>
							<div class="my-3">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">Your message has been sent. Thank you!</div>
							</div>
							<div class="text-center"><button type="submit">Send Message</button></div>
						</form>
					</div>

				</div>

			</div>
		</section><!-- End Contact Section -->

	</main><!-- End #main -->
	@include('landing.footer')
@endsection
