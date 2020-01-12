<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
  <!-- Your html goes here -->
  <div class='panel panel-default'>
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <div class='panel-heading'>Edit Form</div>
    <div class='panel-body'>
      <form method="POST" action="{{ URL::to('news/update')}}" enctype="multipart/form-data">
                        @csrf
            <div class="col-md-8">
                    <div  class="form-group row">
                            <label style="color:black"  for="loan_type" class="col-md-3 col-form-label text-md-right">{{ __('Head Line') }}</label>

                            <div class="col-md-8">
                                <input id="headline" type="text" class="form-control" name="headline" value="{{ $news->headline }}" >
                            </div>
                        </div>
            </div> <!-- form-group// -->
            @php
<<<<<<< HEAD
                $data = DB::table('menus')->where('is_catagory','1')->orderBy('title', 'asc')->get();
=======
                $data = DB::table('categories')->get();
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
            @endphp
            <div class="col-md-8">
                    <div  class="form-group row">
                            <label style="color:black"  for="loan_type" class="col-md-3 col-form-label text-md-right">{{ __('Category Name') }}</label>

                            <div class="col-md-8">
<<<<<<< HEAD
                                    
                                <select name="category_id" class="form-control" id="sel1">
                                        <option value="0" >Select One Category First </option>
                                    @foreach ($data as $item)
                                   @php
                                        $selected = $news->cat_id == $item->id ? 'selected' : '';
                                   @endphp
                                <option {{ $selected }} value="{{ $item->id }}">{{ $item->title }}</option>
=======
                                <select name="category_id" class="form-control" id="sel1">
                                        <option value="0">Select One Category First </option>
                                    @foreach ($data as $item)
                                   
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
                                    @endforeach
                                  </select>
                            </div>
                        </div>
            </div> <!-- form-group// -->

            <div class="col-md-8">
                    <div class="form-group row">
                            <label style="color:black" for="short_description" class="col-md-3 col-form-label text-md-right">{{ __('Short Description') }}</label>

                            <div class="col-md-8">
                            <textarea name="short_description" cols="60" rows="10">{{ $news->short_description }}</textarea>
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-12">
                    <div class="form-group row">
                            <label style="color:black" for="detail" class="col-md-3 col-form-label text-md-right">{{ __('Detail') }}</label>

                            <div class="col-md-12">
                                <textarea id="summernote" class="form-control summernote" name="detail">{{ $news->detail }}</textarea>
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
                            <label style="color:black" for="news_source" class="col-md-3 col-form-label text-md-right">{{ __('NEWS Source') }}</label>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <input id="news_source" type="text" class="form-control" name="news_source" value="{{ $news->news_source }} ">
                            </div>
                        </div>
            </div> <!-- form-group// -->
             <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:black" for="source_url" class="col-md-3 col-form-label text-md-right">{{ __('Source URL') }}</label>

                            <div class="col-md-6">
                                <input id="source_url" type="text" class="form-control" name="source_url" value="{{ $news->source_url }} ">
=======
                                <input id="email" type="text" class="form-control" name="news_source" value="{{ $news->news_source }} ">
                            </div>
                        </div>
            </div> <!-- form-group// -->
           
            
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:black" for="news_provider" class="col-md-3 col-form-label text-md-right">{{ __('News Provider') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="news_provider" value="{{ $news->news_provider }}">
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
                            </div>
                        </div>
            </div> <!-- form-group// -->
            
            <div class="col-md-6">
<<<<<<< HEAD
                    <div class="form-group row">
                            <label style="color:black" for="news_provider" class="col-md-3 col-form-label text-md-right">{{ __('News Provider') }}</label>

                            <div class="col-md-6">
                                <input id="news_provider" type="text" class="form-control" name="news_provider" value="{{ $news->news_provider }}">
                            </div>
                        </div>
            </div> <!-- form-group// -->
            
            <div class="col-md-6">
=======
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
                <div class="form-group row">
                        <label style="color:black" for="image_name" class="col-md-3 col-form-label text-md-right">{{ __('Image') }}</label>

                        <div class="col-md-6">
                            <input type="file" class="form-control" name="image_name">
                        </div>
                    </div>
        </div> <!-- form-group// -->
        <input  type="hidden" value="{{ Auth::id() }}" name="client_id">
        <input  type="hidden" value="{{ $news->id }}" name="id">
      
            
                <button type="submit" class="btn btn-primary pull-right">
                        {{ __('Update News Now') }}
                    </button>                                                       
        </form>
    </div>
    
  </div>
@endsection