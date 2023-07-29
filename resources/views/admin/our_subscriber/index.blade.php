@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Our Subscriber
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/our-subscriber')}}"><i class="fa fa-users"></i> Our Subscriber</a></li>
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
              <h3 class="box-title">Our Subscriber</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="our-subscriber" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Email</th>
                    <th>Subscribe Date</th>
                  </tr>
                </thead>
                <tbody>
                @if(count($our_subscriber_arr)>0)  
                  @foreach($our_subscriber_arr as $sey=>$sval)
                  <tr>
                    <td>{{$sey+1}}.</td>
                    <td>{{ $sval->email }}</td>
                    <td>{{ date("d-M-Y",strtotime($sval->created_at)) }}</td>
                  </tr>
                  @endforeach  
                @endif 
                </tbody>
              <tfoot>
              <tr>
                <th style="width: 10px">#</th>
                <th>Email</th>
                <th>Subscribe Date</th>
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
    $('#our-subscriber').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    });
  });
</script>

  @endsection