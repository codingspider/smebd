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
	<link rel=”stylesheet” href=” https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<script src=”https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	
	<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d8b17b4cb45ad0012b51dcd&product=inline-share-buttons' async='async'></script>
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
</head>
@php
    $settings = DB::table('settings')->first();
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
					<div class="container" style="background-image: url({{ asset($settings->image)}});">

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

						
								<li><a class="travel" href="{{ URL::to('sme/archive')}}">Archive </a></li>

							
								<li><a class="tech" href="#">SME Blog </a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown tech-dropdown">

												<div class="owl-wrapper">
													<ol class="">
													<button type="button" class="btn btn-info" onclick="window.location = '{{ URL::to('sme/news/post')}}'" >Post News </button>
														
														<button type="button" class="btn btn-info" onclick="window.location = ''">All News </button>
															
															
												   </ol>
												
												</div>

											</div>
										</div>
									</div>
								</li>
								<li><a class="tech" href="#">Help Desk </a>
									<div class="megadropdown">
										<div class="container">
											<div class="inner-megadropdown tech-dropdown">

												<div class="owl-wrapper">
													<ol class="">
														<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">DEFINITION OF SME</button>
															<div id="demo" class="collapse">
																<div class="container-fluid">
																	<div class="row">
																	<div class="col-sm-12 col-lg-12">
																	</div>
																	<div class="col-sm-12 col-lg-12">
																	<table class="table table-bordered" style="font-size: 14px;">
																	<tbody>
																	<tr style="background-color: #f9f9f9;">
																	<td width="40">
																	<p style="text-align: center;"><strong>SI</strong></p>
																	</td>
																	<td colspan="2" width="240">
																	<p style="text-align: center;"><strong>Type of Industry</strong></p>
																	</td>
																	<td style="text-align: center;" width="359"><strong>The amount of investment</strong>
																	
																	<strong>(Replacement cost and value of fixed assets, excluding land and factory buildings)</strong></td>
																	<td width="270">
																	<p style="text-align: center;"><strong>Number of employed workers</strong></p>
																	</td>
																	</tr>
																	<tr style="background-color: #f9f9f9;">
																	<td width="40">
																	<p style="text-align: center;">1.</p>
																	</td>
																	<td colspan="2" width="211"><strong>Cottage Industry</strong></td>
																	<td width="359">Below 10 lakh</td>
																	<td width="270">number of workers not exceed 15</td>
																	</tr>
																	<tr style="background-color: #f9f9f9;">
																	<td style="text-align: center;" width="40">2.</td>
																	<td colspan="2" width="211"><strong>Micro Industry</strong></td>
																	<td width="359">10 lakh to 75 lakh</td>
																	<td width="270">16 to 30</td>
																	</tr>
																	<tr style="background-color: #f9f9f9;">
																	<td style="text-align: center;" rowspan="2" width="40">3.</td>
																	<td rowspan="2" width="108"><strong>Small Industry</strong></td>
																	<td width="103">Manufacturing</td>
																	<td width="359">75 lakh to 15 crore</td>
																	<td width="270">31 to 120</td>
																	</tr>
																	<tr style="background-color: #f9f9f9;">
																	<td width="103">Service</td>
																	<td width="359">10 lakh to 2 crore</td>
																	<td width="270">16 to 50</td>
																	</tr>
																	<tr style="background-color: #f9f9f9;">
																	<td style="text-align: center;" rowspan="2" width="40">4.</td>
																	<td rowspan="2" width="108"><strong>Medium Industry</strong></td>
																	<td width="103">Manufacturing</td>
																	<td width="359">15 crore to 50 crore</td>
																	<td width="270">121 to 300</td>
																	</tr>
																	<tr style="background-color: #f9f9f9;">
																	<td width="103">Service</td>
																	<td width="359">2 crore to 30 crore</td>
																	<td width="270">51 to 120</td>
																	</tr>
																	<tr style="background-color: #f9f9f9;">
																	<td style="text-align: center;" rowspan="2" width="40">5.</td>
																	<td rowspan="2" width="108"><strong>Large Industry</strong></td>
																	<td width="103">Manufacturing</td>
																	<td width="359">More than 50 crore</td>
																	<td width="270">More than 300</td>
																	</tr>
																	<tr style="background-color: #f9f9f9;">
																	<td width="103">Service</td>
																	<td width="359">More than 30 crore</td>
																	<td width="270">More than 120</td>
																	</tr>
																	</tbody>
																	</table>
																	<strong>Source: National Industrial policy(2016)</strong>
																	
																	</div>
																	</div>
																	</div>
																	<!-- End of main container -->

															</div>
															<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">SME REFINANCE SHCMES</button>
															<div id="demo2" class="collapse">
																<p style="background-color: #f9f9f9;">Bangladesh Bank has disbursed loans amounting to Tk 5,831.39 crore as of April 30, 2017 from its seven refinance schemes for the country’s disadvantaged entrepreneurs, which has played an important role in raising the capacity of small and medium enterprises.

																	The majority of clients have taken the credit from the schemes with a lower interest rate of<strong> 8 to 9 percent </strong>that has help the entrepreneurs to open new businesses or to expand the existing ones.
																	Under the refinance schemes, banks disburse loans to their clients from their own sources after which they get the amounts from the BB.
																	
																	<strong>The central bank provides the fund to banks with an interest rate of five per cent and they (banks) in most of the cases add three to four per cent on the rate while disbursing the loans to their clients.</strong>
																	
																	The BB is now operating seven refinance schemes under its SME and special programmes department.
																	The Asian Development Bank and the Japan International Cooperation Agency have given financial support to two of the seven schemes.
																	
																	The central bank introduced the refinance schemes with the aim of bringing the underprivileged entrepreneurs under the banking system.
																	
																	The BB’s <strong>refinance schemes</strong> under the <strong>SME and special programmes department (SMESPD)</strong> are:</p>
															<ol>
																<li style="color: blue; cursor: pointer;"><a href="http://localhost:8085/wordpress/agrorefinance/">Refinance scheme for setting up agro-based product processing industries in rural areas</a></li>
																<li style="color: blue; cursor: pointer;"><a href=" http://localhost:8085/wordpress/greenrefinance/">Small enterprise scheme</a></li>
																<li style="background-color: #f9f9f9;">Refinance scheme for Shariah-based financing in agro-based industry,</li>
																<li style="background-color: #f9f9f9;">Refinance scheme for new entrepreneurs in cottage, micro and small enterprise sector,</li>
																<li style="background-color: #f9f9f9;">Medium-sized enterprise development project and</li>
																<li style="background-color: #f9f9f9;">Financial sector project for development of SME and</li>
																<li style="background-color: #f9f9f9;">Urban building safety project.</li>
																<li style="background-color: #f9f9f9;">Refinance Scheme for Green Products/Initiatives</li>
																	<li  style="color: blue; cursor: pointer;"><a href="http://localhost:8085/wordpress/tsl_jica_fdr/ ">JICA 2 STEP LOAN FOR FDI PROMOTION IN BANGLADESH</a></li>
															</ol>

															</div>
															<button type="button" class="btn btn-info" >REQUIRED DOCUMENTS FOR APPLYING A LOAN</button>
												   </ol>
												
												</div>

											</div>
										</div>
									</div>
								</li>

								
							<li class="drop"><a class="features" href="{{ URL::to('apply/for/loan')}}">Apply for loan</a></li>
							<li><a class="travel" href="{{ URL::to('contact')}}">Contact  </a></li>
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
						@php
							$data = DB::table('sme_blogs')->where('approved', 2)->orderBy('id', 'DESC')->paginate(3);
						@endphp
						<div class="col-md-3">
							<div class="widget posts-widget">
								<h1>Random Post</h1>
								<ul class="list-posts">
									@foreach ($data as $item)
										
								
									<li>
										<img src="{{ asset('upload/'. $item->image_name) }}" alt="">
										<div class="post-content">
											<a href="#">travel</a>
											<h2><a href="#">{{ $item->headline}} </a></h2>
											<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i>{{ $item->created_at }}</li>
											</ul>
										</div>
									</li>
									@endforeach
									
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="widget categories-widget">
								<h1>Hot Categories</h1>
								<ul class="category-list">
									
									<li>
									<a href="#">Bankers News  <span>{{ DB::table('sme_blogs')->where('approved', 2)->where('cat_id', 3)->orderBy('id', 'DESC')->count()}}</span></a>

									</li>
									<li>
									<a href="#">Fashion News  <span>{{ DB::table('sme_blogs')->where('approved', 2)->where('cat_id', 2)->orderBy('id', 'DESC')->count()}}</span></a>
									</li>
									<li>
									<a href="#">Blog News   <span>{{ DB::table('sme_blogs')->where('approved', 2)->where('cat_id', 4)->orderBy('id', 'DESC')->count()}}</span></a>
									</li>
									<li>
									<a href="#">Technology News   <span>{{ DB::table('sme_blogs')->where('approved', 2)->where('cat_id', 1)->orderBy('id', 'DESC')->count()}}</span></a>
									</li>
									
								</ul>
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
								<li><a href="{{ URL::to('/home')}}">Home</a></li>
									
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

</body>


</html>