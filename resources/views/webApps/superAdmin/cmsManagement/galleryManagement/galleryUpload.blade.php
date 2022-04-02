@extends('webApps.superAdmin.super-admin-dashboard')
@section('super-admin-dashboard-title','Sub Admin Registration | Dashboard')
@section('super-admin-dashboard-content')
  <!-- Content Wrapper. Contains page content -->
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- right column -->
          <div class="col-md-12">

            <!-- general form elements disabled -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Gallery Post</h3>
              </div>
             <!--  {{pre($errors->all())}} -->
              <!-- /.card-header -->
              <div class="card-body">
                <div class="container">
                    <section class="mt-5 text-center">
                      <form method="post" action="{{ route('gallery-manage.store') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                       <div class="bs-form-wrapper">  
                          <div class="input-group control-group input-wrapper">
                              <input type="text" name="title" class="form-control" placeholder="Image Title Name">
                              {!! $errors->first('title[0]', '<label class="error text-danger">:message</label>') !!} 
                              <input type="file" name="gallery_img" class="form-control" placeholder="Select Image">
                              <!-- <div class="input-group-btn">   
                                  <button class="btn btn-success bs-add-button" type="button"><i class="fa fa-plus"></i> &ensp; Add &ensp;</button>  
                              </div>  -->
                          </div> 
                        </div>
                        <!-- <div class="offset-4 col-sm-4"> -->
                          <br>
                        <div class="card-footer">
                          <div class="offset-4 col-sm-4">
                        <button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
                        </div>
                        </div>
                      </form>
                      
                    </section>
                  </div>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @php
      if(session('message-register')){
        $toasterColor = 'success';
        $message = session('message-register');
        sweetToaster($toasterColor,$message);
      }
    @endphp
@endsection