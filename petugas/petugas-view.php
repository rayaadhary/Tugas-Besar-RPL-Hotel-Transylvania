<?php include_once("../functions.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Petugas | Hotel Transylvania</title>
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <script src="js/scripts.js"></script>
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
                    <h6 class="mt-4">
                        <span id="Day"></span>, <span id="Date"></span> - <span id="Time"></span> WIB
                    </h6>
                          <!-- data table siswa -->
                      <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Petugas</h6>
                        </div>
                        <div class="card-body">
                            <?php
                            $db=dbConnect();
                            if ($db->connect_errno == 0) {
                            $sql="SELECT * FROM tpetugas";
                            $res=$db->query($sql);
                                if($res){
                                ?>
                                <a href="petugas-tambah.php"><button type="button" class="btn btn-outline-primary rounded btn-sm mb-3">Tambah</button></a>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="contoh" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID Petugas</th>
                                                <th>Nama Petugas</th>
                                                <th>Jabatan</th>
                                                <th>Nama Pengguna</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $data = $res->fetch_all(MYSQLI_ASSOC);
                                            foreach($data as $row){
                                            ?>
                                            <tr>
                                                <td><?= $row['id_petugas']; ?></td>
                                                <td><?= $row['nama_petugas']; ?></td>
                                                <td><?= $row['jabatan']; ?></td>
                                                <td><?= $row['nama_pengguna'];?></td>
                                                <td>
                                                    <!-- a href -->
                                                    <a href="petugas-edit.php" class="btn btn-success btn-circle btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <!-- a href -->
                                                    <!-- <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a> -->
                                                </td>
                                            </tr>
                                                <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                    <?php
                                    $res->free();
                                } else 
                                echo "Gagal Eksekusi SQL".(DEVELOPMENT?" : ".$db->error:"")."<br>";
                            } else
                            echo "Gagal koneksi".(DEVELOPMENT?" : ".$db->connect_error:"")."<br>";
                            ?>
                                </div>
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
    <script>
$(document).ready(function () {
    $('#contoh').DataTable();
});
</script>
</html>
