@extends('welcome')
@section('title', 'Post By User')
@section('content')
<div class="grid-box">
                        
<div class="row">
  
    @foreach ($data as $item)                      

    <div class="col-md-4" style="height: 250px; " >
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
@endsection 