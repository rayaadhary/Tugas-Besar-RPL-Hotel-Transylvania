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
                <h1>Tambah Data</h1>
                    <div class="mt-4 pb-4"><span id="Day"></span><span id="Date"></span><span id="Time"></span></div>
                    <form>
                        <div class="row g-3">   
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="text" class="form-control" id="NoPemesanan" placeholder="No Pemesanan">
                                    <label for="NoPemesanan">No Pemesanan</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="text" class="form-control" id="LamaInap" placeholder="Lama Inap">
                                    <label for="LamaInap">Lama Inap</label>
                                </div>
                            </div>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <select class="form-select" id="IdPetugas" name="IdPetugas">
                                        <option value="">Pilih Petugas</option>
                                        <?php
                                            $data = getListPetugas();
                                            foreach ($data as $row) {
                                                echo "<option value=\"" . $row["id_petugas"] . "\">" . $row["nama_petugas"] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    <label for="IdPetugas">Nama Petugas</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="text" class="form-control" id="BanyakOrang" placeholder="Banyak Orang">
                                    <label for="BanyakOrang">Banyak Orang</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">   
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <select class="form-select" id="NIK" name="NIK">
                                        <option value="">Pilih Pelanggan</option>
                                        <?php
                                            $data = getListPelanggan();
                                            foreach ($data as $row) {
                                                echo "<option value=\"" . $row["id_pelanggan"] . "\">" . $row["nama_pelanggan"] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    <label for="NIK">Nama Pelanggan</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="date" class="form-control" id="TglCheckin" placeholder="Tanggal Check-in">
                                    <label for="TglCheckin">Tanggal Check-in</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">   
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <select class="form-select" id="NoKamar" name="NoKamar">
                                        <option value="">Pilih Kamar</option>
                                        <?php
                                            $data = getListKamar();
                                            foreach ($data as $row) {
                                                echo "<option value=\"" . $row["no_kamar"] . "\">" . $row["jenis_kamar"] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    <label for="NoKamar">Jenis Kamar</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="date" class="form-control" id="TglCheckout" placeholder="Tanggal Check-out">
                                    <label for="TglCheckout">Tanggal Check-out</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 m-2">  
                            <div class="col-md-8">
                                <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mr-3">Tambah</button>
                                </div>
                            </div>
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
