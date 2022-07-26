<?php include_once("../functions.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hotel Transylvania</title>
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <script src="https://kit.fontawesome.com/81efd83dc2.js" crossorigin="anonymous"></script>
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
                    <form method="POST" name="form" action="petugas-simpantambah.php">
                    <div class="form-group mb-3">
                        <label for="IdPetugas">ID Petugas</label>
                        <input type="text" class="form-control" id="IdPetugas" name="IdPetugas" placeholder="Format ID Petugas huruf P diikuti 4 angka. Contoh P1234">
                    </div>
                    <div class="form-group mb-3">
                        <label for="NamaPetugas">Nama Petugas</label>
                        <input type="text" class="form-control" id="NamaPetugas" name="NamaPetugas" placeholder="Nama Petugas">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="Jabatan" name="Jabatan" placeholder="Jabatan">
                    </div>
                    <div class="form-group mb-3">
                        <label for="NamaPengguna">Nama Pengguna</label>
                        <input type="text" class="form-control" id="NamaPengguna" name="NamaPengguna" placeholder="Format nama pengguna bebas">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mr-3" name="tblTambah">Tambah</button>
                    </div>
                    </form>                  
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

