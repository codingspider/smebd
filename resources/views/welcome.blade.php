<!doctype html>
<html lang="en" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title')</title>



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.bxslider.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ticker-style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d8b17b4cb45ad0012b51dcd&product=inline-share-buttons' async='async'></script>

    <!-- include summernote css/js -->
    <!--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">-->
    <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>-->
    <script type="text/javascript" src="{{ asset('js/jquery-1.js') }}"></script>
</head>
<style>
    .pop-outer {
        background-color: rgba(0, 0, 0, 0.5);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 999999999;
    }

    .pop-inner {
        background-color: #fff;
        width: 500px;
        height: 400px;
        padding: 25px;
        margin: 5% auto;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    ul li {
        display: block;
        position: relative;
        float: left;
    }

    /* This hides the dropdowns */

    li ul {
        display: none;
    }

    ul li a {

        display: block;
        padding: 1em;
        text-decoration: none;
        white-space: nowrap;
        color: #fff;


        -webkit-transition: background-color 0.5s;

        -moz-transition: background-color 0.5s;

        -o-transition: background-color 0.5s;

        transition: background-color 0.5s;

    }

    ul li a:hover {
        background: #E53935;
        color: #fff;
        text-decoration: none;
    }

    /* Display the dropdown */

    @-webkit-keyframes fadeIn {

        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }

    }

    @keyframes fadeIn {

        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }

    }

    li:hover>ul {

        display: block;

        position: absolute;

        -webkit-animation: fadeIn 1s;

        animation: fadeIn 1s;

    }

    li:hover li {
        float: none;
        background: #0077b3;
    }



    li:hover li a:hover {
        background: #0077b3;
    }

    .main-navigation li ul li {
        border-top: 0;
    }

    /* Displays second level dropdowns to the right of the first level dropdown */

    ul ul ul {

        left: 100%;

        top: 0;

    }

    /* Simple clearfix */

    ul:before,

    ul:after {

        content: " ";
        /* 1 */

        display: table;
        /* 2 */

    }

    ul:after {
        clear: both;
    }
</style>
@php
use App\Menu;
$settings = DB::table('settings')->first();
$categories = Menu::with('children')->where('parent_id','=',0)->get();
@endphp

<body class="boxed">
    @yield('modal')
    <div style="display: none;" class="pop-outer">
        <div class="pop-inner">
            <button class="close">X</button>
            <h2>Voting Form</h2>
            <form action="{{ URL::to('/check/auth/vote/form') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">User Registration Number</label>
                    <input type="text" name="voter_reg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Enter your sipeaa registration number.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">User Passcode </label>
                    <input type="text" name="pass_id" class="form-control" id="exampleInputPassword1">
                    <small id="emailHelp" class="form-text text-muted">Enter your sipeaa user ID.</small>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Verify</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Container -->
    <div id="container-fluid" style="background-color: #333333">

        <header class="clearfix second-style">
            <!-- Bootstrap navbar -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation">

                <!-- Top line -->
                <div class="top-line">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-9">
                                <ul class="top-line-list">
                                    <!-- Authentication Links -->
                                    <li class="nav-item">
                                        <a style="color:springgreen" class="nav-link" href="{{ URL::to('/home') }}">{{ __('Home') }}</a>
                                    </li>
                                    <li><a style="color:springgreen" class="open" href="#">Vote</a></li>
                                    <li><a style="color:springgreen" type="button" data-toggle="modal" data-target="#voter_id" href="#">Voter Passcode Change</a></li>
                                    @guest
                                    <li class="nav-item">
                                        <a style="color:springgreen" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a style="color:springgreen" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                    @endif
                                    @else
                                    <li><a style="color:springgreen" href="#">{{ Auth::user()->name }}</a></li>

                                    <li>
                                        <a style="color:springgreen" href="sme/news/post">Post News </a>
                                    </li>
                                    <li>
                                        <a style="color:springgreen" class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                                <ul class="pull-right">
                                    <li><a class="facebook" href="{{ $settings->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="{{ $settings->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="{{ $settings->youtube }}"><i class="fa fa-youtube"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top line -->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <img style="max-width: 100%; height: auto; margin-left: 20px; margin-right: 20px;" class="img-fluid " src="{{ asset( $settings->image )}}" />
                        </div>
                    </div>

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="" href="{{ URL::to('/')}}"></a>
                    </div>
                </div>

                <!-- navbar list container -->
                <div class="nav-list-container">
                    <div class="container">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <nav>

                                <ul class="main-nagivation">

                                    @each('partials.index', $categories, 'category', 'partials.nothing')
                                    <form class="navbar-form navbar-right" role="search" action="{{ URL::to('/search') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="text" id="search" name="search" placeholder="Search here">
                                        <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                                    </form>

                                </ul>


                            </nav>


                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </div>
                <!-- End navbar list container -->

            </nav>
            <!-- End Bootstrap navbar -->

        </header>
        <script>
            $(document).ready(function() {
                $(".open").click(function() {
                    $(".pop-outer").fadeIn("slow");
                });
                $(".close").click(function() {
                    $(".pop-outer").fadeOut("slow");
                });
            });
        </script>
        <!-- End Header -->



        @yield('content')
        <footer>
            <div class="container">
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
        window.onscroll = function() {
            scrollFunction()
        };

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

    <!-- Modal -->
    <div class="modal fade" style="z-index: 999999" id="voter_id" tabindex="-1" role="dialog" aria-labelledby="voter_id" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="voter_id">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ URL::to('/voter/passcode/change') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter Your Previous Passcode</label>
                            <input type="text" name="pre_pass_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter Your New Passcode </label>
                            <input type="text" name="con_pass_code" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Change Passcode Now</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>




</html>
