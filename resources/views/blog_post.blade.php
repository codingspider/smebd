@extends('welcome')
@section ('title', 'Blog News')
@section('content')

<!-- details card section starts from here -->
<section class="details-card">
        <div class="container">
            <div class="row">
             @foreach ($blogs as $item)
                 
                <div class="col-md-4">
                    <div class="card-content">
                        <div class="card-img">
                        <img src="{{ asset('uploads/'.$item->image_name)}}" alt="" height="300px">
                        <span style="color:azure"><h4>{{ $item->headline}}</h4></span>
                        </div>
                        <div class="card-desc">
                            <p>{{ $item->short_description}}</p>
                        <a href="{{ URL::to('sme/blog/news/details/'.$item->id)}}" class="btn-card">Read</a>   
                        </div>
                    </div>
                </div>
             @endforeach
                
            </div>
        </div>
    </section>

    <style>
    
    
    </style>
    <!-- details card section starts from here -->
@endsection
