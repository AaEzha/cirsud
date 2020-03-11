<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>RSUD Sidoarjo Management Service App</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url('aset');?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
<!-- <<<<<<< HEAD:application/modules/adminpusat/views/dashboard/onboard.php -->
  <link rel="stylesheet" href="<?=base_url('aset');?>/dist/css/adminlte.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('aset');?>/dist/css/wahyu-style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav layout-footer-fixed" onload="startTime()" onload="startTime2()">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="<?=base_url('adminpusat/dashboard');?>" class="navbar-brand">
          <img src="<?=base_url('aset');?>/dist/img/AdminLTELogo.png" alt="RSUD Sidoarjo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        </a>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="<?=base_url('adminpusat/auth/keluar');?>" class="dropdown-item">
                <i class="fas fa-sign-out-alt mr-2"></i> Sign Out
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <div class="content pr-0 pl-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 pr-0 pl-0">
              <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header text-white"
                  style="background: url('<?=base_url('aset');?>/dist/img/photo1.jpg') center center; height: 780px;">
                  <h3>Selamat datang</h3>
                  <h1><?=$this->session->nama;?></h1>
                  <h5 class="widget-user-desc">ADMIN PUSAT</h5>
                  <h5 class="widget-user-desc">RSUD SIDOARJO</h5>
                  <h2 class="widget-user-desc" style="margin-top: 120px;">Semoga Hari Anda Menyenangkan</h2>
                  <div class="h1" id="txt"></div>
                  <div class="h3" id="txt2"></div>
                </div>
                <div style="top:180px" class="widget-user-image">
                  <img class="img-circle" src="<?=base_url('aset');?>/dist/img/user3-128x128.jpg" alt="User Avatar">
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer bg-info">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <a href="<?=base_url('adminpusat/profil');?>" class="info-box button-cta-onboarding-screen-wahyu link-muted">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-alt"></i></span>

              <div class="info-box-content">
                <span class="h4 text-info">MY ACCOUNT</span>
                <span class="info-box-number text-info">
                  Informasi tentang personal data dan akses sistem
                </span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col-md-4 -->
          <div class="col-lg-4">
            <a href="<?=base_url('adminpusat');?>" class="info-box button-cta-onboarding-screen-wahyu link-muted">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-rocket"></i></span>

              <div class="info-box-content">
                <span class="h4 text-info">GO TO APLIKASI</span>
                <span class="info-box-number text-info">
                  Pergi ke aplikasi untuk membantu menjalankan aktifitas kerja
                </span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col-md-4 -->
          <div class="col-lg-4">
            <a href="<?=base_url('adminpusat/backup');?>" class="info-box button-cta-onboarding-screen-wahyu link-muted">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-database"></i></span>

              <div class="info-box-content">
                <span class="h4 text-info">BACK UP DATA</span>
                <span class="info-box-number text-info">
                  Simpan data aktifitas sistem untuk keamanan data
                </span>
              </div>
              <!-- /.info-box-content -->
            </a>
            <!-- /.info-box -->
          </div>
          <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?=base_url('aset');?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url('aset');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url('aset');?>/dist/js/adminlte.min.js"></script>

  <script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
    </script>

  <script>
  var today = new Date();
  var d = today.getDate();
  var m = today.getMonth() + 1;
  var y = today.getFullYear();
  document.getElementById("txt2").innerHTML = d + " - " + m + " - " + y ;
  </script>
</body>

</html>
