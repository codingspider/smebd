@extends('welcome')
@section('title', 'News Archive')
@section('content')
@php
    use Illuminate\Support\Str;

@endphp

            <section class="heading-news2">

                <div class="container">
                    <div class="iso-call heading-news-box">
                        <div class="image-slider snd-size">
                            <span class="top-stories">TOP STORIES</span>
                            <ul class="bxslider">
                                    @foreach ($smes_and_bankers_news as $item)
                                <li>
                                    <div class="news-post image-post">
                                   
                                    <img src="{{ asset('uploads/'.$item->image_name) }}" alt="">
                                       
                                        <div class="hover-box">
                                            <div class="inner-hover">
                                                <a class="category-post sport" href="sport.html">SMEs and Bankers </a>
                                                <h2 style="color:aquamarine"><a href="{{ URL::to('sme/bankers/news/details/'.$item->id )}}">{{ $item->headline}} </a></h2>
                                                <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">{{$item->news_provider}}</a></li>
                                                <li><a href="{{ URL::to('sme/bankers/news/details/'.$item->id )}}"></a></li>
                                               
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               
                                    
                                
                                @endforeach
                          
                            </ul>
                        </div>
                        @foreach ($tech as $item)
                            
                       
                        <div class="news-post image-post default-size">
                        <img src="{{ asset('uploads/'.$item->image_name) }}" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post travel" href="#">Technology </a>
                                <h2><a href="{{ URL::to('sme/technology/news/details/'.$item->id )}}">{{ $item->headline}}</a></h2>
                                    <ul class="post-tags">
                                       
                                    </ul>
                                   
                                </div>
                            </div>
                        </div>
    
                        @endforeach
                  
    
                     
    
                    </div>
                </div>
    
            </section>
            <!-- End heading-news-section -->
    
            <!-- block-wrapper-section
                ================================================== -->
            <section class="block-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
    
                            <!-- block content -->
                            <div class="block-content">
    
                                <!-- grid box -->
                                <div class="grid-box">
    
                                    <div class="title-section">
                                        <h1><span>Today's Featured</span></h1>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="news-post image-post2">
                                                <div class="post-gallery">
                                                <img src="{{ asset('uploads/'.$item->image_name) }}" alt="">
                                                    <div class="hover-box">
                                                        <div class="inner-hover">
                                                            <a class="category-post tech" href="tech.html">Technology </a>
                                                        <h2><a href="{{ URL::to('sme/technology/news/details/'. $item->id )}}">{{$technology->headline}}</a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($technology->created_at))}}</li>
                                                            <li><i class="fa fa-user"></i>by <a href="#">{{$technology->news_provider}}</a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-md-6">
                                            <ul class="list-posts">
                                                @foreach ($fashion_news_admins as $item)
                                                    
                                                <li>
                                                <img src="{{ $item->image_name}}" alt="">
                                                    <div class="post-content">
                                                        <a href="#">Fashion News </a>
                                                    <h2><a href="{{ URL::to('sme/fashion/news/details/'. $item->id )}}">{{ $item->headline}} </a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @endforeach
    
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <!-- End grid box -->
    
                                <!-- google addsense -->
                                <div class="advertisement">
                                    <div class="desktop-advert">
                                        <span>Advertisement</span>
                                        <img src="upload/addsense/728x90-white.jpg" alt="">
                                    </div>
                                    <div class="tablet-advert">
                                        <span>Advertisement</span>
                                        <img src="upload/addsense/468x60-white.jpg" alt="">
                                    </div>
                                    <div class="mobile-advert">
                                        <span>Advertisement</span>
                                        <img src="upload/addsense/300x250.jpg" alt="">
                                    </div>
                                </div>
                                <!-- End google addsense -->
    
                       
                                <!-- End grid-box -->
    
                                <!-- carousel box -->
                                <div class="carousel-box owl-wrapper">
    
                                    <div class="title-section">
                                        <h1><span class="world">Blog</span></h1>
                                    </div>
    
                                    <div class="owl-carousel" data-num="2">
                                    @foreach ($blog_requests as $item)
                                        
                                        <div class="item">
                                            <div class="news-post image-post2">
                                                <div class="post-gallery">
                                                <img src="{{ asset('uploads/'.$item->image_name) }}" alt="">
                                                    <div class="hover-box">
                                                        <div class="inner-hover">
                                                            <h2><a href="{{ URL::to('sme/blog/news/details/'. $item->id )}}">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            <li><i class="fa fa-user"></i>by <a href="#">{{ $item->news_provider}}</a></li>
                                                              
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <ul class="list-posts">
                                                @foreach ($blogs as $item)
                                                    
                                                <li>
                                                    <img src="{{ asset('uploads/'.$item->image_name) }}" alt="">
                                                    <div class="post-content">
                                                    <h2><a href="{{ URL::to('sme/blog/news/details/'. $item->id )}}">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                @endforeach
    
                                             
                                            </ul>									
                                        </div>
                                    
                                        
                                        @endforeach
                                    
                                        
    
                                    </div>
    
                                </div>
                                <!-- End carousel box -->
    
                                <!-- google addsense -->
                                <div class="advertisement">
                                    <div class="desktop-advert">
                                        <span>Advertisement</span>
                                        <img src="upload/addsense/728x90-white.jpg" alt="">
                                    </div>
                                    <div class="tablet-advert">
                                        <span>Advertisement</span>
                                        <img src="upload/addsense/468x60-white.jpg" alt="">
                                    </div>
                                    <div class="mobile-advert">
                                        <span>Advertisement</span>
                                        <img src="upload/addsense/300x250.jpg" alt="">
                                    </div>
                                </div>
                                <!-- End google addsense -->
    
                                <!-- article box -->
                                <div class="article-box">
    
                                    <div class="title-section">
                                        <h1><span>Latest Articles</span></h1>
                                    </div>
                                    @foreach ($fashion_news_admins as $item)
                                        
                                
                                    <div class="news-post article-post">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="post-gallery">
                                                <img alt="" src="{{ asset('uploads/'.$item->image_name) }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="post-content">
                                                <h2><a href="{{ URL::to('sme/fashion/news/details/'. $item->id )}}">{{ $item->headline }}</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">{{ $item->news_provider }}</a></li>

                                                    </ul>
                                                    <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                                    <a href="{{ URL::to('sme/fashion/news/details/'. $item->id )}}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <!-- End article box -->
    
                                <!-- pagination box -->
                                <div class="pagination-box">
                                    <ul class="pagination-list">
                                            {!! $fashion_news_admins->render() !!}
                                    </ul>
                                    
                                </div>
                                <!-- End Pagination box -->
    
                            </div>
                            <!-- End block content -->
    
                        </div>
    
                        <div class="col-sm-4">
    
                            <!-- sidebar -->
                            <div class="sidebar">
    
                               
    
                                <div class="widget tab-posts-widget">
    
                                    <h4 style="color:red;" href="#option1">Our products & Services </h4>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="option1">
                                            <ul class="list-posts">
                                                @foreach ($services as $item)
                                                    
                                            
                                                <li>
                                                    <img src="{{ asset('uploads/'.$item->image_name) }}" alt="">
                                                    <div class="post-content">
                                                    <h2><a href="{{ $item->link }}">{{ $item->service}}</a></h2>
                                                       
                                                    </div>
                                                </li>
    
                                                @endforeach
                                            </ul>
                                        </div>
                                      
                                        
                                    </div>
                                </div>
    
                                <div class="widget features-slide-widget">
                                    <div class="title-section">
                                        <h1><span>Featured Posts</span></h1>
                                    </div>
                                    <div class="image-post-slider">
                                        <ul class="bxslider">
                                            @foreach ($miscelleneous_news as $item)
                                                
                                            <li>
                                                <div class="news-post image-post2">
                                                    <div class="post-gallery">
                                                    <img src="{{ asset('uploads/'.$item->image_name) }}" alt="">
                                                        <div class="hover-box">
                                                            <div class="inner-hover">
                                                            <h2><a href="{{ URL::to('sme/miscelleneous/news/details/'.$item->id )}}">{{$item->headline }}</a></h2>
                                                                <ul class="post-tags">
                                                                    <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}</li>
                                                                    <li><i class="fa fa-user"></i>by <a href="#">{{$item->news_provider }}</a></li>
                                                                  
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                    </div>
                                </div>
    
                                <div class="widget recent-comments-widget">
                               
                                  
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
            <!-- End block-wrapper-section -->

@endsection