<?php 
include_once("../functions.php") 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tambah Kamar | Hotel Transylvania</title>
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
                    <div class="mt-4 pb-4"><span id="Day"></span><span id="Date"></span><span id="Time"></span></div>
                    <div class="row">
                        <div class="col-6 ps-4">
                            <form method="POST" action="">
                                <div class="form-group mb-3">
                                    <label for="NoKamar">No Kamar</label>
                                    <input type="text" class="form-control" id="NoKamar" placeholder="No Kamar">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Jenis Kamar</label>
                                    <select name="JenisKamar" class="form-control">
                                        <option value="">-- Pilih Jenis --</option>
                                        <option value="Standar">Standar</option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Family">Family</option>
                                        <option value="Suite">Suite</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Status">Status</label>
                                    <select name="Status" id="Status" class="form-control">
                                        <option value="">-- Pilih Status --</option>
                                        <option value="Lengkap">Lengkap</option>
                                        <option value="Tidak Lengkap">Tidak Lengkap</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Fasilitas">Fasilitas</label>
                                    <input type="text" name="fasilitas" class="form-control" id="Fasilitas" placeholder="Fasilitas">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Harga">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="Harga" placeholder="Harga">
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
