<?php

  session_start();

  if ( !isset($_SESSION["login"]) ) {
    header('location: index.php');
    exit;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Halaman Awal </title>

  <!-- Bootstrap Core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../css/stylish-portfolio.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body id="page-top">

  <!-- Navigation -->
  <!-- <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">SAMSAT Subang</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">About Us</a>
      </li>
    </ul>
  </nav> -->
  <!-- End Navigation -->

  <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <div class="caption-intro-name">
          SAMSAT Subang
        </div>
        <div class="intro-job">
          <span>Selamat datang di website pengelola data kepegawaian samsat subang </span>
        </div>
        <div class="social-intro">
          <ul>
            <li>
              <a href="tentangkita.php" data-toggle="modal" data-target="#myModal">
                <i class="fas fa-users style="font-size:20px"></i>
                <!-- <span> Tentang Kita </span>            -->
              </a>
            </li>
            <li>
              <a href="keloladata.php">
                <i class="fa fa-street-view" style="font-size:20px"></i>
                <!-- <span> Kelola Data </span>    -->
              </a>
            </li>
            <li>
              <a href="logout.php">
                <i class="fa fa-sign-out-alt" style="font-size:20px"></i>
                <!-- <span> Keluar </span>    -->
              </a>
            </li>
          </ul>
        </div>
        <div class="cta-intro">
          <a href="https://bapenda.jabarprov.go.id/cabang-pelayanan-pendapatan-daerah-kabupaten-subang/" class="btn btn-xl btn-dark"> Info Lengkap </a>
        </div>
      </div>
      <div class="overlay"></div>
    </header>
    <!-- End Header -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
