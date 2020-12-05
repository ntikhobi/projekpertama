<?php

  include '../koneksi.php';

  $id = $_GET['id'];

  $query = "SELECT * FROM pegawai WHERE id=" . $id;

  $hasil = mysqli_query($conn, $query);


?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Edit Data Asn Pegawai Samsat Subang </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS BERPENGARUH DROPDOWN-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <!-- <link rel="stylesheet" href="../css/fontastic.css"> -->
    <!-- Google fonts - Poppins -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700"> -->
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <!-- <link rel="stylesheet" href="../css/custom.css"> -->

    <!-- <link rel="stylesheet" href="../lihat-css/bootstrap.min-lihat.css"> -->

    <!-- <link rel="stylesheet" href="../lihat-css/custom-lihat.css"> -->
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="../img/logol.png"> -->

    <!-- <link rel="stylesheet" href="../lihat-css/keloladata-table.css"> -->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    
    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
              <h1 class="h4"> Hello, Admin</h1>
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
              <h2 class="no-margin-bottom"> Edit Data ASN </h2>
            </div>
          </header>

          <!-- Form Data -->
          <div class="modal-body">
            <form  action="proseseditdataAsn.php" method="post">

              <?php

                while ($data = mysqli_fetch_array($hasil)) {

              ?>

              <div class="form-group">
                <label>Nama Lengkap Pegawai</label>
                <input class=" form-control" name="nama_pegawai" value="<?php echo $data['nama_pegawai'] ?>" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <!-- Tempat tanggal lahir -->
              <div class="form-group">
                <label>Tempat, tanggal lahir</label>
                <input class=" form-control" name="ttl" type="text" value="<?php echo $data['ttl'] ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <table border="0">
                <div class="form-group-gender">                  
                  <label> Jenis Kelamin</label>
                  <tr>
                    <td width="100px"> 
                      <label class="container-radio">Laki-laki
                        <input type="radio" name="jk" value="<?php echo $data['jk'] ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
                        <span class="checkmark"></span>
                      </label> 
                    </td>
                    <td> 
                      <label class="container-radio">Perempuan
                      <input type="radio" name="jk" value="<?php echo $data['jk'] ?>">
                      <span class="checkmark"></span>
                      </label>
                    </td>
                  </tr>
                </div>
              </table>           

              <div class="form-group">
                <label>Golongan</label>
                <input class=" form-control" name="golongan" type="text" value="<?php echo $data['golongan'] ?>"required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <div class="form-group">
                <label>Jabatan</label>
                <input class=" form-control" name="jabatan" type="text" value="<?php echo $data['jabatan'] ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <div class="form-group">
                <label>TMT </label>
                <input class=" form-control" name="tmt" type="text" value="<?php echo $data['tmt'] ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <div class="form-group">       
                <label>Status</label>
                <select class="form-control" name="status" value="<?php echo $data['status'] ?>" required oninvalid="this.setCustomValidity('Pilih Terlebih Dahulu')" oninput="setCustomValidity('')">
                  <option value="">Pilih Status</option>
                  <option value="Sudah Menikah">Sudah Menikah</option>
                  <option value="Belum Menikah">Belum Menikah</option>                    
                </select>                                  
              </div>

              <div class="form-group">
                <label>Jumlah Anak </label>
                <input class=" form-control" name="jumlah_anak" type="text" value="<?php echo $data['jumlah_anak'] ?>" />
              </div>

              <div class="form-group">
                <label> Nama Suami / Istri </label>
                <input class=" form-control" name="nama_pendamping" type="text" value="<?php echo $data['nama_pendamping'] ?>" />
              </div>

              <div class="form-group">       
                <label>Pendidikan Terakhir</label>
                  <select class="form-control" name="pendidikan_terakhir" value="<?php echo $data['pendidikan_terakhir'] ?>" required oninvalid="this.setCustomValidity('Pilih Terlebih Dahulu')" oninput="setCustomValidity('')">
                    <option value="">Pilih Pendidikan Terakhir</option>
                    <option value="SD" id="sd">SD</option>
                    <option value="SMP" id="smp">SMP</option>  
                    <option value="SMA" id="sma">SMA</option>
                    <option value="Perguruan Tinggi" id="perguruan_tinggi">Perguruan Tinggi</option>                  
                  </select>                                  
              </div>

              <div class="form-group">
                <label> Nama PT / Sekolah </label>
                <input class=" form-control" name="nama_sekolah" type="text" value="<?php echo $data['nama_sekolah'] ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <div class="form-group">       
                <label>Tahun Masuk</label>
                <input class=" form-control" name="tahun_masuk" type="number" value="<?php echo $data['tahun_masuk'] ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"/>
              </div>
              <div class="form-group">       
                <label>Tahun Lulus</label>
                <input class=" form-control" name="tahun_lulus" type="number" value="<?php echo $data['tahun_lulus'] ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"/>
              </div>
              <div class="form-group">       
                <label>No Handphone</label>
                <input class=" form-control" name="nope" type="text" value="<?php echo $data['nope'] ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"/>
              </div>
              <div class="form-group">
                <label for="cname" >Alamat</label>
                <input class="form-control" name="alamat" type="text" value="<?php echo $data['alamat']; ?>" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" />
              </div>
              
                            
              <button type="submit" class="btn btn-primary"> Ubah </button>
              <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
              <!-- <button type="button" data-dismiss="modal-2" class="btn btn-secondary">Cancel</button>
              <button type="reset" class="btn btn-reset"> Reset </button> -->

              <?php } ?>

            </form>
          </div>
          <!-- End Form -->    
          
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