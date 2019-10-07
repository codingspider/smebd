@extends('welcome')

@section ('title', 'Blog News ')

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
                        <h1>{{$blog_news->headline}}</h1>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($blog_news->created_at))}}</li>
                                <li><i class="fa fa-user"></i>by <a href="#">{{$blog_news->news_provider}}</a></li>
                            
                            </ul>
                        </div>

                        <div class="share-post-box">
                            <div class="sharethis-inline-share-buttons"></div>
                        </div>

                        <div class="post-gallery">
                            <img src="{{ asset('uploads/'.$blog_news->image_name)}}" alt="">
                            <span class="image-caption"> Description </span>
                        </div>

                        <div style="color:white" class="post-content">

                            <p>{{$blog_news->short_description}}</p>
                           <br>
                           <p>{!! $blog_news->detail !!}</p>
                            
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
@php
     $services = DB::table('services')->get();
@endphp

                    <div class="widget tab-posts-widget">
                        <h4 style="color:red;" href="#option1">Our products & Services </h4>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="option1">
                                            <ul class="list-posts">
                                                @foreach ($services as $item)
                                                    
                                            
                                                <li>
                                                    <img src="{{ $item->image}}" alt="">
                                                    <div class="post-content">
                                                    <h2><a href="{{ $item->link }}">{{ $item->service}}</a></h2>
                                                       
                                                    </div>
                                                </li>
    
                                                @endforeach
                                            </ul>
                                        </div>
                                      
                                        
                                    </div>
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