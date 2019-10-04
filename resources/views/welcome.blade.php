<!doctype html>
<html lang="en" class="no-js">


<head>
	<title>@yield('title')</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="screen">	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.bxslider.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}" media="screen">	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ticker-style.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="screen">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d8b17b4cb45ad0012b51dcd&product=inline-share-buttons' async='async'></script>

</head>
@php
    $settings = DB::table('settings')->first();
@endphp
<body class="boxed">

	<!-- Container -->
	<div id="container">

		<!-- Header
		    ================================================== -->
		<header class="clearfix second-style">
			<!-- Bootstrap navbar -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation">

				<!-- Top line -->
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
							

								<ul class="top-line-list">
									<!-- Authentication Links -->
									@guest
										<li class="nav-item">
											<a style="color:springgreen" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
										</li>
										@if (Route::has('register'))
											<li class="nav-item">
												<a style="color:springgreen"  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
											</li>
										@endif
									@else
										<li style="color:springgreen">
											{{ Auth::user()->name }}
										</li>
										<li>
												<a class="item" href="{{ route('logout') }}"
												   onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
												</a>
			
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
												</form>
											</li>
									@endguest
								</ul>
							</div>	
							<div class="col-md-3">
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
				<!-- End Top line -->

				<!-- Logo & advertisement -->
				<div class="logo-advertisement">
					<div class="container" style="background-image: url(http://ftp.jaist.ac.jp/pub/Linux/CentOS-vault/HEADER.images/docs-header.bak.png);">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						<a class="navbar-brand" href="{{ URL::to('/')}}"><img style="width:100px; hight:100px" src="{{ $settings->logo }}" alt=""></a>
						</div>

					</div>
				</div>
				<!-- End Logo & advertisement -->

				<!-- navbar list container -->
				<div class="nav-list-container">
					<div class="container">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">

							<li><a class="home" href="{{ URL::to('/')}}">Home</a></li>

							<li><a class="world" href="{{ URL::to('erp/software')}}">ERP Software </a>
									
								</li>

								<li><a class="travel" href="{{ URL::to('sme/archive')}}">Archive </a></li>

							<li><a class="tech" href="{{ URL::to('sme/blog')}}">SME Blog</a>
									
								</li>

							
								<li><a class="tech" href="news-category.html">Help Desk </a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown tech-dropdown">

												<div class="owl-wrapper">
													<ul class="horizontal-filter-posts">
													<li><a class="active" href="{{ URL::to('sme/news/post')}}">Submit a News </a></li>
														<li><a href="#">Software</a></li>
														<li><a href="#">Internet</a></li>
														<li><a href="#">Mobile</a></li>
													</ul>
												
												</div>

											</div>
										</div>
									</div>
								</li>

								
							<li class="drop"><a class="features" href="{{ URL::to('apply/for/loan')}}">Apply for loan</a></li>

							</ul>
							<form class="navbar-form navbar-right" role="search">
								<input type="text" id="search" name="search" placeholder="Search here">
								<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- End navbar list container -->

			</nav>
			<!-- End Bootstrap navbar -->

		</header>
		<!-- End Header -->
		<br>

		@yield('content')
		<br>

		<!-- footer 
			================================================== -->
		<footer>
			<div class="container">
				<div class="footer-widgets-part">
					<div class="row">
						<div class="col-md-3">
							<div class="widget text-widget">
								<h1>About</h1>
								<p>SME Banglades is an accomplishment of Optima Solution, a dedicated team for developing SMEs of the country and contribute to our journey to developing economy.</p>
								
							</div>
							<div class="widget social-widget">
								<h1>Stay Connected</h1>
								<ul class="social-icons">
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
									<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
									<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget posts-widget">
								<h1>Random Post</h1>
								<ul class="list-posts">
									<li>
										<img src="upload/news-posts/listw4.jpg" alt="">
										<div class="post-content">
											<a href="travel.html">travel</a>
											<h2><a href="single-post.html">Pellentesque odio nisi, euismod in ultricies in, diam. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src="upload/news-posts/listw1.jpg" alt="">
										<div class="post-content">
											<a href="business.html">business</a>
											<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>

									<li>
										<img src="upload/news-posts/listw3.jpg" alt="">
										<div class="post-content">
											<a href="tech.html">tech</a>
											<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget categories-widget">
								<h1>Hot Categories</h1>
								<ul class="category-list">
									<li>
										<a href="#">Business <span>12</span></a>
									</li>
									<li>
										<a href="#">Sport <span>26</span></a>
									</li>
									<li>
										<a href="#">LifeStyle <span>55</span></a>
									</li>
									<li>
										<a href="#">Fashion <span>37</span></a>
									</li>
									<li>
										<a href="#">Technology <span>62</span></a>
									</li>
									<li>
										<a href="#">Music <span>10</span></a>
									</li>
									<li>
										<a href="#">Culture <span>43</span></a>
									</li>
									<li>
										<a href="#">Design <span>74</span></a>
									</li>
									<li>
										<a href="#">Entertainment <span>11</span></a>
									</li>
									<li>
										<a href="#">video <span>41</span></a>
									</li>
									<li>
										<a href="#">Travel <span>11</span></a>
									</li>
									<li>
										<a href="#">Food <span>29</span></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget flickr-widget">
								<h1>Flickr Photos</h1>
								<ul class="flickr-list">
									<li><a href="#"><img src="upload/flickr/1.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/2.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/3.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/4.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/5.jpg" alt=""></a></li>
									<li><a href="#"><img src="upload/flickr/6.jpg" alt=""></a></li>
								</ul>
								<a href="#">View more photos...</a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-last-line">
					<div class="row">
						<div class="col-md-6">
							<p>&copy; COPYRIGHT 2015 hotmagazine.com</p>
						</div>
						<div class="col-md-6">
							<nav class="footer-nav">
								<ul>
									<li><a href="index.html">Home</a></li>
									
									<li><a href="about.html">About</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.migrate.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.ticker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.imagesloaded.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/retina-1.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins-scroll.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>

</body>


</html>