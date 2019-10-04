@extends('welcome')
@section ('title', 'Aplication form')
@section('content')
<h1 class="text-center" style="color:white">Loan Aplication Form  </h1>
<br>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="container">

        
        <div class="card bg-light">
           
 
                <form method="POST" action="{{ URL::to('loan/aplication/form/submit')}}">
                        @csrf
            <div class="col-md-6">
                    <div  class="form-group row">
                            <label style="color:white"  for="loan_type" class="col-md-2 col-form-label text-md-right">{{ __('Loan Type') }}</label>

                            <div class="col-md-6">
                                <input id="loan_type" type="text" class="form-control{{ $errors->has('loan_type') ? ' is-invalid' : '' }}" name="loan_type" value="{{ old('loan_type') }}" autofocus>

                                @if ($errors->has('loan_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red" >{{ $errors->first('loan_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->

            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="business_name" class="col-md-2 col-form-label text-md-right">{{ __('Business Name') }}</label>

                            <div class="col-md-6">
                                <input id="business_name" type="text" class="form-control{{ $errors->has('business_name') ? ' is-invalid' : '' }}" name="business_name" value="{{ old('business_name') }}">

                                @if ($errors->has('business_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('business_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="business_address" class="col-md-2 col-form-label text-md-right">{{ __('Business Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('business_address') ? ' is-invalid' : '' }}" name="business_address" value="{{ old('business_address') }}">

                                @if ($errors->has('business_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('business_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="type_of_business" class="col-md-2 col-form-label text-md-right">{{ __('Business Type ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('type_of_business') ? ' is-invalid' : '' }}" name="type_of_business" value="{{ old('type_of_business') }}">

                                @if ($errors->has('type_of_business'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('type_of_business') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="business_experience" class="col-md-2 col-form-label text-md-right">{{ __('Business Experience') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('business_experience') ? ' is-invalid' : '' }}" name="business_experience" value="{{ old('business_experience') }}">

                                @if ($errors->has('business_experience'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('business_experience') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="monthly_sales" class="col-md-2 col-form-label text-md-right">{{ __('Monthy sales') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('monthly_sales') ? ' is-invalid' : '' }}" name="monthly_sales" value="{{ old('monthly_sales') }}">

                                @if ($errors->has('monthly_sales'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('monthly_sales') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="repayment_type" class="col-md-2 col-form-label text-md-right">{{ __('Repayment Type') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('repayment_type') ? ' is-invalid' : '' }}" name="repayment_type" value="{{ old('repayment_type') }}">

                                @if ($errors->has('repayment_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('repayment_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="price_of_sold_goods" class="col-md-2 col-form-label text-md-right">{{ __('Price goods') }}</label>

                            <div class="col-md-6">
                                <input id="price_of_sold_goods" type="price_of_sold_goods" class="form-control{{ $errors->has('price_of_sold_goods') ? ' is-invalid' : '' }}" name="price_of_sold_goods">

                                @if ($errors->has('price_of_sold_goods'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('price_of_sold_goods') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

            </div> <!-- form-group// -->
            
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="other_expenses" class="col-md-2 col-form-label text-md-right">{{ __('Other Experience') }}</label>

                            <div class="col-md-6">
                                <input id="other_expenses" type="text" class="form-control" name="other_expenses">
                                @if ($errors->has('other_expenses'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('other_expenses') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="net_profit" class="col-md-2 col-form-label text-md-right">{{ __('Net Profit') }}</label>

                            <div class="col-md-6">
                                <input id="net_profit" type="text" class="form-control" name="net_profit">
                                @if ($errors->has('net_profit'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('net_profit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="trade_license_no" class="col-md-2 col-form-label text-md-right">{{ __('Trade Licence') }}</label>

                            <div class="col-md-6">
                                <input id="trade_license_no" type="text" class="form-control" name="trade_license_no">
                                @if ($errors->has('trade_license_no'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('trade_license_no') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="national_id_no" class="col-md-2 col-form-label text-md-right">{{ __('National ID') }}</label>

                            <div class="col-md-6">
                                <input id="national_id_no" type="text" class="form-control" name="national_id_no">
                                @if ($errors->has('national_id_no'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('national_id_no') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="district" class="col-md-2 col-form-label text-md-right">{{ __('District') }}</label>

                            <div class="col-md-6">
                                <input id="district" type="text" class="form-control" name="district">
                                @if ($errors->has('district'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('district') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="loan_amount" class="col-md-2 col-form-label text-md-right">{{ __('Loan Amount') }}</label>

                            <div class="col-md-6">
                                <input id="loan_amount" type="text" class="form-control" name="loan_amount">
                                @if ($errors->has('loan_amount'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('loan_amount') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="period_of_loan" class="col-md-2 col-form-label text-md-right">{{ __('Loan Period') }}</label>

                            <div class="col-md-6">
                                <input id="period_of_loan" type="text" class="form-control" name="period_of_loan">
                                @if ($errors->has('period_of_loan'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('period_of_loan') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
            </div> <!-- form-group// -->
        <input  type="hidden" value="{{ Auth::id() }}" name="client_id">
      
            
                <button type="submit" class="btn btn-primary pull-right">
                        {{ __('Apply Now') }}
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
