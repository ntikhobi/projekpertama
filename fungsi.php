<?php 
$conn = mysqli_connect("localhost","root","","data_samsat");
 
// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
    }
    // } else
    // echo "Koneksi berhasil";
?>


<?php

function registrasi ($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username apakah ada
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if ( mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar')
              </script>";
        return false;
    }


    //cek konfirmasi password
    if ( $password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
        
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}

?>


<?php

function regis ($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username apakah ada
    $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

    if ( mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar')
              </script>";
        return false;
    }


    //cek konfirmasi password
    if ( $password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
        
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan ke database
    mysqli_query($conn, "INSERT INTO admin VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}

?>


<?php

    function tambah_nonAsn ($data) {
        global $conn;
 
        $nama_pegawai = htmlspecialchars($data['nama_pegawai']);	
        $ttl = htmlspecialchars($data['ttl']);	
        $jk = htmlspecialchars($data['jk']);							
        $jabatan = htmlspecialchars($data['jabatan']);	
        $status = htmlspecialchars($data['status']);	
        $jumlah_anak = $data['jumlah_anak'];
        $nama_pendamping = htmlspecialchars($data['nama_pendamping']);
        $pendidikan_terakhir = $data['pendidikan_terakhir'];	
        $nama_sekolah = htmlspecialchars($data['nama_sekolah']);	
        $tahun_masuk = $data['tahun_masuk'];	
        $tahun_lulus = $data['tahun_lulus'];	
        $nope = htmlspecialchars($data['nope']);	
        $alamat = htmlspecialchars($data['alamat']);

        //upload gambar
        $gambar = upload_nonAsn();

        if ( !$gambar ) {
            return false;
        }

        $query = "INSERT INTO nonasn 
                    VALUES
                ('','$nama_pegawai','$ttl','$jk','$jabatan','$status','$jumlah_anak',
                '$nama_pendamping','$pendidikan_terakhir','$nama_sekolah','$tahun_masuk',
                '$tahun_lulus','$nope','$alamat','$gambar')
                ";

        mysqli_query($conn, $query);
        
        
        return mysqli_affected_rows($conn);

    }

?>

<?php

    function hapus_nonAsn ($id) {

        global $conn;

        mysqli_query($conn, "DELETE FROM nonasn WHERE id = $id");

        return mysqli_affected_rows($conn);

    }

?>


<!-- Fungsi ubahdata tidak terpakai -->
<?php

    function ubah_nonAsn ($data) {
        global $conn;
 
        $id = $_POST['id'];
        $nama_pegawai = htmlspecialchars($data['nama_pegawai']);	
        $ttl = htmlspecialchars($data['ttl']);	
        $jk = htmlspecialchars($data['jk']);							
        $jabatan = htmlspecialchars($data['jabatan']);	
        $status = htmlspecialchars($data['status']);	
        $jumlah_anak = $data['jumlah_anak'];
        $nama_pendamping = htmlspecialchars($data['nama_pendamping']);
        $pendidikan_terakhir = $data['pendidikan_terakhir'];	
        $nama_sekolah = htmlspecialchars($data['nama_sekolah']);	
        $tahun_masuk = $data['tahun_masuk'];	
        $tahun_lulus = $data['tahun_lulus'];	
        $nope = htmlspecialchars($data['nope']);	
        $alamat = htmlspecialchars($data['alamat']);

        $query = "UPDATE nonasn SET 
                    nama_pegawai='$nama_pegawai', ttl='$ttl', jk='$jk', 
                    jabatan='$jabatan', status='$status', 
                    jumlah_anak='$jumlah_anak', nama_pendamping='$nama_pendamping', 
                    pendidikan_terakhir='$pendidikan_terakhir', 
                    nama_sekolah='$nama_sekolah', tahun_masuk='$tahun_masuk', 
                    tahun_lulus='$tahun_lulus', nope='$nope', alamat='$alamat' 
                WHERE id=$id";

        mysqli_query($conn, $query);
        
        
        var_dump(mysqli_affected_rows($conn));

    }

?>

<?php

    function upload_nonAsn () {

        $namaFile = $_FILES['gambar'] ['name'];
        $ukuranFile = $_FILES['gambar'] ['size'];
        $error = $_FILES['gambar'] ['error'];
        $tmpName = $_FILES['gambar'] ['tmp_name'];

        // cek gambar
        if ( $error == 4 ) {
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
        move_uploaded_file($tmpName, '../non_Asn/' . $namaFile);

        return $namaFile;
    }

?>