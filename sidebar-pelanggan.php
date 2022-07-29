<!-- Sidebar-->
<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">(Logo)</div>
        <div class="list-group list-group-flush">
            <a href="../kamar/kamar-view.php" class="list-group-item list-group-item-action list-group-item-light p-3 <?php if ($_SESSION["current_page"] == "Kamar") {
                                                                                                                            echo "active";
                                                                                                                     } else {
                                                                                                                            echo "inactive";
                                                                                                                        } ?>"><span><i class="fa fa-door-closed"></i> Lihat Kamar</span></a>
            <a href="../pemesanan/pemesanan-tambah.php" class="list-group-item list-group-item-action list-group-item-light p-3 <?php if ($_SESSION["current_page"] == "Pemesanan") {
                                                                                                                            echo "active";
                                                                                                                        } else {
                                                                                                                            echo "inactive";
                                                                                                                        } ?>"><span><i class="fa fa-receipt"></i> Tambah Pemesanan</span></a>
        </div>
    </div>