@extends('layout.app')
@section('content')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="{{url('/login')}}" class="h3">Sign In</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Create Your Account <a href="{{url('/register')}}">Sign Up</a></p>
            <form action="dashboard.html" method="post">
                  <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                          </div>
                    </div>
                  </div>
                  <div class="row">
                    <!-- <div class="col-8">
                          <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                  Remember Me
                            </label>
                          </div>
                    </div> -->
                    <!-- /.col -->
                    <div class="col-4">

                          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                  </div>
            </form>
              <p class="mb-1 mt-3">
                  <a href="{{url('/forgot-password')}}">I forgot my password</a>
            </p>

            <a href="{{url('/dashboard')}}">Go to dashboard</a>

          </div>
          <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
