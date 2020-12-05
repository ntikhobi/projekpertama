<?php

    include '../koneksi.php';

    $id = $_POST['id'];
    $nama_pegawai = $_POST['nama_pegawai'];	
	$ttl = $_POST['ttl'];	
    $jk = $_POST['jk'];	
    $golongan = $_POST['golongan'];						
    $jabatan = $_POST['jabatan'];
    $tmt = $_POST['tmt'];	
	$status = $_POST['status'];	
	$jumlah_anak = $_POST['jumlah_anak'];
	$nama_pendamping = $_POST['nama_pendamping'];
	$pendidikan_terakhir = $_POST['pendidikan_terakhir'];	
	$nama_sekolah = $_POST['nama_sekolah'];	
	$tahun_masuk = $_POST['tahun_masuk'];	
	$tahun_lulus = $_POST['tahun_lulus'];	
	$nope = $_POST['nope'];	
	$alamat = $_POST['alamat'];
	// $lainnya = $_POST['lainnya'];
    

    $hasil = mysqli_query($conn, "UPDATE pegawai SET nama_pegawai='$nama_pegawai', ttl='$ttl', jk='$jk', golongan='$golongan', jabatan='$jabatan', tmt='$tmt', status='$status', 
    jumlah_anak='$jumlah_anak', nama_pendamping='$nama_pendamping', pendidikan_terakhir='$pendidikan_terakhir', 
    nama_sekolah='$nama_sekolah', tahun_masuk='$tahun_masuk', tahun_lulus='$tahun_lulus', nope='$nope', alamat='$alamat' WHERE id='$id'"); 


    if ($hasil) {
        echo "<script>
                alert('Data Berhasil Disimpan!');window.location='home.php';
              </script>";
    } else {
        echo "Data gagal di update";
    }

?>