@extends('welcome')

@section('content')
<h1 class="text-center" style="color:white">Registrer </h1>
<br>
<div class="container">

        
        <div class="card bg-light">
           
 
                <form method="POST" action="{{ route('register')}}">
                        @csrf
            <div class="col-md-6">
                    <div  class="form-group row">
                            <label style="color:white"  for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red" >{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->

            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="username" class="col-md-2 col-form-label text-md-right">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="address" class="col-md-2 col-form-label text-md-right">{{ __('Address ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="contactno" class="col-md-2 col-form-label text-md-right">{{ __('Contact No ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="contactno" class="form-control{{ $errors->has('contactno') ? ' is-invalid' : '' }}" name="contactno" value="{{ old('contactno') }}" required>

                                @if ($errors->has('contactno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('contactno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="secque" class="col-md-2 col-form-label text-md-right">{{ __('Security Question ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="secque" class="form-control{{ $errors->has('secque') ? ' is-invalid' : '' }}" name="secque" value="{{ old('secque') }}" required>

                                @if ($errors->has('secque'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('secque') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="secans" class="col-md-2 col-form-label text-md-right">{{ __('Security Question') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="secans" class="form-control{{ $errors->has('secans') ? ' is-invalid' : '' }}" name="secans" value="{{ old('secans') }}" required>

                                @if ($errors->has('secans'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('secans') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

            </div> <!-- form-group// -->
            
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
            </div> <!-- form-group// -->
      
            
                <button type="submit" class="btn btn-primary pull-right">
                        {{ __('Register') }}
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
