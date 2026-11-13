<?php
    require 'konek.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(
            !empty($_POST['nama_zona']) && 
            !empty($_POST['no_lorong']) &&
            !empty($_POST['kode_rak']) &&
            !empty($_POST['kapasitas_fisik'])
        ){
            $nama_zona = $_POST['nama_zona'];
            $no_lorong = $_POST['no_lorong'];
            $kode_rak = $_POST['kode_rak'];
            $kapasitas_fisik = $_POST['kapasitas_fisik'];

            $query = "INSERT INTO rak (nama_zona, no_lorong, kode_rak, kapasitas_fisik) 
            VALUES ('$nama_zona', '$no_lorong', '$kode_rak', '$kapasitas_fisik')";

            $hasil = mysqli_query($konek, $query);

            if ($hasil) {
                header("Location: main_zonasi_rak.php");
                exit;
            } else {
                echo "Gagal menyimpan data: " . mysqli_error($konek);
            }

        } else {
            echo "Data tidak lengkap, silakan isi semua field.";
        }
    }
?>