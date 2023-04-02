<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
	<div class="container d-flex align-items-center justify-content-between">

		<!-- Uncomment below if you prefer to use an image logo -->
		<div class="d-flex align-items-center">
			<a href="{{ route('index') }}" class="logo me-2 ms-4"><img src="{{ asset('logo.png') }}" alt=""
					class="img-fluid"></a>
			{{-- <a href="{{ route('index') }}" class="logo me-2 ms-4"><img src="{{ asset('landing/img/logo.png') }}" alt=""
					class="img-fluid"></a> --}}

		</div>
		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
				<li><a class="nav-link scrollto" href="#about">About</a></li>
				<li><a class="nav-link scrollto" href="#services">Services</a></li>
				<li><a class="nav-link scrollto" href="#portfolio">Gallery</a></li>
				<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
				<li><a class="nav-link scrollto" href="{{ route('event') }}">Event</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

	</div>
</header><!-- End Header -->
