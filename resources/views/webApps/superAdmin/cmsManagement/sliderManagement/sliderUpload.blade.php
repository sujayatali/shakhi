@extends('webApps.superAdmin.super-admin-dashboard')
@section('super-admin-dashboard-title','Sub Admin Registration | Dashboard')
@section('super-admin-dashboard-content')
  <!-- Content Wrapper. Contains page content -->
  <script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider  Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider Post</li>
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
                <h3 class="card-title">Slider Post</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="container">
                  <form action="{{route('slider-manage.update',$posts['id'])}}" id="edit-sub-admin" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                   {{ method_field('put') }}
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Slider Title<sup>*</sup></label>
                            <input type="text" class="form-control" name="title" value="{{$posts['title']}}" >
                            {!! $errors->first('title', '<span class="error text-danger">:message</span>') !!} 
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Slider Image Note:* <span class="text-danger">  Image size: 1350px X 530px</span></label>
                            <img src="{{ get_post_meta($posts['id'],'slider_url')}}"  class="img-thumbnail img-fluid" id="blah" style="max-height:200px; max-width:100%;">
                             <input type="file" name="slider_img" class="form-control" onchange="readURL(this);" required="" title="xyz" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG">
                            {!! $errors->first('slider_img', '<span class="error text-danger">:message</span>') !!} 
                            
                          </div>
                        </div>
                        </div>
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