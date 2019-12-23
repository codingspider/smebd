<!doctype html>
<html lang="en" class="no-js">


<head>
	<title>@yield('title')</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="_token" content="{{csrf_token()}}" />
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
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
</head>
@php
use App\Menu;
    $settings = DB::table('settings')->first();
     $categories = Menu::with('children')->where('parent_id','=',0)->get();
@endphp
<body class="boxed">

	<!-- Container -->
	<div id="container">

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
									<li class="nav-item">
											<a style="color:springgreen" class="nav-link" href="{{ URL::to('/') }}">{{ __('Home') }}</a>
										</li>
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
					<div class="container"  style="background-image: url({{ asset($settings->image)}});" height="300px">
<br>
<br>
<br>
<br>
<br>
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						<a class="navbar-brand" href="{{ URL::to('/')}}"></a>
						</div>

					</div>
				</div>
				<!-- End Logo & advertisement -->

				<!-- navbar list container -->
				<div class="nav-list-container">
					<div class="container">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								@foreach($categories as $item)
								@if($item->children->count() > 0)
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										{{$item->title}}
										<ul class="dropdown-menu">
											@foreach($item->children as $submenu)
											<li><a href="{{ URL::to($submenu->url )}}">{{$submenu->title}}</a></li>
											@endforeach
										</ul>
									</li>
									@else
									<li><a href="{{ URL::to($item->url )}}">{{$item->title}}</a></li>
									@endif
									@endforeach
								</ul>
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
							
						</div>
						@php
							$data = DB::table('sme_blogs')->where('approved', 2)->orderBy('id', 'DESC')->paginate(3);
						@endphp
						
						<div class="col-md-4">
							<div class="widget categories-widget">
								<h1>Hot Categories</h1>
								<ul class="category-list">
									
									<li>
									<a href="#">Bankers News  <span>{{ DB::table('sme_blogs')->where('approved', 1)->where('cat_id', 3)->orderBy('id', 'DESC')->count()}}</span></a>

									</li>
									<li>
									<a href="#">Fashion News  <span>{{ DB::table('sme_blogs')->where('approved', 1)->where('cat_id', 2)->orderBy('id', 'DESC')->count()}}</span></a>
									</li>
									<li>
									<a href="#">Blog News   <span>{{ DB::table('sme_blogs')->where('approved', 1)->where('cat_id', 4)->orderBy('id', 'DESC')->count()}}</span></a>
									</li>
									<li>
									<a href="#">Technology News   <span>{{ DB::table('sme_blogs')->where('approved', 1)->where('cat_id', 1)->orderBy('id', 'DESC')->count()}}</span></a>
									</li>
									
								</ul>
							</div>
						</div>

						<div class="col-md-3">
								<div class="widget posts-widget">
									<p style="color:aqua">advertisement</p>
								</div>
							</div>
						
					</div>
				</div>
				<div class="footer-last-line">
					<div class="row">
						<div class="col-md-6">
							<p>&copy; COPYRIGHT 2019 Optima Solutions</p>
						</div>
						<div class="col-md-6">
							<nav class="footer-nav">
								<ul>
								<li><a href="{{ URL::to('/home')}}">Developed By Optima Solutions </a></li>
									
								<li><a href="{{ URL::to('/contact')}}">Contact</a></li>
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
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	
<script>
		//Get the button
		var mybutton = document.getElementById("myBtn");
		
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};
		
		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}
		
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
		</script>

		<style>
		
		#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
		</style>
</body>


</html>