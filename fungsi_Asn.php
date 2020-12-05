<?php 
$conn = mysqli_connect("localhost","root","","data_samsat");
 
// Check connection
    if (mysqli_connect_errno()){

    echo "Koneksi database gagal : " . mysqli_connect_error();
    }
    // } else
    // echo "Koneksi berhasil";

    function tambah_Asn ($data) {
        global $conn;
 
        $nama_pegawai = htmlspecialchars($data['nama_pegawai']);	
        $ttl = htmlspecialchars($data['ttl']);	
        $jk = htmlspecialchars($data['jk']);
        $golongan = htmlspecialchars($data['golongan']);							
        $jabatan = htmlspecialchars($data['jabatan']);	
        $tmt = htmlspecialchars($data['tmt']);
        $status = htmlspecialchars($data['status']);	
        $jumlah_anak = $data['jumlah_anak'];
        $nama_pendamping = htmlspecialchars($data['nama_pendamping']);
        $pendidikan_terakhir = $data['pendidikan_terakhir'];	
        $nama_sekolah = htmlspecialchars($data['nama_sekolah']);	
        $tahun_masuk = $data['tahun_masuk'];	
        $tahun_lulus = $data['tahun_lulus'];	
        $nope = htmlspecialchars($data['nope']);	
        $alamat = htmlspecialchars($data['alamat']);
    
        // upload gambar karsu
        $karsu = karsu();

        if ( !$karsu ) {
            return false;
        }

        $karis = karis();

        if ( !$karis ) {
            return false;
        }

        $karpeg = karpeg();
        
        if ( !$karpeg ) {
            return false;
        }

        $sk_terbaru = sk_terbaru();
        
        if ( !$sk_terbaru ) {
            return false;
        }

        $kgb = kgb();
        
        if ( !$kgb ) {
            return false;
        }

        $kpe = kpe();
        
        if ( !$kpe ) {
            return false;
        }

        $query = "INSERT INTO pegawai 
                    VALUES
                ('','$nama_pegawai','$ttl','$jk','$golongan','$tmt','$jabatan','$status','$jumlah_anak',
                '$nama_pendamping','$pendidikan_terakhir','$nama_sekolah','$tahun_masuk',
                '$tahun_lulus','$nope','$alamat','$karsu','$karis','$karpeg','$sk_terbaru','$kgb','$kpe')
                ";

        mysqli_query($conn, $query);
        
         return mysqli_affected_rows($conn);

    }


    function karsu() {
    
        $namaFile = $_FILES['karsu'] ['name'];
        $ukuranFile = $_FILES['karsu'] ['size'];
        $error = $_FILES['karsu'] ['error'];
        $tmpName = $_FILES['karsu'] ['tmp_name'];
    
        // cek karsu
        if ( $error === 4 ) {
            echo "<script>
                alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
            
        }
    
        //yang boleh di upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
    
    
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            
            echo "<script>
                alert('yang Anda upload bukan gambar');
              </script>";
            return false;
        }
    
        // cek jika yang diupload terlalu besar
        if ( $ukuranFile > 5000000) {
            
            echo "<script>
                alert('ukuran gambar terlalu besar');
              </script>";
            return false;
        }
    
        //gambar siap diupload
        move_uploaded_file($tmpName, '../Asn/karsu/' . $namaFile);
    
        return $namaFile;
    
    }


    function karis() {
    
        $namaFile = $_FILES['karis'] ['name'];
        $ukuranFile = $_FILES['karis'] ['size'];
        $error = $_FILES['karis'] ['error'];
        $tmpName = $_FILES['karis'] ['tmp_name'];
    
        // cek karsu
        if ( $error === 4 ) {
            echo "<script>
                alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
            
        }
    
        //yang boleh di upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
    
    
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            
            echo "<script>
                alert('yang Anda upload bukan gambar');
              </script>";
            return false;
        }
    
        //cek jika yang diupload terlalu besar
        if ( $ukuranFile > 5000000) {
            
            echo "<script>
                alert('ukuran gambar terlalu besar');
              </script>";
            return false;
        }
    
        //gambar siap diupload
        move_uploaded_file($tmpName, '../Asn/karis/' . $namaFile);
    
        return $namaFile;
    
    }

    function karpeg() {
    
        $namaFile = $_FILES['karpeg'] ['name'];
        $ukuranFile = $_FILES['karpeg'] ['size'];
        $error = $_FILES['karpeg'] ['error'];
        $tmpName = $_FILES['karpeg'] ['tmp_name'];
    
        // cek karsu
        if ( $error === 4 ) {
            echo "<script>
                alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
            
        }
    
        //yang boleh di upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
    
    
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            
            echo "<script>
                alert('yang Anda upload bukan gambar');
              </script>";
            return false;
        }
    
        //cek jika yang diupload terlalu besar
        if ( $ukuranFile > 5000000) {
            
            echo "<script>
                alert('ukuran gambar terlalu besar');
              </script>";
            return false;
        }
    
        //gambar siap diupload
        move_uploaded_file($tmpName, '../Asn/karpeg/' . $namaFile);
    
        return $namaFile;
    
    }


    function sk_terbaru() {
    
        $namaFile = $_FILES['sk_terbaru'] ['name'];
        $ukuranFile = $_FILES['sk_terbaru'] ['size'];
        $error = $_FILES['sk_terbaru'] ['error'];
        $tmpName = $_FILES['sk_terbaru'] ['tmp_name'];
    
        // cek karsu
        if ( $error === 4 ) {
            echo "<script>
                alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
            
        }
    
        //yang boleh di upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
    
    
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            
            echo "<script>
                alert('yang Anda upload bukan gambar');
              </script>";
            return false;
        }
    
        //cek jika yang diupload terlalu besar
        if ( $ukuranFile > 5000000) {
            
            echo "<script>
                alert('ukuran gambar terlalu besar');
              </script>";
            return false;
        }
    
        //gambar siap diupload
        move_uploaded_file($tmpName, '../Asn/sk-terbaru/' . $namaFile);
    
        return $namaFile;
    
    }

    function kgb() {
    
        $namaFile = $_FILES['kgb'] ['name'];
        $ukuranFile = $_FILES['kgb'] ['size'];
        $error = $_FILES['kgb'] ['error'];
        $tmpName = $_FILES['kgb'] ['tmp_name'];
    
        // cek karsu
        if ( $error === 4 ) {
            echo "<script>
                alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
            
        }
    
        //yang boleh di upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
    
    
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            
            echo "<script>
                alert('yang Anda upload bukan gambar');
              </script>";
            return false;
        }
    
        //cek jika yang diupload terlalu besar
        if ( $ukuranFile > 5000000) {
            
            echo "<script>
                alert('ukuran gambar terlalu besar');
              </script>";
            return false;
        }
    
        //gambar siap diupload
        move_uploaded_file($tmpName, '../Asn/kgb/' . $namaFile);
    
        return $namaFile;
    
    }

    function kpe() {
    
        $namaFile = $_FILES['kpe'] ['name'];
        $ukuranFile = $_FILES['kpe'] ['size'];
        $error = $_FILES['kpe'] ['error'];
        $tmpName = $_FILES['kpe'] ['tmp_name'];
    
        // cek karsu
        if ( $error === 4 ) {
            echo "<script>
                alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
            
        }
    
        //yang boleh di upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
    
    
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            
            echo "<script>
                alert('yang Anda upload bukan gambar');
              </script>";
            return false;
        }
    
        //cek jika yang diupload terlalu besar
        if ( $ukuranFile > 5000000) {
            
            echo "<script>
                alert('ukuran gambar terlalu besar');
              </script>";
            return false;
        }
    
        //gambar siap diupload
        move_uploaded_file($tmpName, '../Asn/kpe/' . $namaFile);
    
        return $namaFile;

    }

?>