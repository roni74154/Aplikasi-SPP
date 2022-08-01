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
    <title>Wab Kepegawaian</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   

        <link rel="stylesheet" href="style_cetak.css">
  
  </head>
  <body>
            
             <?php 
                          $id = $_GET["id"];
                          $i = 1;
                            $pegawai = "SELECT * FROM tb_kepegawaian WHERE id_kepegawaian = '$id'";
                                                      
                            $result = mysqli_query($conn,$pegawai);
                      
                            while($row = mysqli_fetch_assoc($result))

                {?>
              
            
             <table border="1" cellspacing="0" cellpadding="6" align="center">
                    	<h3 align="center" style="margin-top: 7px;">IDENTITAS PEGAWAI</h3>
                              
						   

								<tr align="center" bgcolor="#1fe5d5">
												<td width="200">DATA PEGAWAI</td>
												<td width="400">KETERANGAN</td>
												<td width="200">FOTO</td>
								</tr>
								<tr align="center">
												<td>Nip</td>
												<td><?= $row["nip"]; ?></td>
												<td rowspan="9"><img src="img/<?= $row["foto"]; ?>" width="100%" hight="805"></td>
								</tr>
								<tr align="center">
												<td>Nama</td>
												<td><?= $row["nama"]; ?></td>
								</tr>
								<tr align="center">
												<td>Jenis Kelamin</td>
												<td><?= $row["jenkel"]; ?></td>
								</tr>
								<tr align="center">
												<td>Jabatan</td>
												<td><?= $row["jabatan"]; ?></td>
								</tr>
								<tr align="center">
												<td>Alamat</td>
												<td><?= $row["alamat"]; ?></td>
								</tr>
								<tr align="center">
												<td>Tempat Lahir</td>
												<td><?= $row["tempat_lahir"]; ?></td>
								</tr>
								<tr align="center">
												<td>Tanggal lahir</td>
												<td> <?= $row["tgl_lahir"]; ?></td>
								</tr>
								<tr align="center">
												<td>No.Hp</td>
												<td><?= $row["nohp"]; ?></td>
								</tr>
								<tr align="center">
												<td>Agama</td>
												<td><?= $row["agama"]; ?></td>
								</tr>
						
			  </table>
			  	<?php } ?>

                   
                  
            <script type="text/javascript">
            	window.print();
            </script>
          
  </body>
</html>






