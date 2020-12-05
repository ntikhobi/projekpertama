<?php

  session_start();

  require '../koneksi.php';

  if ( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if ( mysqli_num_rows($result) === 1 ) {


      //cek password
      $row = mysqli_fetch_assoc($result);
      if ( password_verify($password, $row["password"]) ) {

        //cek session
        $_SESSION["login"] = true;

        header("Location: home.php");
        exit;
      }
    }

    $error = true;

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
        <p> Masuk Sebagai User </p>
      </div>

      <!-- Login Form -->
      <form action="" method="POST">
        <input type="text" id="login" class="fadeIn second" name="username" placeholder="username" autocomplete="off" required oninvalid="this.setCustomValidity('masukan username Anda')" oninput="setCustomValidity('')" />
        <input type="password" class="fadeIn third" name="password" placeholder="password" required oninvalid="this.setCustomValidity('masukan password Anda')" oninput="setCustomValidity('')" /> 
        <input type="submit" class="fadeIn fourth" value="Masuk" name="login">

        <?php if ( isset($error) ) : ?>
          <p style="color: red; font-style: italic;"> username / password tidak sesuai </p>
        <?php endif; ?>

      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="registrasi.php"> Buat Akun </a>
      </div>

    </div>
  </div>
  
 
</body>
</html>