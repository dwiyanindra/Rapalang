<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">L<b>W</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Lab<b> Waskitha</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs"><?= $userku['nama']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">


                  <p>
                    <?= $userku['nama']; ?>
                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url('assets/'); ?>img/profile/default.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?= $userku['nama']; ?></p>

          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="<?= ($active=='dashboard' ? 'active' : ''); ?>"><a href="<?= base_url('admin/') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
          <li class="<?= ($active=='artikel' ? 'active' : ''); ?>"><a href="<?= base_url('artikel/') ?>"><i class="fa fa-book"></i> <span>Artikel</span></a></li>
          <li class="<?= ($active=='album' ? 'active' : ''); ?>"><a href="<?= base_url('album/') ?>"><i class="fa fa-camera"></i> <span>Album</span></a></li>
          <li class="<?= ($active=='contactus' ? 'active' : ''); ?>"><a href="<?= base_url('contactus/') ?>"><i class="fa fa-phone"></i> <span>Contactus</span></a></li>
          <li class="<?= ($active=='dokter' ? 'active' : ''); ?>"><a href="<?= base_url('dokter/') ?>"><i class="fa fa-medkit"></i> <span>Dokter</span></a></li>
          <li class="<?= ($active=='visi' ? 'active' : ''); ?>"><a href="<?= base_url('visi/') ?>"><i class="fa fa-book"></i> <span>Visi & Misi</span></a></li>
          <li class="<?= ($active=='auth' ? 'active' : ''); ?>"><a href="<?= base_url('admin/index_') ?>"><i class="fa fa-dashboard"></i> <span>New Admin</span></a></li>
          <li class="<?= ($active=='client' ? 'active' : ''); ?>"><a href="<?= base_url('client/') ?>"><i class="fa fa-dashboard"></i> <span>New Client</span></a></li>
          <li class="<?= ($active=='uploadpdf' ? 'active' : ''); ?>"><a href="<?= base_url('uploadpdf/') ?>"><i class="fa fa-dashboard"></i> <span>Upload PDF</span></a></li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">