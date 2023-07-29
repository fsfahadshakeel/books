@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Add News & Notice
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/backend')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/backend-news-notice')}}"><i class="fa fa-newspaper-o"></i> News & Notice</a></li>
        <li class="active">Add</li>
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
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('/save-news-notice') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
              <div class="box-body">
                <div class="col-md-6">              
                    <div class="form-group">
                        <label>Title </label>
                        <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ old('title') }}">
                        {!! $errors->first('title', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="col-md-6">              
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" class="form-control">
                        <option value="">Select</option>
                        <option value="NE" {{ old('category')=='NE'?"selected":""}}>News</option>
                        <option value="NO" {{ old('category')=='NO'?"selected":""}}>Notice</option>
                        </select>
                        {!! $errors->first('category', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Image</label>
                        <input type="file" name="news_image" class="form-control">
                        {!! $errors->first('news_image', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Publish Date</label>
                            <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name="publish_date" value="{{ date('m/d/Y')}}">
                        </div>
                        {!! $errors->first('publish_date', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="col-md-12">              
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" placeholder="Enter description" rows="7">{{ old('description') }}</textarea>
                        {!! $errors->first('description', '<p class="text-danger">:message</p>') !!}
                     </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                        <option value="">Select</option>
                        <option value="Y" {{ old('status')=='Y'?"selected":""}}>Active</option>
                        <option value="N" {{ old('status')=='N'?"selected":""}}>Not Active</option>
                        </select>
                        {!! $errors->first('status', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <a href="{{url('/backend-news-notice')}}" class="btn btn-warning"><i class="fa fa-backward"></i> Back to Listing</a> <a href="{{url('/add-news-notice')}}" class="btn btn-info"><i class="fa fa-refresh"></i> Reset</a> <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection