@extends('welcome')

@section ('title', 'Blog News ')

@section('content')

<div class="col-md-12">
        <h1>{{$blog_news->headline}}</h1>
<img src="{{ asset($blog_news->image_name)}}" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
        <article>

            {!! $blog_news->detail !!}
        
        </article>
   
    </div>

@endsection 