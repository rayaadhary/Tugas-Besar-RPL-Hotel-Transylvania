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
                            <?php
                            if (isset($_GET["id_petugas"])) {
                                       $db = dbConnect();
                            $idPetugas = $db -> escape_string($_GET["idPetugas"]);
                            $sql = "SELECT * FROM tpetugas WHERE idPetugas = '$idPetugas'";
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
                                        <div class="form-group mb-3">
                                            <label for="NamaPengguna">Nama Pengguna</label>
                                            <input type="text" name class="form-control" id="NamaPengguna" placeholder="NamaPengguna" value="<?= $dataPetugas["nama_pengguna"]; ?>">
                                        </div>
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
