<?php 
require'function.php';
$id = $_GET['id'];

$gambar = mysqli_query($conn,"SELECT * FROM tb_kepegawaian WHERE id_kepegawaian = '$id'");

$data = mysqli_fetch_assoc($gambar);

$foto = $data['foto'];

unlink("img/".$foto);


$query = "DELETE FROM tb_kepegawaian WHERE id_kepegawaian = '$id'";

mysqli_query($conn,$query);


 echo"
         <script>
           alert('Data berhasil di hapus!');
           document.location.href = 'pegawai.php';
        </script>
               ";
 ?>