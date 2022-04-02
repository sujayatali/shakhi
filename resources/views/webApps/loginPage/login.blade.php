@extends('webApps.commanFile.loginHeaderEnqueue')
@section('login-title', 'Login | Shakhi.org')
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Login</b> Panel</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form class="login-form" id="loginForm" method="post">
            {{csrf_field()}}
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="username" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <input type="hidden" name="user_type" value="super_admin">
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="/forgot-password" class="btn btn-block btn-outline-primary">
            I forgot my password
        </a>
        <a href="http://shakhi.org/" class="btn btn-block btn-outline-danger">
            Go to Home page
        </a>
      </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@php
  if(session('message')){
    $toasterColor = 'error';
    $message = session('message');
    sweetToaster($toasterColor,$message);
  }
@endphp
</body>
@extends('webApps.commanFile.loginFooterEnqueue')