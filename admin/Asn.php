<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data Non ASN </title>
    <link rel="stylesheet" href="../lihat-css/nonAsn.css">
    <link rel="stylesheet" href="../lihat-css/style.default-lihat.css" id="theme-stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" class="">
</head>
<body> 
    
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

    <div class="intro">
        <label> DATA NON ASN </label>
    </div>

    <div class="container-table">
        <div class="table-responsive-md">
            <table class="table">
                <thead>
                    <tr>
                      <th> No </th>
                      <th> Nama Pegawai </th>
                      <th> T T L </th>
                      <th> Jenis Kelamin </th>
                      <th> Golongan </th>          
                      <th> Jabatan </th>
                      <th> TMT P3DW Subang </th> 
                      <th> Status</th>
                      <th> Jumlah Anak </th>
                      <th> Nama Suami / Istri </th>
                      <th> Pendidikan Terakhir</th>
                      <th> Nama PT / Sekolah </th>
                      <th> Tahun Masuk </th>
                      <th> Tahun Lulus</th>
                      <th> No Handphone </th>
                      <th> Alamat </th>
                    </tr>
                    <tr>
                      <th> Karsu </th>
                      <th> Karis </th>
                      <th> Karpeg </th>
                      <th> Lainnya </th>      
                      <th> Action </th>            
                    </tr>
                </thead>

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
                          <td><?php echo $d['ttl']; ?></td>
                          <td><?php echo $d['jk']; ?></td>                     
                          <td><?php echo $d['jabatan']; ?></td>
                          <td><?php echo $d['status']; ?></td>
                          <td><?php echo $d['jumlah_anak']; ?></td>
                          <td><?php echo $d['nama_pendamping']; ?></td>
                          <td><?php echo $d['pendidikan_terakhir']; ?></td>
                          <td><?php echo $d['nama_sekolah']; ?></td>
                          <td><?php echo $d['tahun_masuk']; ?></td>
                          <td><?php echo $d['tahun_lulus']; ?></td>
                          <td><?php echo $d['nope']; ?></td>
                          <td><?php echo $d['alamat']; ?></td>
                          <td>
                            <a href="editdata.php?id=<?php echo $d['id']; ?>"> 
                              <button class="btn btn-primary btn-xs" > 
                                <i class="fa fa-pencil-alt"></i>
                              </button>
                            </a>
                            <a href="hapusdata.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin Anda ingin menghapus <?php echo $d['nama_pegawai']; ?>?');">
                              <button class="btn btn-danger btn-xs">
                                <i class="fa fa-trash "></i>
                              </button>
                            </a>
                            <a href="hapusdata.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin Anda ingin menghapus <?php echo $d['nama_pegawai']; ?>?');">
                              <button class="btn btn-danger btn-xs">
                                <i class="fa fa-file-pdf "></i>
                              </button>
                            </a>
                          </td>
                          
                        <?php
                        }
                      ?>


                </tbody>
                </tr>
            </table>

            <a href="form.php" class="btn btn-primary"> Tambah </a>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
</body>
</html>