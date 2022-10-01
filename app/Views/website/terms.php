
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if ($merchant) { ?>
            <?=$config['name']?>
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

  <link rel="icon" type="image/x-icon" href="<?=(!empty($settings) && $settings->merchant_logo_path) ? base_url().'/a/'.$settings->merchant_url_slug.'/logo/thumb' : base_url().'/dist/img/upleads.png' ?>">
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
<body class="hold-transition register-page <?=(isset($config['theme']) && $config['theme']=='Dark') ? 'dark-mode' : ''?>">
<div class="register-box">
  <div class="card card-outline card-primary mb-3 mt-3">
    <div class="card-header text-center">
      <a href="<?php if ($merchant) { echo str_replace("terms", "home", current_url()); } else { echo '/'; } ?>" class="h3">
        <?php if ($merchant) { ?>
          <img src="<?=(!empty($settings) && $settings->merchant_logo_path) ? base_url().'/a/'.$settings->merchant_url_slug.'/logo/thumb' : base_url().'/dist/img/default-150x150.png' ?>" class="img-login-logo">

          <p class="mt-1"><?=$config['name']?></p>
        <?php } else { ?>
          <b>Up</b>leads
        <?php } ?>
      </a>
    </div>
    <div class="card-body">
      <i class="login-box-msg">Terms</i>
      <hr/>
        <?=(!empty($settings) && $settings->merchant_terms) ? $settings->merchant_terms : ':)'?>
      <hr/>
      <a href="<?=str_replace("terms", "register", current_url())?>" class="text-center">Register</a>
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
