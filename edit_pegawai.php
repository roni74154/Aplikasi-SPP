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
    <title>Web-Kepegawaian</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
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
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
           
            
            <li class="nav-item dropdown">
              
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face1.png" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                
                <div class="dropdown-divider"></div>
                
                
            </li>
            <li class="nav-item dropdown">
              
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  
                 
                
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="logout.php">
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
        <div class="col-md-12">
         <div class="card">
            <div class="card-body">
              <h2>Edit Pegawai</h2>
              <p class="text-muted">edit data pegawai</p>

                <hr>

               <a href="pegawai.php" class="btn btn-danger btn-sm mb-5">BACK</a>

               <?php 
               

                 $id=$_GET['id'];
                 
                 $query = "SELECT * FROM tb_kepegawaian WHERE id_kepegawaian ='$id'";
                $result =  mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result)) { ?>

               <form action="edit_aksi_pegawai.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?= $row["id_kepegawaian"]; ?>">
                  <input type="hidden" name="fotoLama" value="<?= $row["foto"]; ?>">

                <div class="form-group">
                    <label>Nip</label>
                    <input type="text" name="nip" class="form-control" required autocomplete="off" placeholder="masukan nip pegawai" value="<?= $row["nip"]; ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required autocomplete="off" placeholder="masukan nama pegawai" value="<?= $row["nama"]; ?>">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option value="" required>-Pilih-</option>
                        <option  <?php if($row['jenkel']=="laki-laki"){ echo "selected='selected'"; }?> value="laki-laki" required>laki-laki</option>
                        <option <?php if($row['jenkel']=="perempuan"){ echo "selected='selected'"; }?> value="perempuan" required>perempuan</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" required autocomplete="off" placeholder="masukan jabatan" value="<?= $row["jabatan"]; ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" required autocomplete="off" placeholder="masukan Alamat" value="<?= $row["alamat"]; ?>">
                </div>
                <div class="form-group">
                    <label>Tempat_lahir</label>
                    <input type="text" name="t_lahir" class="form-control" required autocomplete="off" placeholder="masukan tempat tanggal lahir" value="<?= $row["tempat_lahir"]; ?>">
                </div>
                <div class="form-group">
                    <label>Tgl_lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" required autocomplete="off" placeholder="masukan nomor hp" value="<?= $row["tgl_lahir"]; ?>">
                </div>
                 <div class="form-group">
                    <label>No.hp</label>
                    <input type="number" name="nohp" class="form-control" required autocomplete="off" placeholder="masukan nomor hp" value="<?= $row["nohp"]; ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <select name="agama" class="form-control">
                        <option <?php if($row['agama']=="kristen"){ echo "selected='selected'"; }?> value="Kristen" required>Kristen</option>
                        <option <?php if($row['agama']=="Islam"){ echo "selected='selected'"; }?> value="Islam" required>Islam</option>
                        <option <?php if($row['agama']=="Buddha"){ echo "selected='selected'"; }?> value="Buddha" required>Buddha</option>
                        <option <?php if($row['agama']=="Hindu"){ echo "selected='selected'"; }?> value="Hindu" required>Hindu</option>
                        <option <?php if($row['agama']=="Konghucu"){ echo "selected='selected'"; }?>value="Konghucu" required>Konghucu</option>
                        <option <?php if($row['agama']=="Katolik"){ echo "selected='selected'"; }?>value="Katolik" required>Katolik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Foto</label><br>
                    <img src="img/<?= $row["foto"]; ?>" width="60px";>
                   <input type="file" name="foto" class="form-control"  autocomplete="off"  >
                </div>
                <di>
                    <button type="submit" name="submit" value="simpan" class="btn btn-primary btn-sm">Simpan</button>
                </di>
            </form>
          <?php } ?>
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