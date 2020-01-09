<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')
<!-- Your custom  HTML goes here -->
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card mdb-color lighten-2 text-center z-depth-2">
                <div class="card-body">
                    <p>Hello Rokon</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mdb-color lighten-2 text-center z-depth-2">
                <div class="card-body">
                    <p>Hello Rokon</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mdb-color lighten-2 text-center z-depth-2">
                <div class="card-body">
                    <p>Hello Rokon</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mdb-color lighten-2 text-center z-depth-2">
                <div class="card-body">
                    <p>Hello Rokon</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<table class='table table-striped table-bordered'>
    <thead>
        <tr>
            <th>Presidents Name</th>
            <th>Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($result as $row)
        <tr>
            <td>{{$row->cname}}</td>
            <td>{{$row->presidents}}</td>
            <td>
                <!-- To make sure we have read access, wee need to validate the privilege -->
                @if(CRUDBooster::isUpdate() && $button_edit)
                <a class='btn btn-success btn-sm' href='{{CRUDBooster::mainpath("edit/$row->id")}}'>Update</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $result->render() !!}

@endsection
