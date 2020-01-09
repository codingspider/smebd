@extends('welcome')
@section('title', $menu_title)
@section('content')
@php
    use Illuminate\Support\Str;
@endphp
<br/>
 <section class="block-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <!-- block content -->
                <div class="block-content">
                    <div class="single-post-box">
                    <div class="title-post">
                        <h1>{{ $menu_title }}</h1>
                    </div> 
                    </div>          
                    <!-- grid-box -->
                    <div class="grid-box">
                        
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
                </div>
            </div>
<!-- End grid-box -->

    <div class="col-sm-3">

        <!-- sidebar -->
        <div class="sidebar">
            <div class="widget tab-posts-widget text-center">

                <h4 style="color:red;" href="#option1">Our products & Services </h4>
                <div class="tab-content">
                    <div class="tab-pane active" id="option1">
                        <ul style="padding-left: 0px;" class="list-posts">
                            @foreach ($services as $item)
                            <li style="padding-left: 0px;" class="col-md-6 odd">
                                <div class="post-content">
                                <h2><a href="{{ $item->link }}">{{ $item->service}}</a></h2>
                                   
                                </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                                     
                </div>
            </div>

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