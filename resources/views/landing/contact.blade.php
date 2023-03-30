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
						<div class="text-end"><button type="submit" id="btn-save">Sumbit</button></div>
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
