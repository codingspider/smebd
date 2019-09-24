@extends('welcome')

@section ('title', 'Fashion News ')

@section('content')

<div class="col-md-12">
        <h1>{{$fashion_news_admins->headline}}</h1>
<img src="{{ asset($fashion_news_admins->image_name)}}" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
        <article>

            {!! $fashion_news_admins->detail !!}
        
        </article>
   
    </div>

@endsection 