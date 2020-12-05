<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../lihat-css/bootstrap.min-lihat.css">
    <!-- css modal relasi ke index -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../lihat-css/font-awesome.min-lihat.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../lihat-css/fontastic-lihat.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../lihat-css/style.default-lihat.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../lihat-css/custom-lihat.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                <a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                <div class="brand-text d-none d-lg-inline-block"><span>SAMSAT </span><strong> Subang</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">           
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- End Navbar -->


      <div class="page-content d-flex align-items-stretch"> 
        
        <!-- Side Navbar -->
        <!-- <nav class="side-navbar"> -->
          <!-- Sidebar Header-->
          <!-- <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Nurfajrin Tikhobi</h1>
              <p>Web Designer</p>
            </div>
          </div> -->
          <!-- Sidebar Navidation Menus-->
          <!-- <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="index.php"> <i class="icon-home"></i>Halaman Utama </a></li>
            <li><a href="keloladata.php"> <i class="icon-grid"></i>Kelola Data </a></li>
            <li><a href="form.php"> <i class="icon-grid"></i> Form </a></li>
          </ul>
        </nav> -->
        <!-- End Sidebar -->

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom"> Kelola Data Pegawai </h2>
            </div>
          </header>

          <!-- Pembuatan Form -->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover" align="center" >
                  <h4>Data Pegawai</h4>
                  <hr>
                  <thead>
                    <tr>
                      <th> No </th>
                      <th> Nama Pegawai </th>
                      <th> Jenis Kelamin </th>
                      <th> Status</th>
                      <th> Pendidikan Terakhir</th>
                      <th> Tahun Masuk </th>
                      <th> Tahun Lulus</th>
                      <th> No Handphone </th>
                      <th> Alamat </th>      
                      <th> Action </th>            
                    </tr>
                    <tbody>

                    <?php 
                      require '../koneksi.php';
                      $no = 1;
                      $data =  mysqli_query($conn,"select * from pegawai ");
                      
                        while($d = mysqli_fetch_array($data)){
                        ?>
                          <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d['nama_pegawai']; ?></td>
                          <td><?php echo $d['jk']; ?></td>
                          <td><?php echo $d['status']; ?></td>
                          <td><?php echo $d['pendidikan_terakhir']; ?></td>
                          <td><?php echo $d['tahun_masuk']; ?></td>
                          <td><?php echo $d['tahun_lulus']; ?></td>
                          <td><?php echo $d['nope']; ?></td>
                          <td><?php echo $d['alamat']; ?></td>
                          <td>
                          <a href="editdatapegawai.php?id=<?php echo $d['id']; ?>"> 
                          <button class="btn btn-primary btn-xs" > <i class="edit"></i></button></a>
                          <a href="proseshapusproyek.php?id_proyek=<?php echo $d['id_proyek']; ?>" onclick="return confirm('Yakin Hapus data?');">
                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                          </td>
                        <?php
                        }
                      ?>


                    </tbody>
                    </tr>
                  </thead>
                </table>
                
                
                <a href="form.php" class="btn btn-primary">Tambah </a></button>


                <!-- Modal-->
                <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                  <div role="document" class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 id="exampleModalLabel" class="modal-title"> Masukan Data Pegawai </h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                      </div>
                      <div class="modal-body">
                        <form  action="" method="post">
                          <div class="form-group">
                            <label>Nama Lengkap Pegawai</label>
                            <input class=" form-control" name="nama_pegawai" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
                          </div>
                          <table border="0">
                            <div class="form-group-gender">   
                              <label> Jenis Kelamin </label>
                                <tr>
                                  <td width="100px"> <label class="container-radio">Laki-laki
                                    <input type="radio" name="jk" value="Laki-laki">
                                    <span class="checkmark"></span> 
                                  </td>
                                  <td> 
                                    <label class="container-radio">Perempuan
                                    <input type="radio" name="jk" value="Perempuan">
                                    <span class="checkmark"></span>
                                    </label>
                                  </td>
                                </tr>
                            </div>
                          </table>
                          <div class="form-group">       
                            <label>Status</label>
                            <select class="form-control" name="status" required oninvalid="this.setCustomValidity('Pilih Terlebih Dahulu')" oninput="setCustomValidity('')">
                              <option value="">Pilih Status</option>
                              <option value="Sudah Menikah">Sudah Menikah</option>
                              <option value="Belum Menikah">Belum Menikah</option>                    
                            </select>                                  
                          </div>
                          <div class="form-group">       
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" name="pendidikan_terakhir" required oninvalid="this.setCustomValidity('Pilih Terlebih Dahulu')" oninput="setCustomValidity('')">
                              <option value="">Pilih Pendidikan Terakhir</option>
                              <option value="SD" id="sd">SD</option>
                              <option value="SMP" id="smp">SMP</option>  
                              <option value="SMA" id="sma">SMA</option>
                              <option value="Perguruan Tinggi" id="perguruan_tinggi">Perguruan Tinggi</option>                  
                            </select>                                  
                          </div>
                          <div class="form-group">       
                            <label>Tahun Masuk</label>
                            <input class=" form-control" name="tahun_masuk" type="number" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"/>
                          </div>
                          <div class="form-group">       
                            <label>Tahun Lulus</label>
                            <input class=" form-control" name="tahun_lulus" type="number" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"/>
                          </div>
                          <div class="form-group">       
                            <label>No Handphone</label>
                            <input class=" form-control" name="nope" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"/>
                          </div>
                          <div class="form-group">
                            <label for="cname" >Alamat</label>
                            <textarea class="form-control" name="alamat" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" > </textarea>
                          </div>
                          

                          


                          <!-- <div class="form-group">
                          <input type="hidden"  name="id_user" placeholder="Disabled"  class="form-control" value="2">
                          </div> -->
                          
                          <!-- <div class="input-group mb-3">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile02">
                              <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                            </div>
                          </div> -->


                          <button type="submit" class="btn btn-primary">Tambah</button>
                          <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                          <button type="reset" class="btn btn-reset"> Reset </button>
                          

                        </form>
                      </div>
                    </div> 
                  </div>
                </div>
                <!-- <div class="modal-footer">
                </div> -->
              </div>
            </div>
          </section>
          <!-- End Form -->

        </div>
      </div>
    </div>

    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>