
	<?php 
		include '../koneksi.php';


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
		
		
		$karsu = $_POST['karsu'];	
		$karis = $_POST['karis'];	
		$karpeg = $_POST['karpeg'];	
		$lainnya = $_POST['lainnya'];

			// menginput data ke database
			mysqli_query($conn,"INSERT INTO pegawai VALUES('','$nama_pegawai','$ttl','$jk','$golongan','$jabatan','$tmt','$status','$jumlah_anak',
			'$nama_pendamping','$pendidikan_terakhir','$nama_sekolah','$tahun_masuk','$tahun_lulus','$nope','$alamat','$karsu','$karis','$karpeg','$lainnya')");
	

			echo "<script>
					alert('Data Berhasil Disimpan!');window.location='home.php';
				  </script>";

	?>


<?php

use Mpdf\Tag\Header;

if ( isset($_POST['submit']) ) {
        $file = $_FILES['lainnya'];

        $fileName = $_FILES['lainnya']['name'];
        $fileTempName = $_FILES['lainnya']['tmp_name'];
        $fileSize = $_FILES['lainnya']['size'];
        $fileError = $_FILES['lainnya']['error'];
        $fileType = $_FILES['lainnya']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {

            if ($fileError === 0 ) {
                
                if ($fileSize < 200000) {
                    
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTempName, $fileDestination);

                    header("location: home.php?uploadsucces");

                } else {
                    echo "Ukuran file terlalu besar";
                }
            } else {
                echo "File Error";
            }
        } else {
            echo "File bukan format gambar";
        }
    }

?>