<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$config['name']?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.css">

<link rel="icon" type="image/x-icon" href="<?=(!empty($settings) && $settings->merchant_logo_path) ? base_url().'/a/'.$settings->merchant_url_slug.'/logo/thumb' : base_url().'/dist/img/upleads.png' ?>">

</head>
<body class="hold-transition layout-top-nav <?=(isset($config['theme']) && $config['theme']=='Dark') ? 'dark-mode' : ''?>">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md <?=(isset($config['theme']) && $config['theme']=='Dark') ? 'navbar-dark' : 'navbar-light'?>">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="<?=(!empty($settings) && $settings->merchant_logo_path) ? base_url().'/a/'.$settings->merchant_url_slug.'/logo/thumb' : base_url().'/dist/img/default-150x150.png' ?>" alt="Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light"><?=$config['name']?></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">


      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

        <li class="nav-item mr-3">
          <a href="<?=str_replace("home", "register", current_url())?>" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Register</a>
        </li>

        <li class="nav-item ">
          <a href="<?=str_replace("home", "login", current_url())?>" class="btn btn-success"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
        </li>

      </ul>
    </div>
  </nav>
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">

            <div class="card mt-4">
              <div class="card-body">
                <?=(!empty($settings) && $settings->merchant_home) ? $settings->merchant_home : ':)'?>
              </div>
            </div>

          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        <b><?=$config['name']?></b>
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; <?=date("Y")?> <a href="https://upleads.online">upleads.online</a>.</strong>
      All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/dist/js/demo.js"></script>
  </body>
  </html>
