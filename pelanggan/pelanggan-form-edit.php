<?php include_once("../functions.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Pelanggan | Hotel Transylvania</title>
        <?php include_once "../head.php"; ?>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
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
                    <h6 class="mt-4">
                        <span id="Day"></span>, <span id="Date"></span> - <span id="Time"></span> WIB
                    </h6>
                    <div class="row">
                        <div class="col-6 ps-4">
                            <?php
                            if (isset($_GET["nik"])) {
                                $db = dbConnect();
                                $nik = $db -> escape_string($_GET["nik"]);
                                $sql = "SELECT * FROM tpelanggan WHERE nik = '$nik'";
                                if ($edit = ambilsatubaris($db, $sql)) {
                                    ?>
                                    <form>
                                        <div class="form-group mb-3">
                                            <label for="nik">NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Format NIK 16 digit angka. Contoh 31xxxxxxxxxxxxxx" value="<?= $edit["nik"]; ?>" readonly>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pelanggan" value="<?= $edit["nama_pelanggan"]; ?>">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="telp">No Telepon</label>
                                            <input type="text" class="form-control" id="telp" name="telp" placeholder="Format No Telp 08xxx atau 628xxxx" value="<?= $edit["telepon"]; ?>">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="pengguna">Nama Pengguna</label>
                                            <input type="text" class="form-control" id="pengguna" name="pengguna" placeholder="Nama Pengguna" value="<?= $edit["nama_pengguna"]; ?>">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary mr-3" name="tblTambah">Tambah</button>
                                        </div>
                                    </form>
                                    <?php
                                }
                            } else {
                                ?>
                                <div class="alert alert-secondary" role="alert">
                                    NIK tidak ditemukan
                                </div>
                                <?php
                            }
                            ?>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
