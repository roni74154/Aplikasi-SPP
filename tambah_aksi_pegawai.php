<?php 
require'function.php';

session_start();
if(!isset($_SESSION['login'])){
  
  header("location:login.php");
}
 


 $nip = htmlspecialchars($_POST['nip']);
 $nama = htmlspecialchars($_POST['nama']);
 $gender = htmlspecialchars($_POST['gender']);
 $jabatan = htmlspecialchars($_POST['jabatan']);
 $alamat = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['alamat']));
 $t_lahir = htmlspecialchars($_POST['t_lahir']);
 $tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
 $nohp = htmlspecialchars($_POST['nohp']);
 $agama = htmlspecialchars($_POST['agama']);


//upload gambar
 $foto = upload();
 if(!$foto){
  return false;
 }

 mysqli_query($conn,"INSERT INTO tb_kepegawaian VALUES('','$nip','$nama','$gender','$jabatan','$alamat','$t_lahir','$tgl_lahir','$nohp','$agama','$foto')");



echo"
         <script>
           alert('data berhasill di tambahkan');
           document.location.href = 'pegawai.php';
        </script>
               ";
 ?>