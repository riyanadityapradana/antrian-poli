<?php
require_once("../config/koneksi.php");

if (isset($_GET['page'])){ $page = $_GET['page']; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Antrian Poli | IT-RSPI</title>
  <link rel="icon" href="../assets/img/logo.png" type="image/png">

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- datatables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/toastr/toastr.css">
  <link rel="stylesheet" href="../assets/plugins/toastr/toastr.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
  <style>
  #splide3d {
      max-width: 900px;
      margin: 32px auto 0 auto;
  }
  .splide__slide img {
      width: 100%;
      height: 320px;
      object-fit: contain;
      border-radius: 24px;
      transition: transform 0.4s cubic-bezier(.17,.67,.83,.67), box-shadow 0.4s;
  }
  @media (max-width: 900px) {
      #splide3d {
          max-width: 98vw;
      }
      .splide__slide img {
          height: 520px;
          border-radius: 16px;
          object-fit: contain;
          transition: transform 0.4s cubic-bezier(.17,.67,.83,.67), box-shadow 0.4s;
      }
  }
  @media (max-width: 600px) {
      .splide__slide img {
          height: 390px;
          border-radius: 12px;
          object-fit: contain;
          transition: transform 0.4s cubic-bezier(.17,.67,.83,.67), box-shadow 0.4s;
      }
  }
  .splide__slide img.zoomed {
    transform: scale(1.25);
    z-index: 10;
    box-shadow: 0 12px 40px rgba(0,0,0,0.25);
  }
  </style>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets/img/logo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white" style="background:#5cd5fb;">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a></li>
        <li class="nav-item d-none d-sm-inline-block"><a href="#" class="nav-link">Home</a></li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline" id="navbarSearchForm" onsubmit="return handleNavbarSearch(event)">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" id="navbarSearchInput" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
          <script>
          function handleNavbarSearch(e) {
            e.preventDefault();
            var val = document.getElementById('navbarSearchInput').value.toLowerCase();
            if (val.includes('gigi') || val.includes('poli gigi')) {
              window.location.href = 'main_app.php?page=poli_gigi';
            } else if (val.includes('anak') || val.includes('poli anak')) {
              window.location.href = 'main_app.php?page=poli_anak';
            } else if (val.includes('dalam')) {
              window.location.href = 'dashboard_staff.php?unit=rekap_pasien_ranap';
            } else if (val.includes('kandungan')) {
              window.location.href = 'dashboard_staff.php?unit=rekap_px_usia_ranap';
            } else if (val.includes('syaraf')) {
              window.location.href = 'dashboard_staff.php?unit=rekap_px_usia_ralan';
            } else {
              alert('Menu tidak ditemukan.');
            }
            return false;
          }
          </script>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background:rgb(217, 221, 224, 1)">
    <!-- Brand Logo -->
    <a href="dashboard_staff.php?unit=beranda" class="brand-link" style="background:rgb(92, 213, 251, 1)">
      <img src="../assets/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">IT - RSPI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
              <a href="main_app.php?page=beranda" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-bar" style="color: black;"></i>
                  <p style="color: black;">Poliklinik<i class="right fas fa-angle-left" style="color: black;"></i></p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="main_app.php?page=poli_anak" class="nav-link">
                          <i class="nav-icon fas fa-user-injured" style="color: black;"></i>
                          <p style="font-size: 14px; color: black;">Poli Anak</p>
                      </a>
                      <a href="main_app.php?page=poli_gigi" class="nav-link">
                          <i class="nav-icon fas fa-user-injured" style="color: black;"></i>
                          <p style="font-size: 14px; color: black;">Poli Gigi</p>
                      </a>
                      <a href="main_app.php?page=poli_pd" class="nav-link">
                          <i class="nav-icon fas fa-procedures" style="color: black;"></i>
                          <p style="font-size: 14px; color: black;">Poli Penyakit Dalam</p>
                      </a>
                      <a href="main_app.php?page=poli_kandungan" class="nav-link">
                          <i class="nav-icon fas fa-user-injured" style="color: black;"></i>
                          <p style="font-size: 14px; color: black;">Poli Kandungan</p>
                      </a>
                      <a href="main_app.php?page=poli_syaraf" class="nav-link">
                          <i class="nav-icon fas fa-user-injured" style="color: black;"></i>
                          <p style="font-size: 14px; color: black;">Poli Syaraf</p>
                      </a>
                  </li>
              </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
      <div class="content-header">
          <div class="container-fluid">
            <?php require_once ("content.php");?>
          </div>
      </div>
  </div>



