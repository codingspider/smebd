@extends('welcome')

@section ('title', $menu_title)

@section('content')
<br/>
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <!-- block content -->
                <div class="block-content">

                    <!-- single-post box -->
                    <div class="single-post-box">

                        <div class="title-post">
                        <h1>{{$smes_and_bankers_news->headline}}</h1>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i><a href="#">{{ date('d-m-Y', strtotime($smes_and_bankers_news->created_at))}}</a></li>
                                <li><i class="fa fa-user"></i>by <a href="{{ URL::to('/post/by/user/'.$smes_and_bankers_news->news_provider )}}">{{$smes_and_bankers_news->news_provider}}</a></li>
                                <li><i class="fa fa-user"></i>at <a href="{{$smes_and_bankers_news->source_url}}">{{$smes_and_bankers_news->news_source}}</a></li> 
                            </ul>
                        </div>

                        <div class="share-post-box" style="padding-bottom:1px;">
                            <div class="sharethis-inline-share-buttons" style="padding-bottom:1px;"></div>
                        </div>

                        <div class="post-gallery">
                            <img src="{{ asset('uploads/'.$smes_and_bankers_news->image_name)}}" alt="">
                           <!-- <span class="image-caption"> Description </span> -->
                        </div>

                        <div style="color:white" class="post-content">
                           <br>
                           <p>{!! $smes_and_bankers_news->detail !!}</p>
                            
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