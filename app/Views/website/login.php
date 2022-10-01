
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if ($merchant) { ?>
            <?=$settings->merchant_name?>
          <?php } else { ?>
            Upleads Affiliate Tracking Software
          <?php } ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.css">

  <link rel="icon" type="image/x-icon" href="<?=(!empty($settings) && $settings->merchant_logo_path) ? base_url().'/a/'.$settings->merchant_url_slug.'/logo/thumb' : base_url().'/dist/img/logo.png' ?>">
  <style>
  .img-login-logo {
    width: 32px;
    height: 32px;
  }
  .login-page,
  .register-page {
    background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)),url(<?=(!empty($settings) && $settings->merchant_bg_path) ? '/a/'.$settings->merchant_url_slug.'/bg' : '/dist/img/login-bg.jpg' ?>);
  }

  </style>
</head>
<body class="hold-transition login-page <?=(isset($settings->merchant_theme) && $settings->merchant_theme=='Dark') ? 'dark-mode' : ''?>">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary mb-3 mt-3">
    <div class="card-header text-center">
      <a href="<?php if ($merchant) { echo str_replace("login", "home", current_url()); } else { echo '/'; } ?>" class="h3">
        <?php if ($merchant) { ?>
          <img src="<?=(!empty($settings) && $settings->merchant_logo_path) ? base_url().'/a/'.$settings->merchant_url_slug.'/logo/thumb' : base_url().'/dist/img/logo.png' ?>" class="img-login-logo">

          <p class="mt-1"><?=$settings->merchant_name?></p>
        <?php } else { ?>
          <b>Up</b>leads
        <?php } ?>
      </a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post">
        <input type="hidden" name="action" value="login">
        <div class="input-group mb-3">
          <input required type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input required type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
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
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="<?=str_replace("login", "register", current_url())?>" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
</body>
</html>
