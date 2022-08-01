<?php 
require'function.php';

if(isset($_POST["register"])){

  if(registrasi($_POST) > 0){
     echo"
             <script>
                 alert('data berhasill di Kirim!!!');
                 document.location.href = 'regis.php';
             </script>
               ";

  }else{

     echo"
             <script>
                 alert('data gagal di Kirim!!!');
                 document.location.href = 'regis.php';
             </script>
               ";

               exit;
  }
}

 ?>


<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
  <title>Registrasi | kepegawaian</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="../assets/css/main.css">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="../assets/css/demo.css">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <div class="vertical-align-wrap">
      <div class="vertical-align-middle">
        <div class="auth-box ">
          <div class="left">
            <div class="content">
              <div class="header">
                <div class="logo text-center"><img src="../assets/img/logo-dark.png" alt="Klorofil Logo"></div>
                <p class="lead">Registrasi to your account</p>
              </div>
              <form class="form-auth-small" action="" method="post">

                 <div class="form-group">
                  <label for="signin-password" class="control-label sr-only">username</label>
                  <input type="text" class="form-control" id="signin-username" name="username" placeholder="username">
                </div>
                
                <div class="form-group">
                  <label for="signin-password" class="control-label sr-only">Password</label>
                  <input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
                </div>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="register">registrasi</button>
              </form>
            </div>
          </div>
          <div class="right">
            <div class="overlay"></div>
            <div class="content text">
              <h1 class="heading">Free Bootstrap dashboard template</h1>
              <p>by The Develovers</p>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->
</body>

</html>




