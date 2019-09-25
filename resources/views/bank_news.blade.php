@extends('welcome')

@section ('title', 'Bank News ')

@section('content')

================================================== -->
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <!-- block content -->
                <div class="block-content">

                    <!-- single-post box -->
                    <div class="single-post-box">

                        <div class="title-post">
                        <h1>{{$bank_news->headline}}</h1>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($technology->created_at))}}</li>
                                <li><i class="fa fa-user"></i>by <a href="#">{{$bank_news->news_provider}}</a></li>
                            
                            </ul>
                        </div>

                        <div class="share-post-box">
                            <div class="sharethis-inline-share-buttons"></div>
                        </div>

                        <div class="post-gallery">
                            <img src="{{ asset($bank_news->image_name)}}" alt="">
                            <span class="image-caption"> Description </span>
                        </div>

                        <div style="color:white" class="post-content">

                            <p>{{$bank_news->short_description}}</p>
                           <br>
                           <p>{!! $bank_news->detail !!}</p>
                            
                        </div>


                        <div class="post-tags-box">
                            <ul class="tags-box">
                                <li><i class="fa fa-tags"></i><span>Tags:</span></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Sport</a></li>
                            </ul>
                        </div>

                        <div class="share-post-box">
                            <ul class="share-box">
                                <div class="sharethis-inline-share-buttons"></div>
                            </ul>
                        </div>


                    </div>
                    <!-- End single-post box -->

                </div>
                <!-- End block content -->

            </div>

            <div class="col-sm-4">

                <!-- sidebar -->
                <div class="sidebar">


                    <div class="widget tab-posts-widget">

                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active">
                                <a href="#option1" data-toggle="tab">Popular</a>
                            </li>
                            <li>
                                <a href="#option2" data-toggle="tab">Recent</a>
                            </li>
                            <li>
                                <a href="#option3" data-toggle="tab">Top Reviews</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="option1">
                                <ul class="list-posts">
                                    <li>
                                        <img src="upload/news-posts/listw1.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw2.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Sed arcu. Cras consequat. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw3.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw4.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw5.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="option2">
                                <ul class="list-posts">

                                    <li>
                                        <img src="upload/news-posts/listw3.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw4.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw5.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="upload/news-posts/listw1.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw2.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>										
                            </div>
                            <div class="tab-pane" id="option3">
                                <ul class="list-posts">

                                    <li>
                                        <img src="upload/news-posts/listw4.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw1.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw3.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw2.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw5.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>										
                            </div>
                        </div>
                    </div>


                    <div class="widget subscribe-widget">
                        <form class="subscribe-form">
                            <h1>Subscribe to RSS Feeds</h1>
                            <input type="text" name="sumbscribe" id="subscribe" placeholder="Email"/>
                            <button id="submit-subscribe">
                                <i class="fa fa-arrow-circle-right"></i>
                            </button>
                            <p>Get all latest content delivered to your email a few times a month.</p>
                        </form>
                    </div>

                    <div class="widget tags-widget">

                        <div class="title-section">
                            <h1><span>Popular Tags</span></h1>
                        </div>

                        <ul class="tag-list">
                            <li><a href="#">News</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Sport</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">World</a></li>
                            <li><a href="#">Music</a></li>
                        </ul>

                    </div>

                    <div class="advertisement">
                        <div class="desktop-advert">
                            <span>Advertisement</span>
                            <img src="upload/addsense/300x250.jpg" alt="">
                        </div>
                        <div class="tablet-advert">
                            <span>Advertisement</span>
                            <img src="upload/addsense/200x200.jpg" alt="">
                        </div>
                        <div class="mobile-advert">
                            <span>Advertisement</span>
                            <img src="upload/addsense/300x250.jpg" alt="">
                        </div>
                    </div>

                </div>
                <!-- End sidebar -->

            </div>

        </div>

    </div>
</section>

@endsection 