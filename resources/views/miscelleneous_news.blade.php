@extends('welcome')

@section ('title', 'Miscelleneous News ')

@section('content')

<div class="col-md-12">
        <h1>{{$miscelleneous_news->headline}}</h1>
<img src="{{ asset($miscelleneous_news->image_name)}}" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
        <article>

            {!! $miscelleneous_news->detail !!}
        
        </article>
   
    </div>

@endsection 