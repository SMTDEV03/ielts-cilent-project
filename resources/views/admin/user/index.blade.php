@extends('layouts.dashboard')
@section('title','Account Settings')

@section('content')

<!-- Dashboard aside Start -->
<x-dashboard.admin_aside />
<!-- Dashboard aside End -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1 class="text-black">Pricing</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> Pages</li>
            <li><i class="fa fa-angle-right"></i>Account Settings</li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <x-dashboard.user_list />
    </div>
    <!-- Main content End -->

</div>

@endsection


@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('public/assets/back_assets/plugins/datatables/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('extra-js')
<!-- DataTable -->

<script src="{{ asset('public/assets/back_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/assets/back_assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>


<script type="text/javascript">
  $(function () {
    var table = $('#example1').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin_user_list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'fname',
                render: function(data, type, row) {
                    return row.fname+' '+row.lname;
                }
            },
            {data: 'email', name: 'email'},
            {data: 'plan_id', 
                render: function(data) { 
                if(data) {
                  return 'Supporter' 
                }
                else {
                  return 'No Plan'
                }
              }
            },
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>

@endsection




