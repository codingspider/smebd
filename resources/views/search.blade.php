@extends('welcome')
@section('title', $menu_title)
@section('content')
@php
    use Illuminate\Support\Str;
@endphp

 <section class="block-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <!-- block content -->
                <div class="block-content">
                    <div class="single-post-box">
                    </div>          
                    <!-- grid-box -->
                    <div class="grid-box">
                        
                        <div class="row"> 
                            @forelse ($data as $item)                      

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
                            <p class="text-center" style="color:white">We could not found any data with your search. </p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
<!-- End grid-box -->

    <div class="col-sm-3">

        <!-- sidebar -->
        <div class="sidebar">
            <div class="widget tab-posts-widget text-center">
                <div class="tab-content">
                    <div class="tab-pane active" id="option1">
                        <ul class="list-posts">
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
<!-- End block-wrapper-section -->

@endsection