@extends('welcome')
@section('title', 'Home')
@section('content')
@php
use Illuminate\Support\Str;

@endphp

<section class="heading-news2">
    <div class="container-fluid">

        <div class="ticker-news-box">
            <span class="breaking-news">breaking news</span>
            <ul id="js-news">
                @foreach ($breaking as $item)
                <li class="news-item"><span class="time-news">{{ date('d-m-Y', strtotime($item->created_at))}}</span>
                    <a href="{{ URL::to('breaking/news/details/'.$item->id )}}">{{ $item->headline}} </a> </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- End heading-news-section -->
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<section class="block-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <!-- block content -->
                <div>
                    <div class="single-post-box">
                        <div class="title-post">
                            <h1>Top Stories</h1>
                        </div>
                    </div>
                    <!-- grid-box -->
                    <div class="grid-box">

                        <div class="row">
                            @foreach ($top as $item)
                            <div class="col-md-4" height="300px">
                                <div class="news-post video-post">
                                    <img alt="" src="{{ asset('uploads/'.$item->image_name)}}" height="200px">
                                    <div class="hover-box">
                                        <h2><a href="{{ URL::to('sme/bankers/news/details/'.$item->id)}}">{{ $item->headline }}</a>
                                        </h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End grid-box -->
                </div>
                <!-- End block content -->
                @php
                $tmenu = DB::table('menus')->where('is_catagory','1')->where('url','/news_node')->get();
                @endphp
                <!-- block content -->
                @foreach ($tmenu as $tmenu)
                <div>
                    <div class="single-post-box">
                        <div class="title-post">
                            <h1>{{ $tmenu->title }}</h1>
                        </div>
                    </div>
                    <!-- grid-box -->
                    <div class="grid-box">

                        <div class="row">
                            @php
                            $sme_news =
                            DB::table('sme_blogs')->where('approved','1')->where('cat_id',$tmenu->id)->get();
                            @endphp
                            @foreach ($sme_news as $item)

                            <div class="col-md-4" style="height: 250px; ">
                                <div class="news-post video-post">
                                    <img alt="" src="{{ asset('uploads/'.$item->image_name)}}" height="200px">

                                    <div class="hover-box">
                                        <h2><a href="{{ URL::to('sme/bankers/news/details/'.$item->id)}}">{{ $item->headline }}</a>
                                        </h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>{{ date('d-m-Y', strtotime($item->created_at))}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End grid-box -->
                </div>
                @endforeach
                <!-- End block content -->
            </div>


            <div class="col-sm-3">

                <!-- sidebar -->
                <div class="sidebar">
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
                                    <button class="btn btn-link py-0 my-0" data-toggle="collapse" data-target="#collapse_{{ $loop->index }}" aria-expanded="true" aria-controls="collapse_{{ $loop->index }}">
                                        >
                                    </button>
                                    {{ $year }}
                                </h6>
                            </div>

                            <div id="collapse_{{ $loop->index }}" class="collapse" aria-labelledby="heading_{{ $loop->index }}" data-parent="#accordion">
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

//modal start

<div class="modal fade" id="votermodal" tabindex="-1" role="dialog" aria-labelledby="votermodalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="votermodalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ URL::to('/check/auth/vote/form') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Registration Number</label>
                        <input type="text" name="user_reg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Enter your sipeaa registration
                            number.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">User sipeaa ID </label>
                        <input type="text" name="sipeaa_id" class="form-control" id="exampleInputPassword1">
                        <small id="emailHelp" class="form-text text-muted">Enter your sipeaa user ID.</small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Verify</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
//modal end

@endsection
