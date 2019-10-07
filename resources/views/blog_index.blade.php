@extends('welcome')

@section ('title', 'Blog News ')

@section('content')
@php
    use Illuminate\Support\Str;
@endphp

<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <!-- block content -->
                <div class="block-content">

                    <!-- grid box -->
                    <div class="grid-box">
                        <div class="title-section">
                            <h1><span class="world">World</span></h1>
                        </div>

                        

                        <div class="row">
                            @foreach ($data as $item)
                                
                            <div class="col-md-6">
                                <div style="height:600px" class="news-post standard-post2">
                                    <div class="post-gallery">
                                    <img src="{{ asset('uploads/'.$item->image_name)}}" alt="">
                                        <a class="category-post world" href="world.html">Trends</a>
                                    </div>
                                    <div class="post-title">
                                    <h2><a href="{{ URL::to('sme/blog/news/details/'. $item->id)}}">{{ $item->headline}}</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">{{ $item->news_provider}}</a></li>
                                           
                                        </ul>
                                    </div>
                                    <div class="post-content">
                                        <p>{!! Str::words($item->detail, '20', '...') !!}</p>
                                        <a href="{{ URL::to('sme/blog/news/details/'. $item->id)}}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                        {{ $data->links('default') }}
                    </div>
                    <!-- End grid box -->

         
                    <!-- End google addsense -->

                    <!-- grid box -->
                    <div class="grid-box">

                       
                    </div>
                    <!-- End grid box -->

      

                </div>
                <!-- End block content -->
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