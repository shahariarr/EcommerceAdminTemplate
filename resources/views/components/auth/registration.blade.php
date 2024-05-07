@extends('layout.app')
@section('content')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="{{url('/')}}" class="h3">Sign Up</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Create your account.</p>
            <form action="dashboard.html" method="post">

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Full Name">
                    <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-file-signature"></span>
                          </div>
                    </div>
                  </div>

                  <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                    </div>
                  </div>

                  <div class="input-group mb-3">
                    <input type="tel" class="form-control" placeholder="Phone No">
                    <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-phone-volume"></span>
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
                    <div class="col-4">
                          <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    </div>
                    <!-- /.col -->
                  </div>
            </form>
              <p class="mb-1 mt-3">
                  <a href="{{url('/login')}}">Sign In Now</a>
            </p>
          </div>
          <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
