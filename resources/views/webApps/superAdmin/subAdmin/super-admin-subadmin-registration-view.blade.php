@extends('webApps.superAdmin.super-admin-dashboard')
@section('super-admin-dashboard-title','Super Admin View | Dashboard')
@section('super-admin-dashboard-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DC Admin Registration View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DC Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registration Deatils..</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr No.</th>
                    <th> Name</th>
                    <th> Father's</th>
                    <th> Email</th>
                    <th> Mobile</th>
                    <th> Status</th>
                    <th colspan='3'> Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>{{$user->user_id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{get_user_meta($user->user_id,'father_name')}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{get_user_meta($user->user_id,'contact')}}</td>
                          <td><a href="#!" class="btn btn-primary btn-xs">Active</a></td>
                          <td><a href="/super-sub-admin-register/{{$user->user_id}}" target="_blank" title="View Profile"> <i class="fa fa-eye"></i></a></td>
                          <td><a href="{{url('/super-sub-admin-register/'.$user->user_id.'/edit')}}" target="_blank" title="Edit Profile"> <i class="fa fa-edit"></i></a></td>
                          <td>
                            <form action="{{ route('super-sub-admin-register.destroy', $user->user_id) }}" method="POST">
                              {{ method_field('DELETE') }}
                              {{ csrf_field() }}
                              <button><i class="fa fa-trash"></i></button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  <tfoot>
                 <tr>
                    <th>Sr No.</th>
                    <th> Name</th>
                    <th> Father's</th>
                    <th> Email</th>
                    <th> Mobile</th>
                    <th> Status</th>
                    <th colspan='3'> Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
