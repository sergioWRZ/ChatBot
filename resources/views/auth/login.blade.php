@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading" align="center">
          <h3><b>Chatbot </b>School</h3>
        </div>
        <div class="panel-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            <div class="form-group has-feedback">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Nombre..." name="name">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
            </div>

            <div class="form-group has-feedback">
              <div class="col-md-12">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox"> Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
              Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
              Google+</a>
          </div>
          <!-- /.social-auth-links -->

          <a href="#">I forgot my password</a><br>
          <a href="{{url('/register')}}" class="text-center">Register a new membership</a>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
