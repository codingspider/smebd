<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')
<head>
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    @if(session()->has('danger'))
    <div class="alert alert-danger">
        {{ session()->get('danger') }}
    </div>
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    @if(session()->has('warning'))
    <div class="alert alert-warning">
        {{ session()->get('warning') }}
    </div>
    @endif


    @if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
@endif

<div class="col-md-12">
   
    <table  class="table table-bordered data-table">
        <thead bgcolor="#00FF00">
            <tr >
                <th>No</th>
                <th>Business Name</th>
                <th>Business Address</th>
                <th>Loan Type </th>
                <th>Loan Amount </th>
                <th>Loan Status</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>
   
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('news/details/view') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'headline', name: 'headline'},
            {data: 'news_source', name: 'news_source'},
            {data: 'news_provider', name: 'news_provider'},
            {data: 'created_at', name: 'created_at'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
@endsection