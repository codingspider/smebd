<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
  <!-- Your html goes here -->
  <div class='panel panel-default'>
    <div class='panel-heading'>Edit Form</div>
    <div class='panel-body'>
      <form method='post' action='{{CRUDBooster::mainpath('edit-save/'.$row->id)}}'>
        @csrf
        <div class="col-md-8">
                <div  class="form-group row">
                        <label style="color:black"  for="loan_type" class="col-md-3 col-form-label text-md-right">{{ __('Head Line') }}</label>

                        <div class="col-md-8">
                        <input id="headline" type="text" class="form-control{{ $errors->has('headline') ? ' is-invalid' : '' }}" name="headline" value="{{$row->headline}}">

                            @if ($errors->has('headline'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red" >{{ $errors->first('headline') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
        </div> <!-- form-group// -->
        @php
            $data = DB::table('categories')->get();
        @endphp
        <div class="col-md-8">
                <div  class="form-group row">
                        <label style="color:black"  for="loan_type" class="col-md-3 col-form-label text-md-right">{{ __('Category Name') }}</label>

                        <div class="col-md-8">
                            <select name="category_id" class="form-control" id="sel1">
                                    <option value="select">Select One Category First </option>
                                @foreach ($data as $item)
                               
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                                
                               
                              </select>
                        </div>
                    </div>
        </div> <!-- form-group// -->

        <div class="col-md-8">
                <div class="form-group row">
                        <label style="color:black" for="short_description" class="col-md-3 col-form-label text-md-right">{{ __('Short Description') }}</label>

                        <div class="col-md-8">
                            <textarea name="short_description" id="short_description" cols="60" rows="10">{{$row->short_description}}</textarea>

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
                        <label style="color:black" for="detail" class="col-md-3 col-form-label text-md-right">{{ __('Detail') }}</label>

                        <div class="col-md-12">
                        <textarea id="summernote" class="form-control summernote" name="detail">{{ $row->detail}}</textarea>
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
                            <input id="email" type="text" class="form-control{{ $errors->has('news_source') ? ' is-invalid' : '' }}" name="news_source" value="{{ $row->news_source}}">

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
                        <label style="color:black" for="news_provider" class="col-md-3 col-form-label text-md-right">{{ __('News Provider') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control{{ $errors->has('news_provider') ? ' is-invalid' : '' }}" name="news_provider" value="{{ $row->news_provider }}">

                            @if ($errors->has('news_provider'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('news_provider') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
        </div> <!-- form-group// -->
        
        
    </div> <!-- form-group// -->
    <input  type="hidden" value="{{ Auth::id() }}" name="client_id">
  
        
            <button type="submit" class="btn btn-primary pull-right">
                    {{ __('Update Now') }}
                </button>       
        
      </form>
    </div>
    
  </div>
@endsection