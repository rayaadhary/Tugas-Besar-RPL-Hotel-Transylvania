<?php
include_once("../functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Kamar | Hotel Transylvania</title>
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
                <!-- Date & Time -->
                <div class="mt-4 pb-4">
                    <h6 class="mt-4">
                    <span id="Day"></span>, <span id="Date"></span> - <span id="Time"></span> WIB
                </h6>    
                </div>
                <div class="row">
                    <div class="col-6 ps-4">
                        <?php
                        if (isset($_GET["no_kamar"])) {
                            $db = dbConnect();
                            $noKamar = $db -> escape_string($_GET["no_kamar"]);
                            $sql = "SELECT * FROM tkamar WHERE no_kamar = '$noKamar'";
                            if ($edit = ambilsatubaris($db, $sql)) {
                        ?>
                        <form method="POST" action="">
                            <div class="form-group mb-3">
                                <label for="NoKamar">No Kamar</label>
                                <input type="text" class="form-control" id="NoKamar" placeholder="No Kamar" value="<?= $edit["no_kamar"]; ?>" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label>Jenis Kamar</label>
                                <select name="jenis_kamar" class="form-control">
                                    <?php 
                                    $JenisKamar = getList("SELECT DISTINCT jenis_kamar FROM tkamar");
                                    foreach($JenisKamar as $row) {
                                        if ($row["jenis_kamar"] == $edit['jenis_kamar']) {
                                            echo "<option value='" . $row["jenis_kamar"] . "' selected>" . $row["jenis_kamar"] . "</option>";
                                        } else {
                                            echo "<option value='" . $row["jenis_kamar"] . "'>" . $row["jenis_kamar"] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <?php 
                                    $Status = getList("SELECT DISTINCT status FROM tkamar");
                                    foreach($Status as $row) {
                                        if ($row["status"] == $edit['status']) {
                                            echo "<option value='" . $row["status"] . "' selected>" . $row["status"] . "</option>";
                                        } else {
                                            echo "<option value='" . $row["status"] . "'>" . $row["status"] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="Fasilitas">Fasilitas</label>
                                <input type="text" class="form-control" id="Fasilitas" placeholder="Fasilitas" value="<?= $edit["fasilitas"]; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Harga">Harga</label>
                                <input type="text" class="form-control" id="Harga" placeholder="Harga" value="<?= $edit["harga"]; ?>">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mr-3" name="tblEdit">Edit</button>
                            </div>
                        </form>
                        <?php
                        }
                        } else {
                            ?>
                            <div class="alert alert-secondary" role="alert">
                            No kamar tidak ditemukan!
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
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>

</html>