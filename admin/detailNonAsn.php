<?php require '../koneksi.php'; ?>

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data Non ASN </title>
    <link rel="stylesheet" href="../lihat-css/cetak.css">
    
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">

    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" class=""> -->
</head>

<?php 
    $id = $_GET['id'];
    $result=mysqli_query($conn, "select * from nonasn where id='$id'")or die('Error In Session');
    $row=mysqli_fetch_array($result);
?>

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
            <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End Navbar -->

    <div class="intro">
         <p style="margin-top: 20px; margin-bottom:20px; font-weight:200"> DATA PEGAWAI NON ASN <BR> SAMSAT SUBANG </p>
    </div>

    <style>
      table {
        line-height: 5px;
      }
    
    </style>

            
            <?php 
              require '../koneksi.php';
              $no = 1;
              $data =  mysqli_query($conn,"SELECT * FROM nonasn WHERE id = '$id'");
              
                while($d = mysqli_fetch_array($data)){
            ?>
         
          <center>
           
            <table border="0">       
               
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Nama Pegawai </th> 
                  <td  style="text-align: center;"> : </td> 
                  <td style="padding:10px;"><?php echo $d['nama_pegawai']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Tempat, tanggal lahir </th>
                  <td style="text-align: center;"> : </td> 
                  <td style="padding:10px;"><?php echo $d['ttl']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Jenis Kelamin </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['jk']; ?></td>    
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Jabatan </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['jabatan']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Status </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['status']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Jumlah Anak </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['jumlah_anak']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Nama Suami / Istri </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['nama_pendamping']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Pendidikan Terakhir  </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['pendidikan_terakhir']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Nama PT / Sekolah </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['nama_sekolah']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Tahun Masuk  </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['tahun_masuk']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Tahun Lulus </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['tahun_lulus']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> No Handphone </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['nope']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Alamat </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;"><?php echo $d['alamat']; ?></td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Gambar </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;">
                  <img src="../non_Asn/<?= $d['gambar'] ?>" width="250px" height="300px" alt="">
                  </td>
                </tr>
                <tr>
                  <th style="width: 200px; padding:10px; text-align:left;"> Action </th>
                  <td style="text-align: center;"> : </td>
                  <td style="padding:10px;">
                    <a href="editdataNonAsn.php?id=<?php echo $d['id']; ?>"> editdata | </a>
                    <a href="hapusdataNonAsn.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin Anda ingin menghapus <?php echo $d['nama_pegawai']; ?>');">
                      hapusdata |
                    </a>
                    <a href="hapusdata.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin Anda ingin menghapus <?php echo $d['nama_pegawai']; ?>');">
                      print pdf
                    </a>
                    <a href="cetak_NonAsn.php?id=<?php echo $d['id']; ?>"><button class="btn btn-secondary"> edit data </button></a>
                  </td>
                  
                </tr>
              </table>
              
            </center> 

            <?php } ?>
      
   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
</body>
</html>