<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer" style="position:fixed;bottom:0;width:100%;background:#d9dde0;color:#00070c;z-index:9999;padding:0;">
  <div style="overflow:hidden;white-space:nowrap;">
    <marquee behavior="scroll" direction="left" scrollamount="6" style="font-size:16px;padding:8px 0;">
      &copy; <?= date('Y') ?> IT-RSPI | Antrian Poliklinik RSPI. Dikembangkan dengan ❤️ oleh Tim IT-RSPI. Seluruh hak cipta dilindungi undang-undang.
    </marquee>
  </div>
</footer>
</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../assets/plugins/moment/moment.min.js"></script>
<script src="../assets/plugins/inputmask/jquery.inputmask.min.js"></script>

<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/toastr/toastr.min.js"></script>
<script src="../assets/dist/js/adminlte.min.js"></script>

<!-- jQuery Mapael -->
<script src="../assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../assets/plugins/raphael/raphael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#splide3d', {
        type   : 'loop',
        perPage: 3,
        focus  : 'center',
        gap    : '1rem',
        autoplay: true,
        interval: 3500,
        breakpoints: {
            900: {
                perPage: 2,
            },
            600: {
                perPage: 1,
            },
        },
        classes: {
            // 3D effect
            slide: 'splide__slide splide__slide--cover',
        },
    }).mount();
});

document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.splide__slide img').forEach(function(img) {
    img.addEventListener('click', function() {
      // Remove zoom from all images first
      document.querySelectorAll('.splide__slide img').forEach(function(i) {
        i.classList.remove('zoomed');
      });
      // Add zoom to clicked image
      img.classList.add('zoomed');
      // Remove zoom after 1.2s
      setTimeout(function() {
        img.classList.remove('zoomed');
      }, 1200);
    });
  });
});
</script>
<!-- Splide.js 3D Image Slider End -->
<script>
    $(function() {
    $('.select2').select2();
    $('.select2bs4').select2({ theme: 'bootstrap4' });
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
    // Inisialisasi DataTable dengan pengaturan custom
    $('#example1').DataTable({
        lengthChange: true,
        paging: true,
        pagingType: 'numbers',
        scrollCollapse: true,
        ordering: true,
        info: true,
        language: {
            decimal: '',
            emptyTable: 'Tidak ada data yang tersedia pada tabel ini',
            processing: 'Sedang memproses...',
            lengthMenu: 'Tampilkan _MENU_ entri',
            zeroRecords: 'Tidak ditemukan data yang sesuai',
            info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ entri',
            infoEmpty: 'Menampilkan 0 sampai 0 dari 0 entri',
            infoFiltered: '(disaring dari _MAX_ entri keseluruhan)',
            infoPostFix: '',
            search: '',
            searchPlaceholder: 'Cari Data..',
            url: '',
            paginate: {
                first: 'Pertama',
                previous: 'Sebelumnya',
                next: 'Selanjutnya',
                last: 'Terakhir'
            }
        }
    });
    // Toastr notification
    <?php if(isset($_GET['msg'])): ?>
        toastr.options = {"positionClass": "toast-top-right", "timeOut": "3000"};
        toastr.success("<?= htmlspecialchars($_GET['msg']) ?>");
    <?php endif; ?>
    <?php if(isset($_GET['err'])): ?>
        toastr.options = {"positionClass": "toast-top-right", "timeOut": "3000"};
        toastr.error("<?= htmlspecialchars($_GET['err']) ?>");
    <?php endif; ?>
    });
</script>
</body>
</html>