<?php

    include '../koneksi.php';

    $id = $_GET['id'];

    $query = "DELETE FROM pegawai WHERE id = $id";

    $hasil = mysqli_query($conn,$query);

    if ($hasil) {
        header('location:home.php');
    } else {
        echo "Data gagal di hapus";
    }


?>