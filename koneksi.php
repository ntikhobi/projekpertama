<?php 
$conn = mysqli_connect("localhost","root","","data_samsat");
 
// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
    }
    // } else
    // echo "Koneksi berhasil";
?>
