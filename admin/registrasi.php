<?php

    require '../koneksi.php';

    if ( isset($_POST["register"]) ) {

        if ( regis($_POST) > 0 ) {
            echo "<script>
                    alert('admin baru berhasil ditambahkan');window.location='index.php';
                  </script>";
        
        } else {
            echo mysqli_error($conn);
        }
    }

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../lihat-css/style.login.css">

    
<!------ Include the above in your HEAD tag ---------->

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <!-- <div class="fadeIn first">
        <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
      </div> -->
      <div id="formFooter2">
        <p> Buat akun sebagai admin </p>
      </div>


      <!-- Login Form -->
      <form action="" method="POST">
        <input type="text" id="login" class="fadeIn second" name="username" placeholder="buat username" required oninvalid="this.setCustomValidity('masukan username Anda')" oninput="setCustomValidity('')">
        <input type="password" class="fadeIn third" name="password" placeholder="buat password" required oninvalid="this.setCustomValidity('masukan password Anda')" oninput="setCustomValidity('')">
        <input type="password" class="fadeIn third" name="password2" placeholder="konfirmasi password" required oninvalid="this.setCustomValidity('masukan konfirmasi password Anda')" oninput="setCustomValidity('')">
        <input type="submit" class="fadeIn fourth" value="Buat" name="register">

      </form>


      <!-- Remind Passowrd -->

    </div>
  </div>
  
 
</body>
</html>