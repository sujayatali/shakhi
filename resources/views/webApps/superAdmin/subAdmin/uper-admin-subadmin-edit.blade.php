@extends('webApps.superAdmin.super-admin-dashboard')
@section('super-admin-dashboard-title','Super Admin Update | Dashboard')
@section('super-admin-dashboard-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Sub Admin Update</h3>
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
              <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('super-sub-admin-register.update',$users['id'])}}"  id="product_form">
              {{csrf_field()}}
              {{ method_field('put') }}
                  <div class="row">
                  <div class="offset-4 col-sm-4 text-center mb-15">
                    <label> &ensp; </label>
                    <img src="{{get_user_meta($users['id'],'profile_url')}}" class="img-responsive cs-tech-profile" id="blah" style="max-height:200px; max-width:100%;" alt="No image" >
                    <input type="file" name="files" multiple  class="form-control" title="xyz"  onChange="readURL(this);" required accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG">
                  </div>
                  <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Name<sup>*</sup></label>
                        <input type="text" class="form-control" name="name" value="{{$users['name']}}" placeholder="Enter name">
                        {!! $errors->first('name', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Father/Husband Name<sup>*</sup></label>
                        <input type="text" class="form-control" name="father_name" value="{{get_user_meta($users['id'],'father_name')}}" placeholder="Enter father/husband name">
                        {!! $errors->first('father_name', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>DOB<sup>*</sup></label>
                        <input type="date" class="form-control" name="dob" value="{{date('d/m/y', strtotime(get_user_meta($users['id'],'dob')))}}">
                        {!! $errors->first('dob', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Address<sup>*</sup></label>
                        <input type="text" class="form-control" name="address" value="{{get_user_meta($users['id'],'address')}}" placeholder="Enter address">
                        {!! $errors->first('address', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>District<sup>*</sup></label>
                        <input type="text" class="form-control" name="district" value="{{get_user_meta($users['id'],'district')}}" placeholder="Enter district">
                        {!! $errors->first('district', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Contact<sup>*</sup></label>
                        <input type="text" class="form-control" name="contact" value="{{get_user_meta($users['id'],'contact')}}" placeholder="Enter contact">
                        {!! $errors->first('contact', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Email<sup>*</sup></label>
                        <input type="text" class="form-control" name="email" value="{{$users['email']}}" placeholder="Enter email">
                        {!! $errors->first('email', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Password<sup>*</sup></label>
                        <input type="password" class="form-control" name="password" value="{{$users['password']}}" placeholder="Enter password">
                        {!! $errors->first('password', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Qualification<sup>*</sup></label>
                        <input type="text" class="form-control" name="qualification" value="{{get_user_meta($users['id'],'qualification')}}" placeholder="Enter qualification">
                        {!! $errors->first('qualification', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>State<sup>*</sup></label>
                        <input type="text" class="form-control" name="state" value="{{get_user_meta($users['id'],'state')}}" placeholder="Enter state">
                        {!! $errors->first('state', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Pin Code<sup>*</sup></label>
                        <input type="text" class="form-control" name="pin_code" value="{{get_user_meta($users['id'],'pin_code')}}" placeholder="Enter pin code">
                        {!! $errors->first('pin_code', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Amount <sup>*</sup></label>
                        <input type="number" class="form-control" name="amount" value="{{get_user_meta($users['id'],'amount')}}" placeholder="Enter amount">
                        {!! $errors->first('amount', '<label class="error text-danger">:message</label>') !!}
                      </div>
                    </div><!-- col-sm-4--->
                  </div>
                  {{ method_field('put') }}
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