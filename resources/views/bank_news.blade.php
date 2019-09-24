@extends('welcome')

@section ('title', 'Bank News ')

@section('content')

<div class="col-md-12">
        <h1>{{$bank_news->headline}}</h1>
<img src="{{ asset($bank_news->image_name)}}" alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
        <article>

            {!! $bank_news->detail !!}
        
        </article>
   
    </div>

@endsection 