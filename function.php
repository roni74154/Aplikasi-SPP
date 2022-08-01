<?php 
$conn = mysqli_connect("localhost","root","","kepegawaian");

function cari($cari){
	global $conn;

	$pegawai = mysqli_query($conn,"SELECT * FROM tb_kepegawaian WHERE nama LIKE '%$cari%'");

	return $pegawai;
}



//function upload
function upload(){

	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	//cek apakah tidak ada foto yang di upload
	if($error === 4){
		echo"
         <script>
           alert('silakan upload gambar!');
           document.location.href = 'tambah_pegawai.php';
        </script>
               ";
	}

	//pastikan yang di upload adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile) ;
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){

		echo"
         <script>
           alert('yang anda upload bukan gambar!');
           document.location.href = 'tambah_pegawai.php';
        </script>
               ";

	}

	//cek ukuran foto
	if($ukuranFile > 1000000){

		echo"
         <script>
           alert('ukuran gambar anda terlalu besar!');
           document.location.href = 'tambah_pegawai.php';
        </script>

               ";

               exit;
	}


$namaFileBaru = rand(1,1000);
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar; 

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);	

	return $namaFileBaru;

		

}



 ?>
 <!--	//lolos pengecekan gambar siap di upload

		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar; -->

