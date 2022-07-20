<?php include_once("../functions.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tambah Kamar | Hotel Transylvania</title>
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <script src="https://kit.fontawesome.com/81efd83dc2.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">(Logo hotel)</div>
                <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="pelanggan-view.php">Pelanggan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="kamar-view.php">Kamar</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="pemesanan-view.php">Pemesanan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="petugas-view.php">Petugas</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="pembayaran-view.php">Pembayaran</a>
                </div>
            </div>
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
                    <h6 class="mt-4 mb-3">
                        <span id="Day"></span>, <span id="Date"></span> - <span id="Time"></span> WIB
                    </h6>
                    <h4 class="text-center">Edit Kamar</h4>
                    <div class="row">
                      <div class="col-6 ps-4">
                        <form>
                    <div class="form-group mb-3">
                    <label for="NoKamar">No Kamar</label>
                    <input type="text" class="form-control" id="NoKamar" placeholder="No Kamar">
                    </div>
                    <div class="form-group mb-3">
                    <label for="JenisKamar">Jenis Kamar</label>
                    <input type="text" class="form-control" id="JenisKamar" placeholder="Jenis Kamar">
                    </div>
                    <div class="form-group mb-3">
                    <label for="Status">Status</label>
                    <input type="text" class="form-control" id="Status" placeholder="Status">
                    </div>
                    <div class="form-group mb-3">
                    <label for="Fasilitas">Fasilitas</label>
                    <input type="text" class="form-control" id="Fasilitas" placeholder="Fasilitas">
                    </div>
                    <div class="form-group mb-3">
                    <label for="Harga">Harga</label>
                    <input type="text" class="form-control" id="Harga" placeholder="Harga">
                    </div>
                    <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-3">Simpan</button>
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