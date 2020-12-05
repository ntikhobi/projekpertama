<?php

use Mpdf\Tag\Header;

if ( isset($_POST['submit']) ) {
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTempName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

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