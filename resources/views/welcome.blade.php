<!doctype html>
<html lang="en" class="no-js">


<head>
	<title>@yield('title')</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
<link href="{{asset('maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="screen">	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.bxslider.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" media="screen">	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ticker-style.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen">

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
									<li>
										<span class="city-weather">Dhaka, Bangladesh </span>
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="24px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
											<path fill="#777777" d="M208,64c8.833,0,16-7.167,16-16V16c0-8.833-7.167-16-16-16s-16,7.167-16,16v32
												C192,56.833,199.167,64,208,64z M332.438,106.167l22.625-22.625c6.249-6.25,6.249-16.375,0-22.625
												c-6.25-6.25-16.375-6.25-22.625,0l-22.625,22.625c-6.25,6.25-6.25,16.375,0,22.625
												C316.062,112.417,326.188,112.417,332.438,106.167z M16,224h32c8.833,0,16-7.167,16-16s-7.167-16-16-16H16
												c-8.833,0-16,7.167-16,16S7.167,224,16,224z M352,208c0,8.833,7.167,16,16,16h32c8.833,0,16-7.167,16-16s-7.167-16-16-16h-32
												C359.167,192,352,199.167,352,208z M83.541,106.167c6.251,6.25,16.376,6.25,22.625,0c6.251-6.25,6.251-16.375,0-22.625
												L83.541,60.917c-6.25-6.25-16.374-6.25-22.625,0c-6.25,6.25-6.25,16.375,0,22.625L83.541,106.167z M400,256
												c-5.312,0-10.562,0.375-15.792,1.125c-16.771-22.875-39.124-40.333-64.458-51.5C318.459,145,268.938,96,208,96
												c-61.75,0-112,50.25-112,112c0,17.438,4.334,33.75,11.5,48.438C47.875,258.875,0,307.812,0,368c0,61.75,50.25,112,112,112
												c13.688,0,27.084-2.5,39.709-7.333C180.666,497.917,217.5,512,256,512c38.542,0,75.333-14.083,104.291-39.333
												C372.916,477.5,386.312,480,400,480c61.75,0,112-50.25,112-112S461.75,256,400,256z M208,128c39.812,0,72.562,29.167,78.708,67.25
												c-10.021-2-20.249-3.25-30.708-3.25c-45.938,0-88.5,19.812-118.375,53.25C131.688,234.083,128,221.542,128,208
												C128,163.812,163.812,128,208,128z M400,448c-17.125,0-32.916-5.5-45.938-14.667C330.584,461.625,295.624,480,256,480
												c-39.625,0-74.584-18.375-98.062-46.667C144.938,442.5,129.125,448,112,448c-44.188,0-80-35.812-80-80s35.812-80,80-80
												c7.75,0,15.062,1.458,22.125,3.541c2.812,0.792,5.667,1.417,8.312,2.521c4.375-8.562,9.875-16.396,15.979-23.75
												C181.792,242.188,216.562,224,256,224c10.125,0,19.834,1.458,29.25,3.709c10.562,2.499,20.542,6.291,29.834,11.291
												c23.291,12.375,42.416,31.542,54.457,55.063C378.938,290.188,389.209,288,400,288c44.188,0,80,35.812,80,80S444.188,448,400,448z"
											/>
										</svg>
										<span class="cel-temperature">+7</span>
									</li>
                <li><span class="time-now">@php  echo $today = date('D, d M Y H:i:s T');     @endphp</span></li>
									<li ><a style="color:greenyellow" href="#">Log In</a></li>
									<li><a href="contact.html">Contact</a></li>
								
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
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
            <a class="navbar-brand" href="index.html"><img style="width:100px; hight:100px" src="{{ $settings->logo }}" alt=""></a>
						</div>

						<div class="advertisement">
							<div class="desktop-advert">
								<span>Advertisement</span>
								<img src="upload/addsense/728x90-white.jpg" alt="">
							</div>
							<div class="tablet-advert">
								<span>Advertisement</span>
								<img src="upload/addsense/468x60-white.jpg" alt="">
							</div>
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

								<li class="drop"><a class="home" href="index.html">Home</a></li>

								<li><a class="world" href="news-category.html">World</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown world-dropdown">
												<div class="filter-block">
													<ul class="filter-posts">
														<li><a href="#">All</a></li>
														<li><a href="#">Politics</a></li>
														<li><a href="#">Business</a></li>
														<li><a class="active" href="#">Lifestyle</a></li>
														<li><a href="#">Economy</a></li>
														<li><a href="#">Music</a></li>
													</ul>
												</div>
												<div class="posts-filtered-block">
													<div class="owl-wrapper">
														<h1>Lifestyle</h1>
														<div class="owl-carousel" data-num="4">
														
															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="upload/news-posts/art1.jpg" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="upload/news-posts/art2.jpg" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="upload/news-posts/art3.jpg" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="upload/news-posts/art6.jpg" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

															<div class="item news-post standard-post">
																<div class="post-gallery">
																	<img src="upload/news-posts/art9.jpg" alt="">
																</div>
																<div class="post-content">
																	<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																		<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																	</ul>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</li>

								<li><a class="travel" href="news-category.html">Travel</a></li>

								<li><a class="tech" href="news-category.html">Tech</a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown tech-dropdown">

												<div class="owl-wrapper">
													<ul class="horizontal-filter-posts">
														<li><a class="active" href="#">All</a></li>
														<li><a href="#">Software</a></li>
														<li><a href="#">Internet</a></li>
														<li><a href="#">Mobile</a></li>
													</ul>
													<div class="owl-carousel" data-num="4">
													
														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/art1.jpg" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/art2.jpg" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/art3.jpg" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/art6.jpg" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

														<div class="item news-post standard-post">
															<div class="post-gallery">
																<img src="upload/news-posts/art9.jpg" alt="">
															</div>
															<div class="post-content">
																<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. </a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i>27 may 2013</li>
																	<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																</ul>
															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
									</div>
								</li>

								<li><a class="fashion" href="news-category.html">Fashion</a></li>

								<li><a class="sport" href="news-category.html">Sport</a></li>
								<li><a class="food" href="news-category.html">Food &amp; Health</a></li>

								<li class="drop"><a class="features" href="#">Features</a></li>

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

@yield('content')

		<!-- footer 
			================================================== -->
		<footer>
			<div class="container">
				<div class="footer-widgets-part">
					<div class="row">
						<div class="col-md-3">
							<div class="widget text-widget">
								<h1>About</h1>
								<p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
								<p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. </p>
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
	
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.migrate.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.ticker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.imagesloaded.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/retina-1.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins-scroll.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>


</html>