<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upleads Affiliate Tracking Software</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.css">

  <link rel="icon" type="image/x-icon" href="/dist/img/upleads.png">

</head>
<body class="hold-transition  dark-mode layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
    <div class="container">
      <a href="/index3.html" class="navbar-brand">
        <img src="/dist/img/upleads.png" alt="Upleads Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">Upleads</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link <?=isActive('home')?>">Home</a>
          </li>
          <li class="nav-item">
            <a href="/home/pricing" class="nav-link  <?=isActive('pricing')?>">Pricing</a>
          </li>
          <li class="nav-item">
            <a href="https://upleads.readme.io/reference/getting-started-with-your-api" class="nav-link">Documentation</a>
          </li>

        </ul>


      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

        <li class="nav-item mr-3">
          <a href="/auth/register" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Register</a>
        </li>

        <li class="nav-item ">
          <a href="/auth/login" class="btn btn-success"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
        </li>

      </ul>
    </div>
  </nav>
  <!-- /.navbar -->
