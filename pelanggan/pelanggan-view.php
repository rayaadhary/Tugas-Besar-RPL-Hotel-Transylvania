<?php 
include_once("../functions.php") ;
session();
$_SESSION["current_page"] = "Pelanggan";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pelanggan | Hotel Transylvania</title>
        <!-- Core theme CSS (includes Bootstrap)-->
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
                     <h6 class="mt-4">
                        <span id="Day"></span>, <span id="Date"></span> - <span id="Time"></span> WIB
                    </h6>    
                <!-- data table siswa -->
                      <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pelanggan</h6>
                        </div>
                        <div class="card-body">
                            <?php
                            $db=dbConnect();
                            if($db->connect_errno==0){
                                $sql="SELECT * FROM tpelanggan";
                            $res=$db->query($sql);
                            if($res){
                            ?>
                                <a href="pelanggan-tambah.php"><button type="button" class="btn btn-outline-primary rounded btn-sm mb-3">Tambah</button></a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Telepon</th>
                                            <th>Nama Pengguna</th>
                                            <th>Kata Sandi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $res->fetch_all(MYSQLI_ASSOC);
                                        foreach($data as $row){
                                        ?>
                                        <tr>
                                            <td><?= $row['nik']; ?></td>
                                            <td><?= $row['nama_pelanggan']; ?></td>
                                            <td><?= $row['telepon']; ?></td>
                                            <td><?= $row['nama_pengguna'];?></td>
                                            <td><?= $row['kata_sandi']; ?></td>
                                            <td>
                                                <!-- a href -->
                                                <a href="pelanggan-form-edit.php" class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-edit"></i>
                                                </a>
                                                <!-- a href -->
                                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                            <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                    <?php
                                $res->free();
                                }else
                                echo "Gagal Eksekusi SQL".(DEVELOPMENT?" : ".$db->error:"")."<br>";
                                }
                                else
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
</html>
