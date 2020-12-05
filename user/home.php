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

  <title> Halaman Utama </title>

  <!-- Bootstrap Core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Modal -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Button dengan fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
              <button data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="Tambah Data untuk ASN" data-target="#myModal" 
              style="background:none; border:none; display:inline-block;">
                <i class="fas fa-edit" style="font-size:20px"></i>   
                <span class="tooltip"> Tambah data Asn </span>           
              </button>
            </li>
            <li>
              <button data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="Tambah Data untuk Non ASN" data-target="#myModal2" 
              style="background:none; border:none; display:inline-block;">
                <i class="far fa-edit" style="font-size:20px"></i>               
              </button>
              </a>
            </li>
            <li>
              <a href="tentangkita.php" data-toggle="tooltip" data-placement="bottom" title="Tentang kita">
                <i class="fas fa-users" style="font-size:20px">
                </i>
              </a>
            </li>
            <li>
              <a href="logout.php" data-toggle="tooltip" data-placement="bottom" title="Keluar">
                <i class="fa fa-sign-out-alt" style="font-size:20px"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="cta-intro">
          <a href="https://bapenda.jabarprov.go.id/cabang-pelayanan-pendapatan-daerah-kabupaten-subang/" class="btn btn-xl btn-dark" target="_blank"> Info Lengkap </a>
        </div>
      </div>
      <div class="overlay"></div>
    </header>
    <!-- End Header -->

    <!-- Modal untuk Form ASN-->
    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title"> Tambah Data ASN </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">

            <form  action="lihatdataAsn.php" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label>Nama Lengkap Pegawai</label>
                <input class=" form-control" name="nama_pegawai" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <div class="form-group">
                <label>Tempat, tanggal lahir</label>
                <input class=" form-control" name="ttl" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <table border="0">
                <div class="form-group-gender">                  
                  <label> Jenis Kelamin</label>
                  <tr>
                    <td width="100px"> 
                      <label class="container-radio">Laki-laki
                        <input type="radio" name="jk" value="Laki-laki">
                        <span class="checkmark"></span>
                      </label> 
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
                <label>Pangkat / Golongan</label>
                <input class=" form-control" name="golongan" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <!-- Jabatan -->
              <div class="form-group">
                <label>Jabatan</label>
                <input class=" form-control" name="jabatan" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>
                
              <div class="form-group">
                <label>TMT P3DW Subang</label>
                <input class=" form-control" name="tmt" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <div class="form-group">       
                <label>Status</label>
                <select class="form-control" name="status" required oninvalid="this.setCustomValidity('Pilih Terlebih Dahulu')" oninput="setCustomValidity('')">
                  <option value="">Pilih Status</option>
                  <option value="Sudah Menikah">Sudah Menikah</option>
                  <option value="Belum Menikah">Belum Menikah</option>                    
                </select>                                  
              </div>

              <div class="form-group">       
                <label> Jumlah Anak </label>
                <input class=" form-control" name="jumlah_anak" type="number" />
              </div>

              <div class="form-group">
                <label> Nama Suami / Istri </label>
                <input class=" form-control" name="nama_pendamping" type="text" />
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
                <label>Nama Perguruan Tinggi / Sekolah </label>
                <input class=" form-control" name="nama_sekolah" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"/>
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
                <input class="form-control" name="alamat" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" />
              </div>

              <div class="form-group">
                <p style="font-style:italic; margin-left:30px;"> * harap isikan semua form, file upload maksimal 4mb dan berformat (jpg, jpeg, png)</p>
              </div>


              <label for="cname" > Kartu Suami (KARSU) </label>
                <br>
                <input type="file" name="karsu" id="inputGroupFile02">
                <br><br>


              <label for="cname" > Kartu Istri (KARIS) </label>
              <br>
                <input type="file" name="karis" id="inputGroupFile02">
                <br><br>


              <label for="cname" > Kartu Pegawai (KARPEG) </label>
              <br>
                <input type="file" name="karpeg" id="inputGroupFile02">
                <br><br>


              <label for="cname" > SK TERBARU </label>
              <br>
                <input type="file" name="sk_terbaru" id="inputGroupFile02">
                <br><br>


              <label for="cname" > Kenaikan Gaji Berkala (KGB) </label>
              <br>
                <input type="file" name="kgb" id="inputGroupFile02">
                <br><br>


              <label for="cname" > Kartu Pegawai Elektronik (KPE) </label>
              <br>
                <input type="file" name="kpe" id="inputGroupFile02">
                <br><br>
                            
              <button type="submit" class="btn btn-primary" name="tambahdata">Tambah</button>
              <button type="button" data-dismiss="modal-2" class="btn btn-secondary">Cancel</button>
              <button type="reset" class="btn btn-reset"> Reset </button>

            </form>
            <!-- End Form -->

          </div>
        </div>
      </div>
    </div>

    <!-- Modal untuk Form Non ASN-->
    <div id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title"> Tambah Data Non ASN </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">

            <form  action="lihatdataNonAsn.php" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label>Nama Lengkap Pegawai</label>
                <input class=" form-control" name="nama_pegawai" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <!-- Tempat tanggal lahir -->
              <div class="form-group">
                <label>Tempat, tanggal lahir</label>
                <input class=" form-control" name="ttl" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <table border="0">
                <div class="form-group-gender">                  
                  <label> Jenis Kelamin</label>
                  <tr>
                    <td width="100px"> 
                      <label class="container-radio">Laki-laki
                        <input type="radio" name="jk" value="Laki-laki">
                        <span class="checkmark"></span>
                      </label> 
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

              <!-- Jabatan -->
              <div class="form-group">
                <label>Jabatan</label>
                <input class=" form-control" name="jabatan" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" autofocus />
              </div>

              <div class="form-group">       
                <label>Status</label>
                <select class="form-control" name="status" required oninvalid="this.setCustomValidity('Pilih Terlebih Dahulu')" oninput="setCustomValidity('')">
                  <option value="">Pilih Status</option>
                  <option value="Sudah Menikah">Sudah Menikah</option>
                  <option value="Belum Menikah">Belum Menikah</option>                    
                </select>                                  
              </div>

              <div class="form-group">       
                <label> Jumlah Anak </label>
                <input class=" form-control" name="jumlah_anak" type="number" />
              </div>

              <div class="form-group">
                <label> Nama Suami / Istri </label>
                <input class=" form-control" name="nama_pendamping" type="text" />
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
                <label>Nama Perguruan Tinggi / Sekolah </label>
                <input class=" form-control" name="nama_sekolah" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"/>
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
                <input class="form-control" name="alamat" type="text" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" />
              </div>

              <label for="cname" > File Gambar </label>
              <div class="custom-file" style="margin-bottom: 20px;">               
                <input type="file" class="custom-file-input" id="inputGroupFile02" name="gambar">
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
              </div>
                            
              <button type="submit" name="tambahdata" class="btn btn-primary">Tambah </button>
              <button type="button" data-dismiss="modal-2" class="btn btn-secondary">Batal</button>
              <button type="reset" class="btn btn-reset"> Reset </button>

            </form>
          <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
   
    
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

  <!-- Effek tooltip js -->
  <script>   
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });    
    </script>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>
