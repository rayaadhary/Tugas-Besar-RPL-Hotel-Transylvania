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
        <link rel="stylesheet" href="../css/styles.css">
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
                      <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pemesanan</h6>
                        </div>
                        <div class="card-body">
                            <?php
                            $db=dbConnect();
                            if($db->connect_errno==0){
                            $sql="SELECT m.no_pemesanan, p.nama_petugas, k.jenis_kamar, pe.nama_pelanggan, 
                                m.banyak_orang, m.lama_inap, m.tgl_check_out, m.tgl_check_in
                                FROM tmemesan m
                                JOIN tpetugas p ON m.id_petugas = p.id_petugas
                                JOIN tkamar k ON m.no_kamar = k.no_kamar
                                JOIN tpelanggan pe ON m.nik = pe.nik
                                ";
                            $res=$db->query($sql);
                            if($res){
                            ?>
                              <a href="pemesanan-tambah.php"><button type="button" class="btn btn-outline-primary rounded btn-sm mb-3">Tambah</button></a>
                         
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="contoh" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No Pemesanan</th>
                                            <th>Nama Petugas</th>
                                            <th>Jenis Kamar</th>
                                            <th>Nama Pemesan</th>
                                            <th>Banyak Orang</th>
                                            <th>Lama Inap</th>
                                            <th>Tanggal <i>Check-in</i></th>
                                            <th>Tanggal <i>Check-out</i></th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $res->fetch_all(MYSQLI_ASSOC);
                                        foreach($data as $row){
                                        ?>
                                        <tr>
                                            <td><?= $row['no_pemesanan']; ?></td>
                                            <td><?= $row['nama_petugas']; ?></td>
                                            <td><?= $row['jenis_kamar']; ?></td>
                                            <td><?= $row['nama_pelanggan']; ?></td>
                                            <td><?= $row['banyak_orang']; ?></td>
                                            <td><?= $row['lama_inap']; ?></td>
                                            <td><?= $row['tgl_check_in']; ?></td>
                                            <td><?= $row['tgl_check_out'];?></td>
                                            <td>
                                                <!-- a href -->
                                                <a href="#" class="btn btn-success btn-circle btn-sm">
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
        <script src="js/scripts.js"></script>
    </body>
    <script>
$(document).ready(function () {
    $('#contoh').DataTable();
});
</script>
</html>
