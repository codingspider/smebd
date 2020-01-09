@extends('welcome')

@section ('title', 'Tours & Travel ')

@section('content')


<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <!-- block content -->
                <div class="block-content">

                    <!-- single-post box -->
                    <div class="single-post-box">

                        <div class="title-post">
                        <h1>Tours & Travels</h1>
                        </div>

                        <div class="post-gallery">
                            <img src="uploads/tours.jfif" alt="">
                        </div>
                        <div style="color:white" class="post-content">
                           
                           <p>We offer all air ticket at the most reasonable price.</p>
                            
                        </div>
						<div class="share-post-box">
                            <div class="sharethis-inline-share-buttons"></div>
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
                                                    <img src="{{ asset('uploads/'.$item->image)}}" alt="">
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