<?php require '../koneksi.php'; ?>

<?php

  session_start();

  if ( !isset($_SESSION["login"]) ) {
    header('location: index.php');
    exit;
  }

?>

<?php 
    $id = $_GET['id'];
    $result=mysqli_query($conn, "SELECT * FROM pegawai WHERE id='$id'")or die('Error In Session');
    $row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data ASN </title>
    <!-- <link rel="stylesheet" href="../lihat-css/cetak.css"> -->

    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">

    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" class=""> -->
</head>

<body> 
    
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

    <div class="intro">
        <p style="margin-top: 20px; margin-bottom:20px; text-align:center; font-weight:bold; font-size:20px;">
          DATA PEGAWAI ASN SAMSAT SUBANG 
    
        </p>
        
    </div>

    <style>

      table {
        margin:20px;
      }

      th, td {
      font-size: 14px;
      padding: 20px;
      }

      tr:hover {background-color:#f5f5f5;}
    
    </style>

    <center>
      <table>    
        <thead>
            <tr>
              <th> No </th>
              <th> Nama Pegawai </th>
              <th> TTL </th>     
              <th> Jenis Kelamin </th> 
              <th> Golongan </th>                          
              <th> Jabatan </th>
              <th> TMT </th> 
              <th> Status</th>
              <th> Jumlah Anak </th> 
              <th> Nama Pendamping </th> 
              <th> Pendidikan Terakhir</th>     
              <th> Nama Sekolah </th>    
              <th> Tahun Masuk </th>     
              <th> Tahun Lulus </th>   
              <th> No HP </th>        
              <th> Alamat </th> 
              <!-- <th> Lainnya </th>      -->                    
            </tr>
        </thead>
        
        <tbody>

        
        <?php 
          require '../koneksi.php';

          $no = 1;
          $data =  mysqli_query($conn,"SELECT * FROM pegawai WHERE id = '$id'");
          
            while($d = mysqli_fetch_array($data)){
        ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['nama_pegawai']; ?></td>
              <td><?php echo $d['ttl']; ?></td>
              <td><?php echo $d['jk']; ?></td>  
              <td><?php echo $d['golongan']; ?></td>                   
              <td><?php echo $d['jabatan']; ?></td>
              <td><?php echo $d['tmt']; ?></td>
              <td><?php echo $d['status']; ?></td>
              <td><?php echo $d['jumlah_anak']; ?></td>
              <td><?php echo $d['nama_pendamping']; ?></td>
              <td><?php echo $d['pendidikan_terakhir']; ?></td>
              <td><?php echo $d['nama_sekolah']; ?></td>
              <td><?php echo $d['tahun_masuk']; ?></td>
              <td><?php echo $d['tahun_lulus']; ?></td>
              <td><?php echo $d['nope']; ?></td>
              <td><?php echo $d['alamat']; ?></td>                                        
            </tr>
    
              
            
            <?php
              }
            ?>
                
          </tbody>  
        </table>            
    </center> 
    
      <table>
          <thead>
            <tr>
              <th> Karsu </th>
              <th> Karis </th>
              <th> Karpeg </th>
              <th> SK - Terbaru </th>
              <th> KGB </th>
              <th> KPE </th>
            </tr>
        </thead>
        <tbody>   
          <?php 
            require '../koneksi.php';

            $no = 1;
            $data =  mysqli_query($conn,"SELECT * FROM pegawai WHERE id = '$id'");
            
              while($d = mysqli_fetch_array($data)){
          ?>

          <tr>
            <td>
              <img src="../Asn/karsu/<?= $d['karsu'] ?>" width="280px" height="200px" alt="----" >
            </td>
            <td>
              <img src="../Asn/karis/<?= $d['karis'] ?>" width="280px" height="200px" alt="----" >
            </td>
            <td>
              <img src="../Asn/karpeg/<?= $d['karpeg'] ?>" width="280px" height="200px" alt="----" >
            </td>
            <td>
              <img src="../Asn/sk-terbaru/<?= $d['sk_terbaru'] ?>" width="250px" height="350px" alt="----" >
            </td>
            <td>
              <img src="../Asn/kgb/<?= $d['kgb'] ?>" width="250px" height="350px" alt="----" >
            </td>
            <td>
              <img src="../Asn/kpe/<?= $d['kpe'] ?>" width="280px" height="200px" alt="----" >
            </td>
          </tr>
          <?php
              }
            ?>
      </table>            
    
      <a href="cetak.php" target="_blank" style="float: right; margin-right:10%; margin-top:50px; ">
        <i class="fa fa-print" style="font-size:40px; text-align:center">
          <p style="font-size:14px; line-height:25px;"> Cetak Data ASN </p>
        </i>
      </a>
         
          
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
</body>
</html>