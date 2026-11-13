<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_tabelrak";

    $konek = mysqli_connect($host, $user, $password, $database);

    if (!$konek) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>