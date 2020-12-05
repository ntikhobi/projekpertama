<?php

    if ( isset ($_POST['option'])) {
        $option = $_POST['option'];
    } else {
        $option = NULL;
    }

    if ( $option != NULL ) {
        if ( $option != "Admin") {
            echo "$option Terkoneksi";
            header('location: user/index.php');
        } else {
            echo "$option Tidak Terkoneksi";
        }

        if ( $option != "User") {
            echo "$option Terkoneksi";
            header('location: admin/index.php');
        } else {
            echo "$option Tidak Terkoneksi";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lihat-css/style-awal.css">
</head>
<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
        <!-- Tabs Titles -->

        <div id="formFooter2">
            <p> Anda akan masuk sebagai.. </p>
        </div>

            <form action="" method="POST">
 
                    <div class="form-group-gender">                  

                            <label class="container-radio">Admin
                            <input type="radio" name="option" value="Admin">
                            </label> 
                            <br><br><br>
                            <label class="container-radio">User
                            <input type="radio" name="option" value="User">
                            </label>

                    </div>
      
                <p>
                <input type="submit" value="submit">
                </p>
            </form>

        </div>
    </div>


    
</body>
</html>