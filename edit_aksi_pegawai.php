<?php 
require'function.php';

session_start();
if(!isset($_SESSION['login'])){
  
  header("location:login.php");
}

$id = $_POST['id'];
$nip = htmlspecialchars($_POST['nip']);
$nama = htmlspecialchars($_POST['nama']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);
$jabatan = htmlspecialchars($_POST['jabatan']);
$alamat = htmlspecialchars($_POST['alamat']);
$t_lahir =htmlspecialchars($_POST['t_lahir']);
$tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
$nohp = htmlspecialchars($_POST['nohp']);
$agama= htmlspecialchars($_POST['agama']);
$fotoLama= htmlspecialchars($_POST['fotoLama']);


if($_FILES['foto']['error'] === 4){
	$foto = $fotoLama;
}else{
		$foto = upload();
}









$query = "UPDATE tb_kepegawaian SET nip = '$nip',
									nama = '$nama',
									jenkel = '$gender',
									jabatan = '$jabatan',
									alamat = '$alamat',
									tempat_lahir = '$t_lahir',
									tgl_lahir = '$tgl_lahir',
									nohp = '$nohp',
									agama = '$agama',
									foto = '$foto'
							
									WHERE 

									id_kepegawaian = '$id'
									";

mysqli_query($conn,$query);

echo"
         <script>
           alert('Data berhasil di ubah!');
           document.location.href = 'pegawai.php';
        </script>
               ";

 ?>