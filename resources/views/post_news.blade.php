@extends('welcome')
@section ('title', 'News form')
@section('content')
<h1 class="text-center" style="color:white"> NEWS SUBMIT </h1>
<br>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="container">

        
        <div class="card bg-light">
           
 
         <form method="POST" action="{{ URL::to('news/submit')}}" enctype="multipart/form-data">
                        @csrf
            <div class="col-md-8">
                    <div  class="form-group row">
                            <label style="color:white"  for="loan_type" class="col-md-3 col-form-label text-md-right">{{ __('Head Line') }}</label>

                            <div class="col-md-8">
                                <input id="headline" type="text" class="form-control{{ $errors->has('headline') ? ' is-invalid' : '' }}" name="headline" value="{{ old('headline') }}" autofocus>

                                @if ($errors->has('headline'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red" >{{ $errors->first('headline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            @php
                $data = DB::table('menus')->where('is_catagory','1')->orderBy('title', 'asc')->get();
            @endphp
            <div class="col-md-8">
                    <div  class="form-group row">
                            <label style="color:white"  for="loan_type" class="col-md-3 col-form-label text-md-right">{{ __('Category Name') }}</label>

                            <div class="col-md-8">
                                <select name="category_id" class="form-control" id="sel1">
                                    <option value="select">Select One Category First </option>
                                    @foreach ($data as $item)
                                   
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                    
                                   
                                  </select>
                            </div>
                        </div>
            </div> <!-- form-group// -->

            <div class="col-md-8">
                    <div class="form-group row">
                            <label style="color:white" for="short_description" class="col-md-3 col-form-label text-md-right">{{ __('Short Description') }}</label>

                            <div class="col-md-8">
                                <textarea name="short_description" id="short_description" cols="60" rows="10"></textarea>

                                @if ($errors->has('short_description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('short_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-12">
                    <div class="form-group row">
                            <label style="color:white" for="detail" class="col-md-3 col-form-label text-md-right">{{ __('Detail') }}</label>

                            <div class="col-md-12">
                                <textarea id="summernote" class="form-control summernote" name="detail"></textarea>
                                <script>
                                    $('#summernote').summernote({
                                      placeholder: 'NEWS Details',
                                      tabsize: 10,
                                      height: 300
                                    });
                                  </script>

                                @if ($errors->has('detail'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('detail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="news_source" class="col-md-3 col-form-label text-md-right">{{ __('NEWS Source') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('news_source') ? ' is-invalid' : '' }}" name="news_source" value="{{ old('news_source') }}">

                                @if ($errors->has('news_source'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('news_source') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
                       <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="source_url" class="col-md-3 col-form-label text-md-right">{{ __('Source URL') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('source_url') ? ' is-invalid' : '' }}" name="source_url" value="{{ old('source_url') }}">

                                @if ($errors->has('source_url'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('source_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="news_provider" class="col-md-3 col-form-label text-md-right">{{ __('News Provider') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('news_provider') ? ' is-invalid' : '' }}" name="news_provider" value="{{ old('news_provider') }}">

                                @if ($errors->has('news_provider'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('news_provider') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            
            <div class="col-md-6">
                <div class="form-group row">
                        <label style="color:white" for="image_name" class="col-md-3 col-form-label text-md-right">{{ __('Image') }}</label>

                        <div class="col-md-6">
                            <input type="file" class="form-control{{ $errors->has('image_name') ? ' is-invalid' : '' }}" name="image_name">

                            @if ($errors->has('image_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('image_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
        </div> <!-- form-group// -->
        <input  type="hidden" value="{{ Auth::id() }}" name="client_id">
      
            
                <button type="submit" class="btn btn-primary pull-right">
                        {{ __('Post Now') }}
                    </button>                                                       
        </form>
        </article>
        </div> <!-- card.// -->
        
        </div> 
        <!--container end.//-->
        


<style>
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}

.card-body{
    background-color:springgreen;
}
</style>
@endsection
