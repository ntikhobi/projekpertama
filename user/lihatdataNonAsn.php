<?php

  session_start();

  if ( !isset($_SESSION["login"]) ) {
    header('location: index.php');
    exit;
  }

?>

<?php

  require '../fungsi.php';

  if ( isset ($_POST["tambahdata"]) ) {
    
    if ( tambah_nonAsn ($_POST) > 0 ) {
      
      echo "
            <script>
              alert('Data Anda Berhasil Disimpan, untuk selengkapnya silahkan hubungi Admin');window.location='home.php';
            </script>
      ";

    } else {
      echo "
            <script>
              alert('Data Gagal Disimpan, silahkan ulangi dengan benar');window.location='home.php';
            </script>
      ";

    }
  }

?>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Lihat Data Non Asn </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700"> -->
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <!-- <link rel="stylesheet" href="../css/custom.css"> -->
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/logol.png">

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
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
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
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Nurfajrin Tikhobi</h1>
              <p>Web Designer</p>
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
              <h2 class="no-margin-bottom"> Data Non Asn </h2>
            </div>          
          </header>

        <div class="container-table">
        <div class="table-responsive-md">
          <center>
          <p> Data Pegawai SAMSAT SUBANG Non Asn </p>
            <table class="table">    
                <thead>
                    <tr>
                      <th> No </th>
                      <th> Nama Pegawai </th>    
                      <th> Jenis Kelamin </th>                          
                      <th> Jabatan </th>
                      <th> Status</th>
                      <th> Pendidikan Terakhir</th>                     
                      <th> Alamat </th> 
                      <!-- <th> Lainnya </th>      -->
                      <th> Action </th>            
                    </tr>
                </thead>

                <tbody>

                    <?php 
                      require '../koneksi.php';
                      $no = 1;
                      $data =  mysqli_query($conn,"SELECT * FROM nonasn");
                      
                        while($d = mysqli_fetch_array($data)){
                        ?>
                          <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d['nama_pegawai']; ?></td>
                          <td><?php echo $d['jk']; ?></td>                     
                          <td><?php echo $d['jabatan']; ?></td>
                          <td><?php echo $d['status']; ?></td>
                          <td><?php echo $d['pendidikan_terakhir']; ?></td>
                          <td><?php echo $d['alamat']; ?></td>
                     
                          
                          <td>
                          
                            <!-- <a class="underlineHover" href="nonAsn.php"> Lihat detail </a> -->
                            <a href="detailNonAsn.php?id=<?php echo $d['id']; ?>"><button class="btn btn-info btn-xs">lihat detail</button></a>
                            <a href="editdataNonAsn.php?id=<?php echo $d['id']; ?>"><button class="btn btn-secondary"> edit data </button></a>
                            <a href="hapusdataNonAsn.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin Anda ingin menghapus <?php echo $d['nama_pegawai']; ?>');"><button class="btn btn-danger btn-xs">
                              hapus data
                            </button></a>
                          </td>
                          
                        <?php
                        }
                      ?>

                </tbody>
                </tr>
                
              </center>
              
            </table>

                <a href="formNonAsn.php" class="btn btn-primary" style="margin-top:30px; margin-left:62%;"> Tambah data</a>

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