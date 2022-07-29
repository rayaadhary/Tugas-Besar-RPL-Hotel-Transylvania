<?php 
include_once("../functions.php");
session();
$_SESSION["current_page"] = "Pembayaran"; 
?>
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
        <?php 
        if(isset($_POST['tblTambah'])) {
            $db = dbConnect();
            $noPembayaran = $db -> escape_string($_POST["noPembayaran"]);
            $opsiBayar = $db -> escape_string($_POST["opsiBayar"]);
            $nilaiBayar = $db -> escape_string($_POST["nilaiBayar"]);
            $noPemesanan = $db -> escape_string($_POST["noPemesanan"]);
            // begin validasi
            $salah = "";
            
            
            ?>
            <div id="alertBox" class="card shadow-lg bg-light text-center" style="width: 30rem;">
            <?php 
            // end validasi
            if ($salah == "") {
                ?>
                    <h3 class="card-text">Penyimpanan Data Pembayaran</h3>
                    <p class="card-text">Semua data valid.</p>
                    <?php
                    $query = "INSERT INTO tpembayaran VALUES ('$noPembayaran', '$opsiBayar', '$nilaiBayar', '$noPemesanan')";
                    $result = $db -> query($query);
                    if ($result) {
                        if ($db -> affected_rows > 0) {
                            ?>
                            <p class="card-text">Data berhasil ditambahkan.</p>
                            <div class="d-flex justify-content-center">
                                <a href="kamar-view.php" class="btn btn-primary">Lihat Data</a>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <p class="card-text">Data gagal disimpan.</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:history.back()" class="btn btn-primary">Kembali</a>
                        </div>
                        <?php
                        echo "Errornya : " . $db -> error;
                    }
            } else {
                ?>
                <h3 class="card-text">Penyimpanan Data Pembayaran</h3>
                <p class="card-text">Berikut kesalahan - kesalahan dalam validasi : </p>
                <p class="card-text"><?= $salah; ?></p>
                <div class="d-flex justify-content-center">
                    <a href="javascript:history.back()" class="btn btn-primary">Kembali</a>
                </div>
                <?php
            }
            ?>
            </div>
            <?php
        }
        ?>
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
                    <form>
                        <div class="row g-3">   
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="hidden" class="form-control" id="NoPembayaran" name="noPembayaran" placeholder="Nomor Pembayaran">
                                    <!-- <label for="NoPembayaran">No Pembayaran</label> -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                <select class="form-control" id="OpsiBayar" name="opsiBayar" placeholder="Opsi Bayar">
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
                                    <input type="text" class="form-control" id="NilaiBayar" name="nilaiBayar" placeholder="Nilai Bayar">
                                    <label for="NilaiBayar">Nilai Bayar</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <input type="text" class="form-control" id="BanyakOrang" name="banyakOrang" placeholder="Banyak Orang">
                                    <label for="BanyakOrang">Banyak Orang</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">   
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <select class="form-select" id="NIK" name="nik">
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
                                    <input type="datetime-local" class="form-control" id="TglCheckin" name="tglCheckin" placeholder="Tanggal Check-in">
                                    <label for="TglCheckin">Tanggal Check-in</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">   
                            <div class="col-md-4">
                                <div class="form-floating m-2">
                                    <select class="form-select" id="NoKamar" name="noKamar">
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
                                    <input type="datetime-local" class="form-control" id="TglCheckout" name="tglCheckin" placeholder="Tanggal Check-out">
                                    <label for="TglCheckout">Tanggal Check-out</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 m-2">  
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary mr-3" name="tblTambah">Tambah</button>
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
