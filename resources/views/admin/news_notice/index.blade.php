@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      News & Notice
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/backend-news-notice')}}"><i class="fa fa-newspaper-o"></i> News & Notice</a></li>
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
              <h3 class="box-title">News & Notice</h3>
              <div class="box-tools pull-right">
                <a href="{{url('/add-news-notice')}}" ><button type="button" class="btn btn-block btn-primary"><i class="fa fa-plus"></i> </button></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="news-notice" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Publish Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @if(count($news_notice_arr)>0)  
                  @foreach($news_notice_arr as $key=>$nval)
                  <tr>
                    <td>{{$key+1}}.</td>
                    <td>{{str_limit($nval->title, 30)}}</td>
                    <td>@if($nval->category=='NE'){{'News'}} @else {{'Notice'}} @endif</td>
                    <td>{{str_limit($nval->description, 50)}}</td>
                    <td>{{date("d M, Y",strtotime($nval->publish_date))}}</td>
                    <td>@if($nval->status=='Y'){{'Active'}} @else {{'Not Active'}} @endif</td>
                    <td><a href="{{url('/edit-news-notice/'.$nval->title_slug)}}" class="btn btn-warning"><i class="fa fa-edit"></i> </a> <a href="{{url('/delete-news-notice/'.$nval->nid)}}" class="btn btn-danger delete"><i class="fa fa-trash"></i> </a></td>
                  </tr>
                  @endforeach  
                @endif 
                </tbody>
              <tfoot>
              <tr>
                <th style="width: 10px">#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>
                <th>Publish Date</th>
                <th>Status</th>
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
    $('#news-notice').DataTable({
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