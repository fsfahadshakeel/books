@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Contact Queries
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/contact-queries')}}"><i class="fa fa-envelope"></i> Contact Queries</a></li>
        <li class="active">Listing</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    @if(Session::has('msg')) 
        <div class="alert alert-{{ Session::get('color') }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon {{ Session::get('icon') }}"></i> {{ Session::get('msg') }}</h4>
        </div>
    @endif
    <div class="row">
    <div class="col-md-12">
      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Contact Queries</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="contact-queries" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @if(count($contact_queries_arr)>0)  
                  @foreach($contact_queries_arr as $cey=>$nval)
                  <tr>
                    <td>{{$cey+1}}.</td>
                    <td>{{ $nval->name }}</td>
                    <td>{{ $nval->email }}</td>
                    <td>{{ $nval->phone }}</td>
                    <td>{{ $nval->subject }}</td>
                    <!--<td><span title="{{ $nval->message }}">{{ str_limit($nval->message,50) }}</span></td>-->
                    <td>{{ $nval->message }}</td>
                    <td><a href="{{url('/delete-contact-queries/'.$nval->cid)}}" class="btn btn-danger delete"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  @endforeach  
                @endif 
                </tbody>
              <tfoot>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
              </tr>
              </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div> 
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- DataTables -->
<script src="{{asset('admin_assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

  <!-- page script -->
<script>
  $(function () {
    $('#contact-queries').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
      
    })
  })
</script>

  @endsection