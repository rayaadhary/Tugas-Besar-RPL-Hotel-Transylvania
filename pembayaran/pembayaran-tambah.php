<?php include_once("../functions.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tambah Pembayaran | Hotel Transylvania</title>
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <?php include_once('../head.php'); ?>
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
                    <form>
                        <div class="row g-3">   
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="text" class="form-control" id="NoPembayaran" placeholder="No Pembayaran">
                                    <label for="NoPembayaran">No Pembayaran</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                <select class="form-control" id="OpsiBayar" placeholder="Opsi Bayar">
                                    <option value="">Pilih Opsi Bayar</option>
                                    <option value="Tunai">Tunai</option>
                                    <option value="Non Tunai">Non Tunai</option>
                                </select>
                                    <label for="OpsiBayar">Opsi Bayar</label>
                                </div>
                            </div>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="text" class="form-control" id="NilaiBayar" placeholder="Nilai Bayar">
                                    <label for="NilaiBayar">Nilai Bayar</label>
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
                                            $dataPelanggan = getList("SELECT * FROM tpelanggan ORDER BY nama_pelanggan"); 
                                            foreach ($dataPelanggan as $row) {
                                                echo "<option value=\"" . $row["id_pelanggan"] . "\">" . $row["nama_pelanggan"] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    <label for="NIK">Nama Pelanggan</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="datetime-local" class="form-control" id="TglCheckin" placeholder="Tanggal Check-in">
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
                                            $dataKamar = getList("SELECT * FROM tkamar GROUP BY jenis_kamar ORDER BY jenis_kamar");
                                            foreach ($dataKamar as $row) {
                                                echo "<option value=\"" . $row["no_kamar"] . "\">" . $row["jenis_kamar"] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    <label for="NoKamar">Jenis Kamar</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="datetime-local" class="form-control" id="TglCheckout" placeholder="Tanggal Check-out">
                                    <label for="TglCheckout">Tanggal Check-out</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 m-2">  
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary mr-3">Tambah</button>
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
