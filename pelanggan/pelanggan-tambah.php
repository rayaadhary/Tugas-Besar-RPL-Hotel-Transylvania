<?php include_once("../functions.php") 
?>
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
                    <div class="mt-4 pb-4"><span id="Day"></span><span id="Date"></span><span id="Time"></span></div>
                    <div class="row">
                        <div class="col-6 ps-4">
                            <form>
                                <div class="form-group mb-3">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Format NIK 16 digit angka. Contoh 31xxxxxxxxxxxxxx">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pelangga">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="telp">No Telepon</label>
                                    <input type="text" class="form-control" id="telp" name="telp" placeholder="Format No Telp 08xxx atau 628xxxx">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="pengguna">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="pengguna" name="pengguna" placeholder="Nama Pengguna">
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
