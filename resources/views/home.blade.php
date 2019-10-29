@extends('welcome')
@section('title', 'Home')
@section('content')
@php
    use Illuminate\Support\Str;

@endphp

            <section class="heading-news2">

                <div class="container">
                    
                    <div class="ticker-news-box">
                        <span class="breaking-news">breaking news</span>
                        <ul id="js-news">
                        @foreach ($breaking as $item)
                            
                            <li class="news-item"><span class="time-news">{{ date('d-m-Y', strtotime($item->created_at))}}</span>  <a href="{{ URL::to('breaking/news/details/'.$item->id )}}">{{ $item->headline}} </a> - {{ Str::words($item->detail, '10', '...')}}</li>
                            @endforeach
                        </ul>
                    </div>
    
                    
                </div>
    
            </section>
            <!-- End heading-news-section -->
 
            <section class="block-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
    
                            <!-- block content -->
                            <div class="block-content">
    
                                <!-- grid box -->
                                <div class="grid-box">
    
                                    <div class="title-section">
                                        <h1><span>Top Stories </span></h1>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-md-10">
                                                <div class="owl-wrapper">
														<div class="owl-carousel" data-num="4">
														@foreach ($top as $item)
                                                            
															<div class="item news-post standard-post">
																<div class="post-gallery">
                                                                <img src="{{ asset('uploads/'.$item->image_name )}}" alt="" height="180px" width="100%">
																</div>
																<div class="post-content">
                                                                <h2><a href="{{ URL::to('top/stories/'.$item->id )}}">{{ $item->headline }}</a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}</li>
																		
																	</ul>
																</div>
                                                            </div>
                                                        @endforeach
                                                            
														</div>
													</div>
                                        </div>
    
                                        
                                    </div>

                                </div>
                                <br>
                                <br>
                               
    <!-- grid-box -->
        <div class="grid-box">

            <div class="title-section">
                <h1><span class="world">Bankers News </span></h1>
            </div>
        <br>
        <br>
    <div class="row">
        @foreach ($smes_and_bankers_news as $item)
            

        <div class="col-md-4" height="300px">
            <div class="news-post video-post">
            <img alt="" src="{{ asset('uploads/'.$item->image_name)}}" height="200px">
               
                <div class="hover-box">
                <h2><a href="{{ URL::to('sme/bankers/news/details/'.$item->id)}}">{{ $item->headline }}</a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End grid-box -->
                               
    <!-- grid-box -->
        <div class="grid-box">

            <div class="title-section">
                <h1><span class="world">Technology News </span></h1>
            </div>
        <br>
        <br>
    <div class="row">
        @foreach ($technology_news as $item)
            

        <div class="col-md-4" height="300px">
            <div class="news-post video-post">
            <img alt="" src="{{ asset('uploads/'.$item->image_name)}}" height="200px">
               
                <div class="hover-box">
                <h2><a href="{{ URL::to('sme/bankers/news/details/'.$item->id)}}">{{ $item->headline }}</a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End grid-box -->
    <!-- grid-box -->
        <div class="grid-box">

            <div class="title-section">
                <h1><span class="world">Miscelleneous News </span></h1>
            </div>
        <br>
        <br>
    <div class="row">
        @forelse ($miscelleneous_news as $item)
            

        <div class="col-md-4" height="300px">
            <div class="news-post video-post">
            <img alt="" src="{{ asset('uploads/'.$item->image_name)}}" height="200px">
               
                <div class="hover-box">
                <h2><a href="{{ URL::to('sme/bankers/news/details/'.$item->id)}}">{{ $item->headline }}</a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @empty
        <p>There is no Post about this Category. </p>
        @endforelse
    </div>
</div>
<!-- End grid-box -->
                               

    <!-- grid-box -->
        <div class="grid-box">

            <div class="title-section">
                <h1><span class="world">Fashion News </span></h1>
            </div>
        <br>
        <br>
    <div class="row">
        @foreach ($fashion_news_admins as $item)
            

        <div class="col-md-4" height="300px">
            <div class="news-post video-post">
            <img alt="" src="{{ asset('uploads/'.$item->image_name)}}" height="200px">
               
                <div class="hover-box">
                <h2><a href="{{ URL::to('sme/bankers/news/details/'.$item->id)}}">{{ $item->headline }}</a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

    
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
    
    
                                <div class="widget recent-comments-widget">
                               
                                  
                                </div>
                                @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                                <div class="widget subscribe-widget">
                                <form method="POST" action="{{ URL::to('/newsletter/post')}}">
                                    @csrf 
                                        <h1>Subscribe to RSS Feeds</h1>
                                        <input type="text" name="subscribe" id="subscribe" placeholder="Email"/>
                                        <button>
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