<?php 
include 'koneksi.php';

$no = mysqli_query($koneksi, "SELECT No From pegawai ORDER BY No DESC");
$No = mysqli_fetch_array($no);
$kode = $No['No'];

$urut = substr($kode, 3, 3);
$tambah = (int) $urut + 1;

if (strlen($tambah) == 1) {
  # code...
  $No = "PEG"."00".$tambah;
} else if (strlen($tambah) == 2) {
  # code...
  $No = "PEG"."0".$tambah;
}else{
  # code...
  $No = "PEG".$tambah;
}
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Halaman Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.css">
  <script type="text/javascript" src="jqueryui/external/jquery/jquery.js"></script>
   <script type="text/javascript" src="jqueryui/jquery-ui.min.js"></script>
   <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.theme.css">

   <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/fontawesome.min.css">
     <link rel="stylesheet" type="text/css" href="fontawesome-free-5.7.2-web/css/fontawesome.css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html">
          <img src="../../images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html">
          <img src="../../images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="user/L6.png" alt="user-Sri" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Sri Adi Cahyono
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Barang Sudah siap dikirim...
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="user/p7.png" alt="user-Natasya" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Natasya Landyka
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Produk baru siap meluncur..
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="user/L7.png" alt="user-adi" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Adi Putra
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Barang sudah sampai
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Ruary Vina Muqorobin !</span>
              <img class="img-xs rounded-circle" src="user/p2.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
       <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="user/p2.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Ruary Vina Muqorobin</p>
                  <div>
                    <small class="designation text-muted">Admin</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../home.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Beranda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Pegawai</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/tables/DataP.php">Data Pegawai</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/tables/pegawai.php">Reservasi Pegawai</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Items</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/Data_Penjualan.php">Data Penjualan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/Barang_Masuk.php">Data Barang</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-12 grid-margin">
            <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h2 class="card-title"><b>Verifikasi Data Pegawai</b></h2>
                        <?php 
                          include 'koneksi.php';
                         ?>
                        <form method="get">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="form-group row">
                                <div class="col-sm-9">
                                  <input type="text" id="Nama" autocomplete="off" name="Nama" class="form-control" placeholder="User Name" />
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group row">
                                <div class="col-sm-9" style="margin-left: -80px;">
                                  <input type="submit" class="btn btn-inverse-success btn-fw" value="Filter" />
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-2">
                              <div class="form-group row">
                                <div class="row">
                                
                               <div class="col-md-3" style="margin-right: 20px;">
                                  <a href="DataP.php">
                                   <button type="button" class="btn btn-inverse-primary btn-rounded btn-fw"> <i class="fas fa-redo"></i>Kembali</button>
                                  </a>
                                </div>
                            </div>
                              </div>
                            </div>
                          </div>
                        </form>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id Pegawai</th>
                          <th>User</th>
                          <th>Nama Pegawai</th>
                          <th>Jabatan Pegawai</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        if(isset($_GET['Nama'])){
                          $Nama = $_GET['Nama'];
                          $sql = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE Nama='$Nama'");
                        }else{
                          $sql = mysqli_query($koneksi,"SELECT * FROM pegawai");
                        }
                        
                        while($d = mysqli_fetch_array($sql)){
                          ?>
                        <tr>
                         <td class="py-1" ><?php echo $d['No']; ?></td>
                          <td><img src="file/<?php echo $d['Foto']; ?>" width=70px; height=70px;></td>
                          <td><?php echo $d['Nama']; ?></td>
                          <td><?php echo $d['Jabatan']; ?></td>
                          <td>
                            <div class="row">
                              <div class="col-md-4">
                                <a href="pegawai.php">
                                  <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-warning">
                                  <i class="fas fa-pencil-alt"></i>
                                  </button>
                                </a>
                              </div>
                               <div class="col-md-4">
                                  <a href="pegawai.php">
                                    <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-danger">
                                    <i class="far fa-trash-alt"></i>
                                    </button>
                                  </a>
                                </div>
                            </div>
                          </td>
                        </tr>
                         <?php 
                            }
                            ?>
                      </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="home.php" target="_blank">Happy Shop</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
<!-- Kelender -->
<script type="text/javascript" src="jqueryui/jquery-ui.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#TANGGAL').datepicker({
      dateFormat: 'yy-mm-dd'
    })
  })
</script>
<!-- Kelender -->
<script type="text/javascript" src="jqueryui/jquery-ui.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#Tanggal').datepicker({
      dateFormat: 'yy-mm-dd'
    })
  })
</script>


  <!-- Sweet Alert -->
   <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    function apply() {

      swal({
  title: "Sukses!",
  text: "Data berhasil di simpan",
  icon: "success",
  timer: 4000,
});$('#button-submit').click();
    
}
  </script>
</body>

</html>