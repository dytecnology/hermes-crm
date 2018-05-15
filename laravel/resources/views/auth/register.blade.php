<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />

    <title>Hermes - Registrarse</title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}" />
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}" />
	
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/master_style.css') }}" />

	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}" />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="hold-transition register-page">
<div class="register-box">

  <div class="register-box-body">
	  <div class="register-logo">
		<a href="#"><img src="{{ asset('logo.png') }}" class="img-fluid" alt=""></a>
	  </div>
    <p class="login-box-msg">Registrar un nuevo miembro</p>

    <form action="{{ route('register') }}" method="post" class="form-element" />
    {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
        <input type="text" class="form-control" placeholder="Nombre completo" name="name" id="name" value="{{ old('name') }}" required autofocus />
        <span class="ion ion-person form-control-feedback "></span>
        @if ($errors->has('name'))
        <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <input type="email" class="form-control" placeholder="Correo Electronico" name="email" id="email" value="{{ old('email') }}" required />
        <span class="ion ion-email form-control-feedback "></span>
        @if ($errors->has('email'))
        <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required />
        <span class="ion ion-locked form-control-feedback "></span>
        @if ($errors->has('password'))
        <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group has-feedback">
        <input id="password-confirm"  type="password" class="form-control" placeholder="Volver a escribir contraseña" name="password_confirmation" required />
        <span class="ion ion-log-in form-control-feedback "></span>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="checkbox">
            <input type="checkbox" id="basic_checkbox_1" />
			<label for="basic_checkbox_1">Acepto los <a href="#"><b>Terminos</b></a></label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block margin-top-10">Crear nueva cuenta</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

	<!-- /.social-auth-links -->
    
     <div class="margin-top-20 text-center">
    	<p>Ya tiene una cuenta?<a href="{{ route('login') }}" class="text-info m-l-5"> Inicie Sesion</a></p>
     </div>
    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->


	<!-- jQuery 3 -->
	<script src="{{ asset('assets/vendor_components/jquery/dist/jquery.min.js') }}"></script>
	
	<!-- popper -->
	<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	
	
</body>
</html>
