<?php

include_once("../functions.php");

if (isset($_POST['tblTambah'])) {
    if ($db->connect_errno == 0) {
        $nik = $db->escape_string(trim($_POST['nik']));
        $nama = $db->escape_string(trim($_POST['nama']));
        $telp = $db->escape_string(trim($_POST['telp']));
        $pengguna = $db->escape_string(trim($_POST['pengguna']));
        $password = $db->escape_string(base64_encode($_POST['password']));

        $query = $db->query("SELECT * FROM tpelanggan WHERE nik = '$nik'");
        if ($query->num_rows > 0)
            $salah .= "NIK sudah terdaftar.<br>";

        if (!is_numeric($nik) || strlen($nik) == 0 ||strlen($nik) != 16)
            $salah .= "NIK berupa angka 16 digit dan harus diisi.<br>";
    
        if (is_numeric($nama) || strlen($nama) > 30)
            $salah .= "Nama tidak boleh berisi angka dan tidak boleh lebih dari 30 karakter.<br>";

        if (!is_numeric($telp) || strlen($telp) > 13)
            $salah .= "Telepon harus angka dan tidak boleh lebih dari 13 digit.<br>";

        if (strlen($pengguna) == 0 || strlen($pengguna) > 10)
            $salah .= "Nama Pengguna harus harus diisi dan tidak boleh lebih dari 10 karakter.<br>";

        $query = $db->query("SELECT * FROM tpengguna WHERE pengguna = '$pengguna'");
        if ($query->num_rows > 0)
            $salah .= "Nama Pengguna sudah terdaftar.<br>";
            
        if (strlen($password) == 0 || strlen($password) > 8)
            $salah .= "Kata Sandi harus harus diisi dan tidak boleh lebih dari 8 karakter.<br>";

        if ($salah == "") {
?>
            <div class="alert alert-primary" role="alert">
                Tidak terjadi kesalahan. Semua data valid. Data akan disimpan ke database
            </div>
            <?php
            $query = "INSERT INTO tpelanggan VALUES ('$nik','$nama','$telp','$pengguna', '$password')";
            $res =  $db->query($query);
            if ($res) {
                if ($db->affected_rows > 0) {
            ?>
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            Data berhasil disimpan.
                        </div>
                    </div>
                    <br>
                    <a href="barang.php" class="btn btn-dark">Tampil Barang</a>
                <?php
                }
            } else {
                ?>
                Data gagal disimpan karena NIK mungkin sudah ada.<br>
                <a href=javascript:history.back(); class="btn btn-dark">Kembali</a>
            <?php
            }
        } else {
            ?>
            <div class="d-flex justify-content-center">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title fs-5">Terjadi kesalahan sebagai berikut</h5>
                        <p class="card-text"><?= $salah; ?></p>
                        <a href=javascript:history.back(); class="btn btn-primary">Kembali Ke Form</a>
                    </div>`
                </div>
            </div>
<?php
        }
    } else
        echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>";
}
?>
</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah Pelanggan | Hotel Transylvania</title>
    <?php include_once "../head.php"; ?>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <?php include_once("../sidebar-petugas.php"); ?>

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
                <div class="container-fluid justify-content-center">
                    <a class="navbar-brand text-light" href="#">Selamat Datang di Hotel Transylvania</a>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <!-- <h2>Tambah Data</h2> -->
                <h6 class="mt-4">
                    <span id="Day"></span>, <span id="Date"></span> - <span id="Time"></span> WIB
                </h6>
                <div class="row">
                    <div class="col-6 ps-4">
                        <form method="POST" class="was-validated">
                            <div class="form-group mb-3">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Diisi 16 digit angka" required>
                                <div class="invalid-feedback">
                                    Harap isi NIK
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Maks. 30 karakter" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="telp">Nomor Telepon</label>
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="Format No Telp 08xxx atau 628xxxx" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="pengguna">Nama Pengguna</label>
                                <input type="text" class="form-control" id="pengguna" name="pengguna" placeholder="Maks. 10 karakter" required>
                                <div class="invalid-feedback">
                                    Harap isi Nama Pengguna
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Maks. 8 karakter" required>
                                <div class="invalid-feedback">
                                    Harap isi Kata Sandi
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mr-3" name="tblTambah">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>