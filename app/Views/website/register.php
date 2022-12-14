
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
<body class="hold-transition register-page <?=(isset($settings->merchant_theme) && $settings->merchant_theme=='Dark') ? 'dark-mode' : ''?>">
<div class="register-box">
  <div class="card card-outline card-primary mb-3 mt-3">
    <div class="card-header text-center">
      <a href="<?php if ($merchant) { echo str_replace("register", "home", current_url()); } else { echo '/'; } ?>" class="h3">
        <?php if ($merchant) { ?>
          <img src="<?=(!empty($settings) && $settings->merchant_logo_path) ? base_url().'/a/'.$settings->merchant_url_slug.'/logo/thumb' : base_url().'/dist/img/logo.png' ?>" class="img-login-logo">

          <p class="mt-1"><?=$settings->merchant_name?></p>
        <?php } else { ?>
          <b>Up</b>leads
        <?php } ?>
      </a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="post">
        <input type="hidden" name="action" value="register">
        <div class="input-group mb-3">
          <input required type="text" class="form-control" placeholder="Full name" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input required type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input required type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input required type="password" class="form-control" placeholder="Retype password" name="passwordconf">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a href="<?=str_replace("register", "terms", current_url())?>">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="<?=str_replace("register", "login", current_url())?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
</body>
</html>
