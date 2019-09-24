@extends('welcome')

@section ('title', 'Technology News ')

@section('content')

<div class="col-md-12">
        <h1>{{$technology_news->headline}}</h1>
<img src="{{ asset($technology_news->image_name)}}" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
        <article>

            {!! $technology_news->detail !!}
        
        </article>
   
    </div>

@endsection 