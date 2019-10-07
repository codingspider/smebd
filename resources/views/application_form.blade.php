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
           
 
                <form method="POST" action="{{ URL::to('loan/aplication/form/submit')}}" enctype="multipart/form-data">
                        @csrf
            <div class="col-md-6">
                    <div  class="form-group row">
                            <label style="color:white"  for="loan_type" class="col-md-4 col-form-label text-md-right">{{ __('What type of loan do you need?') }}</label>

                            <div class="col-md-6">
                                <div class="form-group" >
                                    <label for="type" class="editables" id="home_47" data-page-id="16" data-edit-field="home_47" data-edit-type="text">What type of loan do you need?</label>
                                    <select name="loan_type" id="type" class="form-control" required="">
                                        <option value="" selected="selected">Select an option</option>
                                        <option value="Home Loan">Home Loan</option>
                                        <option value="Car Loan">Car Loan</option>
                                        <option value="Personal Loan">Personal Loan</option>
                                        <option value="SME (Business) Loan">SME (Business) Loan</option>
                                        <option value="Purnota (Women Entrepreneur) Loan">Purnota (Women Entrepreneur) Loan</option>
                                        <option value="Shombhabona (Start-up business) Loan">Shombhabona (Start-up business) Loan
                                        </option>
                                        <option value="Udbhabon (IT-based start-up business) Loan">Udbhabon (IT-based start-up business)
                                            Loan
                                        </option>
                                        <option value="Lease Finance (Capital Machinery) ">Lease Finance (Capital Machinery)</option>
                                        <option value="Abashon (Commercial Housing) Loan">Abashon (Commercial Housing) Loan</option>
                                        <option value="Factoring (Supplier Finance)">Factoring (Supplier Finance)</option>
                                        <option value="Commercial Vehicle Finance">Commercial Vehicle Finance</option>
                                        <option value="Commercial Space Finance">Commercial Space Finance</option>
                                        <option value="others">Others</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
            </div> <!-- form-group// -->
    
            
        
            <div class="col-md-6">
                <div class="form-group row">
                        <label style="color:white" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Your Name (আপনার নাম)') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red">{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
        </div> <!-- form-group// -->

            <div class="col-md-6">
                <div class="form-group row">
                        <label style="color:white" for="address" class="col-md-4 col-form-label text-md-right">{{ __('Your Address (আপনার ঠিকানা)') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}">

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
                            <label style="color:white" for="business_name" class="col-md-4 col-form-label text-md-right">{{ __('Your Business Name (ব্যবসা প্রতিষ্ঠানের নাম)') }}</label>

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
                            <label style="color:white" for="business_address" class="col-md-4 col-form-label text-md-right">{{ __('Your Business Address (ব্যবসা প্রতিষ্ঠানের ঠিকানা)') }}</label>

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
                            <label style="color:white" for="type_of_business" class="col-md-4 col-form-label text-md-right">{{ __('Business Sector ( ব্যবসা প্রতিষ্ঠানের ধরণ)') }}</label>

                            <div class="col-md-6">
                                <input id="type_of_business" type="text" class="form-control{{ $errors->has('type_of_business') ? ' is-invalid' : '' }}" name="type_of_business" value="{{ old('type_of_business') }}">

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
                            <label style="color:white" for="business_experience" class="col-md-4 col-form-label text-md-right">{{ __('Business Experience (ব্যবসায়িক অভিজ্ঞতা)') }}</label>

                            <div class="col-md-6">
                                <input id="business_experience" type="text" class="form-control{{ $errors->has('business_experience') ? ' is-invalid' : '' }}" name="business_experience" value="{{ old('business_experience') }}">

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
                            <label style="color:white" for="monthly_sales" class="col-md-4 col-form-label text-md-right">{{ __('Monthly Sales (মাসিক বিক্রয়)') }}</label>

                            <div class="col-md-6">
                                <input id="monthly_sales" type="text" class="form-control{{ $errors->has('monthly_sales') ? ' is-invalid' : '' }}" name="monthly_sales" value="{{ old('monthly_sales') }}">

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
                            <label style="color:white" for="repayment_type" class="col-md-4 col-form-label text-md-right">{{ __('Repayment Type') }}</label>

                            <div class="col-md-6">
                                <input id="repayment_type" type="text" class="form-control{{ $errors->has('repayment_type') ? ' is-invalid' : '' }}" name="repayment_type" value="{{ old('repayment_type') }}">

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
                            <label style="color:white" for="price_of_sold_goods" class="col-md-4 col-form-label text-md-right">{{ __('Cost of Goods Sold (বিক্রয়কৃত মালামালের দাম)') }}</label>

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
                            <label style="color:white" for="other_expenses" class="col-md-4 col-form-label text-md-right">{{ __('Other Expenses (অন্যান্য খরচ)') }}</label>

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
                            <label style="color:white" for="net_profit" class="col-md-4 col-form-label text-md-right">{{ __('Net Profit (মোট লাভ)') }}</label>

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
                            <label style="color:white" for="trade_license_no" class="col-md-4 col-form-label text-md-right">{{ __('Trade License (ট্রেড লাইসেন্স)') }}</label>

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
                            <label style="color:white" for="national_id_no" class="col-md-4 col-form-label text-md-right">{{ __('National ID (জাতীয় পরিচয়পত্র নম্বর)') }}</label>

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
                            <label style="color:white" for="district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>

                            <div class="col-md-6">
                                <select name="district" class="form-control">
                                    <option value="select" selected="selected">Select One ---------</option>
                                    <option value="Bagerhat">Bagerhat</option>
                                    <option value="Bandarban">Bandarban</option>
                                    <option value="Barguna">Barguna</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="Bhola">Bhola</option>
                                    <option value="Bogra">Bogra</option>
                                    <option value="Brahmanbaria">Brahmanbaria</option>
                                    <option value="Chandpur">Chandpur</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Chuadanga">Chuadanga</option>
                                    <option value="Comilla">Comilla</option>
                                    <option value="Cox'sBazar">Cox'sBazar</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Dinajpur">Dinajpur</option>
                                    <option value="Faridpur">Faridpur</option>
                                    <option value="Feni">Feni</option>
                                    <option value="Gaibandha">Gaibandha</option>
                                    <option value="Gazipur">Gazipur</option>
                                    <option value="Gopalganj">Gopalganj</option>
                                    <option value="Habiganj">Habiganj</option>
                                    <option value="Jaipurhat">Jaipurhat</option>
                                    <option value="Jamalpur">Jamalpur</option>
                                    <option value="Jessore">Jessore</option>
                                    <option value="Jhalokati">Jhalokati</option>
                                    <option value="Jhenaidah">Jhenaidah</option>
                                    <option value="Khagrachari">Khagrachari</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Kishoreganj">Kishoreganj</option>
                                    <option value="Kurigram">Kurigram</option>
                                    <option value="Kushtia">Kushtia</option>
                                    <option value="Lakshmipur">Lakshmipur</option>
                                    <option value="Lalmonirhat">Lalmonirhat</option>
                                    <option value="Madaripur">Madaripur</option>
                                    <option value="Magura">Magura</option>
                                    <option value="Manikganj">Manikganj</option>
                                    <option value="Maulvibazar">Maulvibazar</option>
                                    <option value="Meherpur">Meherpur</option>
                                    <option value="Munshiganj">Munshiganj</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Naogaon">Naogaon</option>
                                    <option value="Narail">Narail</option>
                                    <option value="Narayanganj">Narayanganj</option>
                                    <option value="Narsingdi">Narsingdi</option>
                                    <option value="Natore">Natore</option>
                                    <option value="Nawabganj">Nawabganj</option>
                                    <option value="Netrokona">Netrokona</option>
                                    <option value="Nilphamari">Nilphamari</option>
                                    <option value="Noakhali">Noakhali</option>
                                    <option value="Pabna">Pabna</option>
                                    <option value="Panchagarh">Panchagarh</option>
                                    <option value="Patuakhali">Patuakhali</option>
                                    <option value="Pirojpur">Pirojpur</option>
                                    <option value="Rajbari">Rajbari</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Rangamati">Rangamati</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Satkhira">Satkhira</option>
                                    <option value="Shariatpur">Shariatpur</option>
                                    <option value="Sherpur">Sherpur</option>
                                    <option value="Sirajganj">Sirajganj</option>
                                    <option value="Sunamganj">Sunamganj</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Tangail">Tangail</option>
                                    <option value="Thakurgaon">Thakurgaon</option>
                                </select>
                            </div>
                        </div>
            </div> <!-- form-group// -->
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" for="loan_amount" class="col-md-4 col-form-label text-md-right">{{ __('Loan Amount') }}</label>

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
                            <label style="color:white" for="period_of_loan" class="col-md-4 col-form-label text-md-right">{{ __('Loan Period') }}</label>

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
            <div class="col-md-6">
                    <div class="form-group row">
                            <label style="color:white" class="col-md-4 col-form-label text-md-right">{{ __('Document Uploads') }}</label>

                            <div class="col-md-6">
                        <input  type="file" class="form-control" name="images[]"  multiple>
                               
                            </div>
                        </div>
            </div> <!-- form-group// -->
        <input  type="hidden" value="{{ Auth::id() }}" name="client_id">
        <input  type="hidden" value="{{ Auth::user()->email }}" name="client_email">
        <br>
       
      
            <br>
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
