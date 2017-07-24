@extends('layouts.app')

@section('content')
  <div class="register-box">
    <div class="register-logo">
      <a href="{{url('/')}}"><b>Chatbot </b>School</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Register a new membership</p>

      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {!! csrf_field() !!}

        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
          @if ($errors->has('name'))
            <label class="control-label" for="name"><i class="fa fa-times-circle-o"></i> Hubo un error...</label>
          @endif
          <input type="text" class="form-control" placeholder="Nombre de cuenta..." name="name" value="{{ old('name') }}">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          @if ($errors->has('name'))
            <span class="help-block">*{{ $errors->first('name') }}</span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('nombres') ? ' has-error' : '' }} has-feedback">
          @if ($errors->has('nombres'))
            <label class="control-label" for="nombres"><i class="fa fa-times-circle-o"></i> Hubo un error...</label>
          @endif
          <input type="text" class="form-control" placeholder="Nombre(s) de usuario..." name="nombres" value="{{ old('nombres') }}">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          @if ($errors->has('nombres'))
            <span class="help-block">*{{ $errors->first('nombres') }}</span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('apellidos') ? ' has-error' : '' }} has-feedback">
          @if ($errors->has('apellidos'))
            <label class="control-label" for="apellidos"><i class="fa fa-times-circle-o"></i> Hubo un error...</label>
          @endif
          <input type="text" class="form-control" placeholder="Apellidos(s) de usuario..." name="apellidos" value="{{ old('apellidos') }}">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          @if ($errors->has('apellidos'))
            <span class="help-block">*{{ $errors->first('apellidos') }}</span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
          @if ($errors->has('email'))
            <label class="control-label" for="email"><i class="fa fa-times-circle-o"></i> Input with
              error</label>
          @endif
          <input type="email" class="form-control" placeholder="Email..." name="email" value="{{ old('email') }}">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          @if ($errors->has('email'))
            <span class="help-block">*{{ $errors->first('email') }}</span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('telefono') ? ' has-error' : '' }} has-feedback">
          @if ($errors->has('telefono'))
            <label class="control-label" for="telefono"><i class="fa fa-times-circle-o"></i> Input with
              error</label>
          @endif
          <input type="number" class="form-control" placeholder="Telefono..." name="telefono" value="{{ old('telefono') }}">
          <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
          @if ($errors->has('telefono'))
            <span class="help-block">*{{ $errors->first('telefono') }}</span>
          @endif
        </div>

        <div class="form-group {{ $errors->has('celular') ? ' has-error' : '' }} has-feedback">
          @if ($errors->has('celular'))
            <label class="control-label" for="celular"><i class="fa fa-times-circle-o"></i> Input with
              error</label>
          @endif
          <input type="number" class="form-control" placeholder="Celular..." name="celular" value="{{ old('celular') }}">
          <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
          @if ($errors->has('celular'))
            <span class="help-block">*{{ $errors->first('celular') }}</span>
          @endif
        </div>

        <div class="form-group">
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" placeholder="Fecha de nacimiento..." id="datepicker" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
          </div>
        </div>

        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
          @if ($errors->has('password'))
            <label class="control-label" for="password"><i class="fa fa-times-circle-o"></i> Input with
              error</label>
          @endif
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @if ($errors->has('password'))
            <span class="help-block">*{{ $errors->first('password') }}</span>
          @endif
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-8 col-md-8">
            <div class="checkbox {{ $errors->has('acepto') ? ' has-error' : '' }} icheck">
              <label>
                <input type="checkbox" name="acepto"> I agree to the <a href="#">terms</a>
              </label>
              @if ($errors->has('acepto'))
                <span class="help-block">*{{ $errors->first('acepto') }}</span>
              @endif
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-8 col-md-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
          Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
          Google+</a>
      </div>

      <a href="{{url('/login')}}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div>
@endsection
