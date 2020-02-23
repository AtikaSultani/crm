<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>

    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container" >

    <form class="login-form" method="post"  action="{{ route('login') }}">
        @csrf
      <div class="login-wrap" >
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @if($errors->has('email'))
                                    <span class="help-block" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>
        <div class="input-group">
              <span class="input-group-addon"><i class="icon_key_alt"></i></span>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
      @enderror
      </div>
  <label class="checkbox">
      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
      Remember me
      <span class="pull-right"> <a href="{{ route('password.request') }}"> Forgot Password?</a></span>
  </label>
          <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
          <button style="color: #ffffff;" class="btn btn-info btn-lg btn-block" ><a href="register">Signup</a></button>

      </div>
  </form>
    <div class="text-right">
      <div class="credits">

        </div>
    </div>
  </div>


</body>

</html>
