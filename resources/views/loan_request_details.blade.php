@extends('crudbooster::admin_template')
@section('content')


<div class="col-md-10">
    <h1>Applicant Information </h1>
    <table class="table table-hover">
        <thead>
          <tr>
            
            <th scope="col">Name </th>
            <th scope="col">Email </th>
            <th scope="col">User Name </th>
            <th scope="col">Contact Number </th>
            <th scope="col">Address </th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
          <td>{{ $data->name}}</td>
          <td>{{ $data->email}}</td>
          <td>{{ $data->username}}</td>
          <td>{{ $data->contactno}}</td>
          <td>{{ $data->address}}</td>
         
          </tr>
     
        </tbody>
      </table>

</div>
<br>
<br>
<div class="col-md-12">
    <h1>Business Information </h1>
    <table class="table table-hover">
        <thead>
          <tr>
            
            <th scope="col">Loan Type </th>
            <th scope="col">Business Name </th>
            <th scope="col">Business Address</th>
            <th scope="col">Business Type</th>
            <th scope="col">Monthly Sales </th>
            <th scope="col">Repayment Type</th>
            <th scope="col">Trade License No. </th>
            <th scope="col">NID No. </th>
            <th scope="col">District</th>
            <th scope="col">Loan Amount</th>
            <th scope="col">Loan Period</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
          <td>{{ $data->loan_type}}</td>
          <td>{{ $data->business_name}}</td>
          <td>{{ $data->business_address}}</td>
          <td>{{ $data->type_of_business}}</td>
          <td>{{ $data->monthly_sales}}</td>
          <td>{{ $data->repayment_type}}</td>
          <td>{{ $data->trade_license_no}}</td>
          <td>{{ $data->national_id_no}}</td>
          <td>{{ $data->district}}</td>
          <td>{{ $data->loan_amount}}</td>
          <td>{{ $data->period_of_loan}}</td>
         
          </tr>
     
        </tbody>
      </table>

</div>

@endsection