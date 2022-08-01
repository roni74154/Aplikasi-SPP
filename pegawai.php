<?php 
require'function.php';
session_start();
if(!isset($_SESSION['login'])){

  header("location:login.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wab-Kepegawaian</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/face2.png" />

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href=""><h2>KEPEGAWAIAN</h2></a>
          <a class="navbar-brand brand-logo-mini" href=""><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
           
              <div class="input-group mt-2">
                <form class="d-flex" action="" method="post">
                  <button class="btn btn-outline-success btn btn-gradien-success btn-sm ml-2" type="submit" name="cari">Search</button>
                <input class="form-control ml-2" type="search" placeholder="Search" aria-label="Search" name="keyworld">
                  
               </form>

              </div>
          
          </div>
          <ul class="navbar-nav navbar-nav-right">
           
            
           
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" title="logout"  href="logout.php">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
           
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../assets/images/faces/face1.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">SMK MASMUR</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php">
                <span class="menu-title">DASHBOARD <i class="fas fa-home ml-5 text-muted"></i></span>
             
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="pegawai.php">
                <span class="menu-title ml-4">PEGAWAI <i class="fas fa-users ml-5 text-muted"></i></span>

                
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="g_password.php">
                <span class="menu-title">GANTI PASSWORD</span>
                <i class="fas fa-lock ml-3 text-muted"></i>
              </a>
            </li>
           
            
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              
            </div>
            <div class="page-header">
              <h3 class="page-title">
                <a class="nav-link" href="../index.php">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </a>
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            
            
              
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Kepegawaian</h4>
                    <a href="tambah_pegawai.php" class="btn btn-danger mt-5 mb-3 btn-sm"><i class="fa fa-plus"></i>Tambah Pegawai</a>
                    <a href="cetak_seluruh_pegawai.php" class="btn bg-danger mt-5 mb-3 btn-sm"><i class="fas fa-print  text-muted"></i>Cetak</a>
                    <div class="table-responsive">
                      <table class="table table-hover ">
                        <thead>
                          <tr class="bg-gradient-primary">
                            <th> No </th>
                            <th> Nip </th>
                            <th> Nama </th>
                            <th> Jk_pegawai </th>
                            <th> Jabatan </th>
                            <th> Alamat </th>
                            <th> Tempat_Lahir </th>
                            <th> Tgl_lahir </th>
                            <th> No.Hp </th>
                            <th> Agama </th>
                            <th> Foto </th>
                            <th> Opsi </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $i = 1;
                            $pegawai = "SELECT * FROM tb_kepegawaian";
                                                      
                            $result = mysqli_query($conn,$pegawai);
                            if(isset($_POST['cari'])){
                              $result = cari($_POST['keyworld']);
                            }  
                            while($row = mysqli_fetch_assoc($result)){?>
                          <tr>
                            <td> <?= $i++; ?> </td>
                            <td> <?= $row["nip"]; ?> </td>
                            <td> <?= $row["nama"]; ?> </td>
                            <td> <?= $row["jenkel"]; ?> </td>
                            <td> <?= $row["jabatan"]; ?> </td>
                            <td> <?= $row["alamat"]; ?> </td>
                            <td> <?= $row["tempat_lahir"]; ?> </td>
                            <td> <?= $row["tgl_lahir"]; ?> </td>
                            <td> <?= $row["nohp"]; ?> </td>
                            <td> <?= $row["agama"]; ?> </td>
                            <td>  <img src='img/<?= $row["foto"]; ?>'></td>
                            <td> 
                              <a href="cetak.php?id=<?= $row["id_kepegawaian"];?>"><i class="fas fa-print"></i></a> |
                                <a href="edit_pegawai.php?id=<?= $row["id_kepegawaian"];?>"><i class="fas fa-edit"></i></a> |
                                <a href="delete_pegawai.php?id=<?= $row["id_kepegawaian"];?>" onclick=" return confirm('apakah anda yakin!')"><i class="fas fa-trash-alt"></i></a>
                             </td>
                          </tr>
                        <?php } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © masroni.rplmasmur-pku.com 2021</span>
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
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>