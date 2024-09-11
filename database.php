<?php

    $db_Server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "rellperpus";
    $con = "";

    $conn = mysqli_connect($db_Server, $db_user, $db_pass, $db_name);

    if ($conn) {
        echo "Koneksi Berhasil";
    } else {
        echo "Koneksi Gagal";
    }
?>