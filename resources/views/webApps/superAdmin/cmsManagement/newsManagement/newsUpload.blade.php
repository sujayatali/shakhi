@extends('webApps.superAdmin.super-admin-dashboard')
@section('super-admin-dashboard-title','News | Dashboard')
@section('super-admin-dashboard-content')
  <!-- Content Wrapper. Contains page content -->
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>News Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">News Post</li>
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
                <h3 class="card-title">News Post</h3>
              </div>
             <!--  {{pre($errors->all())}} -->
              <!-- /.card-header -->
              <div class="card-body">
                <div class="container">
                    <section class="mt-5 ">
                      <form method="post" action="{{ route('news-manage.store') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                       <div class="bs-form-wrapper">  
                          <div class="input-group control-group input-wrapper">
                              <input type="text" name="title" class="form-control" placeholder="News Title ">
                              {!! $errors->first('title[0]', '<label class="error text-danger">:message</label>') !!} 
                              <input type="file" name="news_image" class="form-control" placeholder="Select Image">
                              
                          </div> 
                          <p>News Description</p>
                          <textarea class="form-control" rows="6" name="news_desc" ></textarea>
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