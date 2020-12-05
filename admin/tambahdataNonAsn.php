
	<?php 
		include '../koneksi.php';


		$nama_pegawai = $_POST['nama_pegawai'];	
		$ttl = $_POST['ttl'];	
		$jk = $_POST['jk'];							
		$jabatan = $_POST['jabatan'];	
		$status = $_POST['status'];	
		$jumlah_anak = $_POST['jumlah_anak'];
		$nama_pendamping = $_POST['nama_pendamping'];
		$pendidikan_terakhir = $_POST['pendidikan_terakhir'];	
		$nama_sekolah = $_POST['nama_sekolah'];	
		$tahun_masuk = $_POST['tahun_masuk'];	
		$tahun_lulus = $_POST['tahun_lulus'];	
		$nope = $_POST['nope'];	
		$alamat = $_POST['alamat'];
		

			// menginput data ke database
			mysqli_query($conn,"INSERT INTO nonasn VALUES('','$nama_pegawai','$ttl','$jk','$jabatan','$status','$jumlah_anak',
			'$nama_pendamping','$pendidikan_terakhir','$nama_sekolah','$tahun_masuk','$tahun_lulus','$nope','$alamat')");
	

			echo "<script>
					alert('Data Berhasil Disimpan!');window.location='home.php';
				  </script>";


	?>