<?php

  session_start();

  if ( !isset($_SESSION["login"]) ) {
    header('location: index.php');
    exit;
  }

?>


<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Kelola Data </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="shortcut icon" href="../img/logol.png">

    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="../lihat-css/keloladata-table.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">

      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand -->
                <a href="home.php" class="navbar-brand d-none d-sm-inline-block">
                <div class="brand-text d-none d-lg-inline-block"><span>SAMSAT </span><strong> Subang</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">           
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out-alt"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- End Navbar -->

      <div class="page-content d-flex align-items-stretch"> 
        
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Hello, Admin</h1>
              <p>SAMSAT SUBANG</p>
            </div>
          </div> 

          <!-- Sidebar Navidation Menus-->
          <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="home.php"> <i class="fa fa-home" style="font-size:14px"></i> Halaman Utama </a></li>
            <li><a href="keloladata.php">  <i class="fa fa-info-circle" style="font-size:14px"></i> Kelola Data </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-align-justify" style="font-size:14px"></i> ASN </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="formAsn.php">Form ASN</a></li>
                <li><a href="lihatdataAsn.php">Lihat Data ASN</a></li>
              </ul>
            </li>
            <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-align-justify" style="font-size:14px"></i> Non ASN </a>
              <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                <li><a href="formNonAsn.php">Form Non ASN</a></li>
                <li><a href="lihatdataNonAsn.php">Lihat Data Non ASN</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar -->

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"> Kelola Data Pegawai </h2>
            </div>          
          </header>


          <div class="row" style="padding: 40px;">
            <div class="col-sm-4">
              <div class="card bg-dark text-white">
                <div class="card-body">
                  <h2 class="card-title"> Jumlah Pegawai Asn yang terdata </h2>

                  <?php 

                    require '../koneksi.php';

                    $data =  mysqli_query($conn,"SELECT * FROM pegawai");
        
                    $count = mysqli_num_rows($data);
                    

                  ?>

                  <p class="card-text" style="font-size: 20px;"> Sebanyak <?php echo $count; ?> pegawai </p>
                  <a href="lihatdataAsn.php" class="btn btn-light"> lihat selengkapnya </a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card bg-dark text-white"">
                <div class="card-body">
                  <h2 class="card-title"> Jumlah Pegawai Non Asn yang terdata </h2>

                  <?php 

                    require '../koneksi.php';

                    $data =  mysqli_query($conn,"SELECT * FROM nonasn");
        
                    $count = mysqli_num_rows($data);
                    

                  ?>

                  <p class="card-text" style="font-size: 20px;"> Sebanyak <?php echo $count; ?> pegawai </p>
                  <a href="lihatdataNonAsn.php" class="btn btn-light"> lihat selengkapnya </a>
                </div>
              </div>
            </div>
            
          </div>

        </div>

      </div>
  
    </div>

    
    



    <!-- JavaScript files-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../js/charts-home.js"></script>
    <!-- Main File-->
    <script src="../js/front.js"></script>
  </body>
</html>