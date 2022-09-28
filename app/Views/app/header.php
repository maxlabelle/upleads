
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upleads Affiliate Tracking Software</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.css">

  <link rel="icon" type="image/x-icon" href="/dist/img/upleads.png">
</head>
<body class="hold-transition <?=(myConfig()['theme']=='Dark') ? 'dark-mode' : ''?> sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="/dist/img/upleads.png" alt="Upleads" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand <?=(myConfig()['theme']=='Dark') ? 'navbar-dark' : ''?>">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/help">
          <i class="fa-regular fa-circle-question"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/auth/logout">
          <i class="fa-solid fa-right-from-bracket"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar <?=(myConfig()['theme']=='Dark') ? 'sidebar-dark-primary' : ''?> elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/dist/img/upleads.png" alt="Upleads Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">Upleads</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
             <a href="/dashboard" class="nav-link <?=isActive('dashboard')?>">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                 Dashboard
               </p>
             </a>
           </li>

           <?php if (hasRole(roles(), "Merchant")) { ?>
          <li class="nav-header">Merchant</li>
          <li class="nav-item">
            <a href="/merchants/campaigns" class="nav-link  <?=isActive('campaigns')?>">
              <i class="nav-icon fa-solid fa-diagram-project"></i>
              <p>
                Campaigns
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/merchants/affiliates" class="nav-link  <?=isActive('affiliates')?>">
              <i class="nav-icon fa-solid fa-users-viewfinder"></i>
              <p>
                Affiliates
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/merchants/settings" class="nav-link  <?=isActive('settings')?>">
              <i class="nav-icon fa-solid fa-gear"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          <?php } ?>

          <?php if (hasRole(roles(), "Affiliate")) { ?>
          <li class="nav-header">Affiliate</li>
          <li class="nav-item">
            <a href="/affiliates/programs" class="nav-link">
              <i class="nav-icon fa-solid fa-coins"></i>
              <p>
                Coupons
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/affiliates/links" class="nav-link">
              <i class="nav-icon fa-solid fa-link"></i>
              <p>
                Links
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/wallet/balance" class="nav-link">
              <i class="nav-icon fa-solid fa-wallet"></i>
              <p>
                Wallet
              </p>
            </a>
          </li>
          <?php } ?>

          <li class="nav-header">Referrals</li>
          <li class="nav-item">
            <a href="/referrals/links" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Links
              </p>
            </a>
          </li>

          <?php if (hasRole(roles(), "Admin")) { ?>
          <li class="nav-header">Admin</li>
          <li class="nav-item">
            <a href="/admin/users" class="nav-link <?=isActive('users')?>">
              <i class="nav-icon fa-solid fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/help" class="nav-link">
              <i class="nav-icon fa-regular fa-circle-question"></i>
              <p>
                Help
              </p>
            </a>
          </li>
          <?php } ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
