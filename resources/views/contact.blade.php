@extends('welcome')

@section('title', 'Contact Us')

@section('content')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

<div class="container">
<h1 class="text-center">Contact Address</h1>
<hr>
  <div class="row">
    <div class="col-sm-8">
      <iframe src="https://maps.google.com/maps?q=dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
     
    </div>
@php
    $setting = DB::table('settings')->first();
@endphp
    <div class="col-sm-4" id="contact2">
        <h3>Contact us fo more information </h3>
        <hr align="left" width="50%">
        <h4 class="pt-2">Office Location </h4>
        <i class="fas fa-globe" style="color:yellowgreen"></i> <a href="#">{{$setting->address }}   </a><br>
        <h4 class="pt-2">Phone Number </h4>
        <i class="fas fa-phone" style="color:yellowgreen"></i> <a href="tel:+"> {{$setting->phone }} </a><br>
        <i class="fab fa-whatsapp" style="color:yellowgreen"></i><a href="tel:+"> {{$setting->phone }} </a><br>
        <h4 class="pt-2">Email</h4>
        <i class="fa fa-envelope" style="color:yellowgreen"></i> <a href="#">{{$setting->email }}</a><br>
      </div>
  </div>
</div>

<style>

a {color: yellowgreen;}
h4 {color: yellowgreen;}
h3 {color: yellowgreen;}

a:link{text-decoration:none;}

#contact2{
    letter-spacing:3px;
}



#author a{
  color:yellowgreen;
  text-decoration: none;
    
}  

</style>
@endsection