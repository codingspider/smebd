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
                    <p style="color: orange">{{ $president1->pone }} -total votes {{DB::table('votes')->where('presidents',72)->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mdb-color lighten-2 text-center z-depth-2">
                <div class="card-body">
                    <p style="color: blue">{{ $president2->pone }} -total votes {{DB::table('votes')->where('presidents',73)->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mdb-color lighten-2 text-center z-depth-2">
                <div class="card-body">
                    <p style="color: blue">{{ $president3->pone }} -total votes {{DB::table('votes')->where('presidents',74)->count() }}</p>
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
            <th>Voter ID</th>
            <th class="text-center">Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr>
            <td style="color: red">{{$row->cname}}</td>
            <td>{{$row->voter_id}}</td>
            <form action="{{ URL::to('vote/update/') }}" method="POST">
                {{csrf_field() }}
                <td class="text-center"><input name="presidents" type="text" value="{{$row->presidents}}"></td>
                <td>
                    <button type="submit" class='btn btn-success btn-sm'>Update</button>
                </td>
                <input type="hidden" name="id" value="{{ $row->id }}">
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $data->render() !!}

<hr>
<hr>

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card mdb-color lighten-2 text-center z-depth-2">
                <div class="card-body">
                    <p style="color: orange">{{ $vaicepresident1->vname }} -total votes {{DB::table('votes')->where('vicepresidents',80)->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mdb-color lighten-2 text-center z-depth-2">
                <div class="card-body">
                    <p style="color: blue">{{ $vaicepresident2->vname }} -total votes {{DB::table('votes')->where('vicepresidents',73)->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mdb-color lighten-2 text-center z-depth-2">
                <div class="card-body">
                    <p style="color: blue">{{ $vaicepresident3->vname }} -total votes {{DB::table('votes')->where('vicepresidents',74)->count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<table class='table table-striped table-bordered'>
    <thead>
        <tr>
            <th>Vice Presidents Name</th>
            <th>Voter ID</th>
            <th class="text-center">Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vicepresident as $row)
        <tr>
            <td style="color: red">{{ $row->vname }}</td>
            <td>{{$row->voter_id}}</td>
            <form action="{{ URL::to('vote/update/') }}" method="POST">
                {{csrf_field() }}
                <td class="text-center"><input name="vicepresident" type="text" value="{{$row->vicepresidents}}"></td>
                <td>
                    <button type="submit" class='btn btn-success btn-sm'>Update</button>
                </td>
                <input type="hidden" name="id" value="{{ $row->id }}">
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $data->render() !!}

@endsection
