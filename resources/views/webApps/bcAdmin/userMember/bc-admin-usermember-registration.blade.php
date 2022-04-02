@extends('webApps.bcAdmin.bc-admin-dashboard')
@section('bc-admin-dashboard-title','User Member Registration | Dashboard')
@section('bc-admin-dashboard-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>User Member Registration</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sub Admin</li>
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
                <h3 class="card-title">Personal Detaits</h3>
              </div>
              <!-- {{pre($errors->all())}} -->
              <!-- /.card-header -->
              <div class="card-body">
              <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{ route('bc-user-member.store') }}"  id="product_form">
              {{csrf_field()}}
                  <div class="row">
                  <div class="offset-4 col-sm-4 text-center mb-15">
                    <label> &ensp; </label>
                    <img src="/webApps/images/no-image-icon.jpg" class="img-responsive cs-tech-profile" id="blah" style="max-height:200px; max-width:100%;" alt="No image" >
                    <input type="file" name="files" multiple  class="form-control" title="xyz"  onChange="readURL(this);" required accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG">
                  </div>
                  <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Name<sup>*</sup></label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter name">
                        {!! $errors->first('name', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Father/Husband Name<sup>*</sup></label>
                        <input type="text" class="form-control" name="father_name" value="{{old('father_name')}}" placeholder="Enter father/husband name">
                        {!! $errors->first('father_name', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>DOB<sup>*</sup></label>
                        <input type="date" class="form-control" name="dob" value="{{old('dob')}}">
                        {!! $errors->first('dob', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Address<sup>*</sup></label>
                        <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Enter address">
                        {!! $errors->first('address', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>District<sup>*</sup></label>
                        <input type="text" class="form-control" name="district" value="{{old('district')}}" placeholder="Enter district">
                        {!! $errors->first('district', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Contact<sup>*</sup></label>
                        <input type="text" class="form-control" name="contact" value="{{old('contact')}}" placeholder="Enter contact">
                        {!! $errors->first('contact', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Email<sup>*</sup></label>
                        <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter email">
                        {!! $errors->first('email', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Password<sup>*</sup></label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                        {!! $errors->first('password', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Qualification<sup>*</sup></label>
                        <input type="text" class="form-control" name="qualification" value="{{old('qualification')}}" placeholder="Enter qualification">
                        {!! $errors->first('qualification', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>State<sup>*</sup></label>
                        <input type="text" class="form-control" name="state" value="{{old('state')}}" placeholder="Enter state">
                        {!! $errors->first('state', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Pin Code<sup>*</sup></label>
                        <input type="text" class="form-control" name="pin_code" value="{{old('pin_code')}}" placeholder="Enter pin code">
                        {!! $errors->first('pin_code', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Amount <sup>*</sup></label>
                        <input type="number" class="form-control" name="amount" value="{{old('amount')}}" placeholder="Enter amount">
                        {!! $errors->first('amount', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                  </div>
                  <!-- <div class="offset-4 col-sm-4"> -->
                  <div class="card-footer">
                    <div class="offset-4 col-sm-4">
                  <button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
                  </div>
                  </div>
                  </div> 
                </form>
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