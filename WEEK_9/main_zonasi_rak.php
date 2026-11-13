<?php
    require 'konek.php';
    $query = "SELECT * FROM rak";
    $result = mysqli_query($konek, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zonasi & Rak Gudang</title>
    <link rel="stylesheet" href="Asset/UI/tabelInput.css">
    <link rel="stylesheet" href="Asset/UI/header.css">
</head>
<body>
    <div class="main">
        <?php require 'Layout/header.php'; ?>

        <main>
            <div class="tabel-toolbar">
                <div class="tambah-rak">
                    <a href="input_zonasi_rak.php" class="tombol-tambah">Tambah Rak</a>
                </div>
                <div class="search-box-tabel">
                    <img src="Asset/search_icon_tabel.svg" alt="search-table" class="search-icon-tabel">
                    <input type="text" class="search-box-tabel-placeholder" placeholder="Cari di Tabel...">
                </div>
            </div>
            <table class="tabel-rak">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Zona</th>
                        <th>No. Lorong</th>
                        <th>Kode Rak</th>
                        <th>Kapasitas</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                    
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php while ($rak = mysqli_fetch_assoc($result)): ?>
                        <tr class="<?= ($nomor % 2 == 0) ? 'kolom-genap' : 'kolom-ganjil' ?>">
                            <td><?= $nomor ?></td>
                            <td><?= $rak['nama_zona'] ?></td>
                            <td><?= $rak['no_lorong'] ?></td>
                            <td><?= $rak['kode_rak'] ?></td>
                            <td><?= $rak['kapasitas_fisik'] ?> Kg</td>
                            <td>
                                <button class="tombol-edit">
                                    <img src="Asset/Edit.svg" alt="Edit" class="icon-aksi">
                                </button>
                                <button class="tombol-hapus">
                                    <img src="Asset/Delete.svg" alt="Delete" class="icon-aksi">
                                </button>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php endwhile; ?>
                </tbody>

            </table>
        </main>
    </div>
        
</body>
</html>