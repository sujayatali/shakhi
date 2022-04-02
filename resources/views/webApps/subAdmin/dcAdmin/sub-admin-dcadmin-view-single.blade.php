@extends('webApps.subAdmin.sub-admin-dashboard')
@section('sub-admin-dashboard-title','DC Admin View Single | Dashboard')
@section('sub-admin-dashboard-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{get_user_meta($users['id'],'profile_url')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$users['name']}}</h3>

                <p class="text-muted text-center">Sub Admin</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>DC Admin</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>BC Admin</b> <a class="float-right">543</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Contact</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Personal info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Document</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Member Details</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <!-- About Me Box -->
                <div class="active tab-pane" id="activity">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Name</b> <a class="float-right text-dark">{{$users['name']}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Email Id</b> <a class="float-right text-dark">{{$users['email']}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Father Name</b> <a class="float-right text-dark">{{get_user_meta($users['id'],'father_name')}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>DOB</b> <a class="float-right text-dark">{{get_user_meta($users['id'],'dob')}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Phone No.</b> <a class="float-right text-dark">{{get_user_meta($users['id'],'contact')}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Qualification</b> <a class="float-right text-dark">{{get_user_meta($users['id'],'qualification')}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Address</b> <a class="float-right text-dark">{{get_user_meta($users['id'],'address')}}</a>
                    </li>  
                    <li class="list-group-item">
                      <b>District</b> <a class="float-right text-dark">{{get_user_meta($users['id'],'district')}}</a>
                    </li> 
                    <li class="list-group-item">
                      <b>State</b> <a class="float-right text-dark">{{get_user_meta($users['id'],'state')}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Pay Amount</b> <a class="float-right text-dark">{{get_user_meta($users['id'],'amount')}}</a>
                    </li>              
                   </ul>
                </div>

                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Aadhar Card</b> <a class="float-right text-dark"><img class="profile-user-img img-fluid img-circle"
                       src="{{get_user_meta($users['id'],'profile_url')}}"
                       alt="User profile picture"></a>
                    </li> 
                    <li class="list-group-item">
                      <b>Pan Card</b> <a class="float-right text-dark"><img class="profile-user-img img-fluid img-circle"
                       src="{{get_user_meta($users['id'],'profile_url')}}"
                       alt="User profile picture"></a>
                    </li> 
                    <li class="list-group-item">
                      <b>Voter Id</b> <a class="float-right text-dark"><img class="profile-user-img img-fluid img-circle"
                       src="{{get_user_meta($users['id'],'profile_url')}}"
                       alt="User profile picture"></a>
                    </li>           
                  </ul>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>DC Admin</b> <a class="float-right text-dark">1111</a>
                    </li>
                    <li class="list-group-item">
                      <b>BC Admin</b> <a class="float-right text-dark">5323</a>
                    </li>
                    <li class="list-group-item">
                      <b>SS Member</b> <a class="float-right text-dark">96859</a>
                    </li>
                    <li class="list-group-item">
                      <b>Users</b> <a class="float-right text-dark">5865</a>
                    </li>
                    <li class="list-group-item">
                      <b>Shop Keeper</b> <a class="float-right text-dark">5858</a>
                    </li>            
                  </ul>
                </div>
                <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection