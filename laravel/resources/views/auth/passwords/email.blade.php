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

    <title>Hermes - Recuperar Contraseña </title>
  
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><img src="{{ asset('logo.png') }}" class="img-fluid" alt=""></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body pb-20">
    <p class="login-box-msg text-uppercase">Recuperar Contraseña</p>

    <form action="{{ route('password.request') }}" method="post" class="form-element" />
    {{ csrf_field() }}
    
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Correo Electronico" name="email" value="{{ old('email') }}" required />
        <span class="ion ion-email form-control-feedback"></span>
        @if ($errors->has('email'))
        <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>      
      <div class="row">
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block text-uppercase">Resetear</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<script src="{{ asset('assets/vendor_components/jquery/dist/jquery.min.js') }}"></script>
	
<!-- popper -->
<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>

<!-- Bootstrap 4.0-->
<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>


</body>
</html>
