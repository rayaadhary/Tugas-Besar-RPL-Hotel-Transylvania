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
        <title>Edit Petugas | Hotel Transylvania</title>
        <?php include_once "../head.php"; ?>
    </head>
    <body>
        <?php 
        if(isset($_POST['tblTambah'])) {
            $db = dbConnect();
            $id = $db -> escape_string(trim($_POST["id"]));
            $nama = $db -> escape_string(trim($_POST["nama"]));
            $jabatan = $db -> escape_string(trim($_POST["jabatan"]));
            // $namaPengguna = $db -> escape_string(trim($_POST["fasilitas"]));
            // begin validasi
            $salah = "";
            
            
            if (strlen($nama) == 0 || is_numeric($nama)) {
                $salah .= "Nama tidak boleh kosong dan tidak boleh berupa angka.<br>";
            }

            if ($jabatan == "") {
                $salah .= "Jabatan harus dipilih.<br>";
            }
            ?>
            <div id="alertBox" class="card shadow-lg bg-light text-center" style="width: 30rem;">
            <?php 
            // end validasi
            if ($salah == "") {
                ?>
                    <h3 class="card-text">Edit Data Petugas</h3>
                    <p class="card-text">Semua data valid.</p>
                    <?php
                    $query = "UPDATE tpetugas SET id_petugas = '$id', nama_petugas = '$nama', jabatan = '$jabatan' WHERE id_petugas = '$id'";
                    $result = $db -> query($query);
                    if ($result) {
                        if ($db -> affected_rows > 0) {
                            ?>
                            <p class="card-text">Data berhasil diubah.</p>
                            <div class="d-flex justify-content-center">
                                <a href="petugas-view.php" class="btn btn-primary">Lihat Data</a>
                            </div>
                            <?php
                        } else {
                            ?>
                            <p class="card-text">Data berhasil di ubah, tanpa perubahan data.</p>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:history.back()" class="btn btn-primary">Ubah Kembali</a>
                                <a href="petugas-view.php" class="btn btn-primary">Lihat Data</a>
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
                <h3 class="card-text">Edit Data petugas</h3>
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
                    <div class="row">
                        <div class="col-6 ps-4">
                            <?php
                            if (isset($_GET["id_petugas"])) {
                            $db = dbConnect();
                            $idPetugas = $db -> escape_string($_GET["id_petugas"]);
                            $sql = "SELECT * FROM tpetugas WHERE id_petugas = '$idPetugas'";
                            if ($dataPetugas = ambilsatubaris($db, $sql)) {
                                    ?>
                                    <form>
                                        <div class="form-group mb-3">
                                            <label for="IdPetugas">ID Petugas</label>
                                            <input type="text" name="id_petugas" class="form-control" id="IdPetugas" placeholder="Id Petugas" value="<?= $dataPetugas["id_petugas"]; ?>" readonly>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="Nama">Nama Petugas</label>
                                            <input type="text" name="nama_petugas" class="form-control" id="Nama" placeholder="Nama" value="<?= $dataPetugas["nama_petugas"]; ?>">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Jabatan</label>
                                            <select name="jabatan" class="form-control">
                                            <?php 
                                            $jabatan = getList("SELECT DISTINCT jabatan FROM tpetugas");
                                            foreach($jabatan as $row) {
                                            if ($row["jabatan"] == $edit['jabatan']) {
                                            echo "<option value='" . $row["jabatan"] . "' selected>" . $row["jabatan"] . "</option>";
                                            } else {
                                            echo "<option value='" . $row["jabatan"] . "'>" . $row["jabatan"] . "</option>";
                                            }
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <!-- <div class="form-group mb-3">
                                            <label for="NamaPengguna">Nama Pengguna</label>
                                            <input type="text" name class="form-control" id="NamaPengguna" placeholder="NamaPengguna" value="<?= $dataPetugas["nama_pengguna"]; ?>">
                                        </div> -->
                                        <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary mr-3" name="TblEdit">Edit</button>
                                        </div>
                                    </form>
                                    <?php
                                 }
                                } else {
                                    echo "ID Petugas tidak ditemukan";
                                }
                            ?>
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
