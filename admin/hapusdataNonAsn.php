<?php

    require '../fungsi.php';

    $id = $_GET['id'];

    if ( hapus_nonAsn ($id) > 0 ) {
        
        echo "
            <script>
              alert('Data Berhasil dihapus!');window.location='home.php';
            </script>
      ";

    } else {
      echo "
            <script>
              alert('Data Gagal dihapus');window.location='home.php';
            </script>
      ";
    }


?>