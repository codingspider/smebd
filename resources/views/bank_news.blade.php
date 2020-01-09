@extends('welcome')

@section ('title', 'Bank News ')

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
                        <h1>{{$bank_news->headline}}</h1>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i><a href="#">{{ date('d-m-Y', strtotime($smes_and_bankers_news->created_at))}}</a></li>
                                <li><i class="fa fa-user"></i>by <a href="{{ URL::to('/post/by/user/'.$bank_news->news_provider )}}">{{$bank_news->news_provider}}</a></li>
                                <li><i class="fa fa-user"></i>at <a href="{{$bank_news->source_url}}">{{$bank_news->news_source}}</a></li>  
                            </ul>
                        </div>


                        <div class="post-gallery">
                            <img src="{{ asset('uploads/'.$bank_news->image_name)}}" alt="">
                        </div>

                        <div style="color:white" class="post-content">
                           <p>{!! $bank_news->detail !!}</p>
                            
                        </div>


                        <!-- <div class="post-tags-box">
                            <ul class="tags-box">
                                <li><i class="fa fa-tags"></i><span>Tags:</span></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Sport</a></li>
                            </ul>
                        </div> -->
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
            <h4 style="color:red;" href="#option1">Archive </h4>
                                @foreach($archive as $year => $months)
                                <div style="color:white; ">
                                    <div id="heading_{{ $loop->index }}">
                                        <h6 class="mb-0">
                                            <button class="btn btn-link py-0 my-0" data-toggle="collapse"
                                                    data-target="#collapse_{{ $loop->index }}"
                                                    aria-expanded="true"
                                                    aria-controls="collapse_{{ $loop->index }}">
                                                >
                                            </button>
                                            {{ $year }}
                                        </h6>
                                    </div>

                                    <div id="collapse_{{ $loop->index }}" class="collapse" aria-labelledby="heading_{{ $loop->index }}"
                                         data-parent="#accordion">
                                        <div>
                                            <ul style="list-style-type: none;">
                                                @foreach($months as $month => $posts)
                                                    <li class="">
                                                            {{ $month }} ( {{ count($posts) }} )
                                                    </li>

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

            </div>

                </div>
                <!-- End sidebar -->

            </div>

        </div>

    </div>
</section>

@endsection 