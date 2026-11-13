<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Rak</title>
    <link rel="stylesheet" href="Asset/UI/formInput.css">
    <link rel="stylesheet" href="Asset/UI/header.css">
</head>
<body>
    <div class="main">
        <?php require 'Layout/header.php'; ?>
    
        <div class="form-input">
            <div class="form-header">
                <h2>FORM TAMBAH RAK</h2>
            </div>

            <form action="data_zonasi_rak.php" method="POST" class="form-body">
                <label for="nama_zona">Nama Zona</label>
                <select name="nama_zona" id="nama_zona">
                    <option value="">Pilih Zona</option>
                    <option value="A">Zona A</option>
                    <option value="B">Zona B</option>
                    <option value="C">Zona C</option>
                    <option value="D">Zona D</option>
                </select>

                <label for="no_lorong">Lorong</label>
                <select name="no_lorong" id="no_lorong">
                    <option value="">Pilih Lorong</option>
                    <option value="L-01">L-01</option>
                    <option value="L-02">L-02</option>
                    <option value="L-03">L-03</option>
                    <option value="L-04">L-04</option>
                </select>

                <label for="kode_rak">Kode Rak</label>
                <select name="kode_rak" id="kode_rak">
                    <option value="">Pilih Rak</option>
                    <option value="R-01">R-01</option>
                    <option value="R-02">R-02</option>
                    <option value="R-03">R-03</option>
                    <option value="R-04">R-04</option>
                </select>

                <label for="kapasitas_fisik">Kapasitas</label>
                <small>Cth: 1000 Kg</small>
                <input type="text" id="kapasitas_fisik" name="kapasitas_fisik" placeholder="Input Kapasitas Fisik">

                <div class="form-action">
                    <a href="main_zonasi_rak.php" class="tombol-batal">Batal</a>
                    <button type="submit" class="tombol-simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>