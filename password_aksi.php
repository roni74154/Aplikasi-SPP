<?php 
require'function.php';

$password = $_POST['password'];
$konfirmasi = $_POST['konfirmasi'];

 if($password == $konfirmasi){

 	$password = md5($password);

	$query = mysqli_query($conn,"UPDATE tb_login SET password = '$password'");

	 echo"
         <script>
           alert('password berhasil di ubah');
           document.location.href = 'login.php';
        </script>
               ";

 }else{

 	header('location:g_password.php');

 }
	


	

 ?>