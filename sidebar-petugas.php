<!-- Sidebar-->
<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">(Logo hotel)
        <div class="list-group list-group-flush">
            <a href="../kamar/kamar-view.php" class="list-group-item list-group-item-action list-group-item-light p-3 <?php if ($_SESSION["current_page"] == "Kamar") {
                                                                                                                            echo "active";
                                                                                                                     } else {
                                                                                                                            echo "inactive";
                                                                                                                        } ?>">Kamar</a>
            <a href="../pemesanan/pemesanan-view.php" class="list-group-item list-group-item-action list-group-item-light p-3 <?php if ($_SESSION["current_page"] == "Pemesanan") {
                                                                                                                            echo "active";
                                                                                                                        } else {
                                                                                                                            echo "inactive";
                                                                                                                        } ?>">Pemesanan</a>
            <a href="../pembayaran/pembayaran-view.php" class="list-group-item list-group-item-action list-group-item-light p-3 <?php if ($_SESSION["current_page"] == "Pembayaran") {
                                                                                                                            echo "active";
                                                                                                                        } else {
                                                                                                                            echo "inactive";
                                                                                                                        } ?>">Pembayaran</a>
            <a href="../pelanggan/pelanggan-view.php" class="list-group-item list-group-item-action list-group-item-light p-3 <?php if ($_SESSION["current_page"] == "Pelanggan") {
                                                                                                                            echo "active";
                                                                                                                        } else {
                                                                                                                            echo "inactive";
                                                                                                                        } ?>">Pelanggan</a>
            <a href="../petugas/petugas-view.php" class="list-group-item list-group-item-action list-group-item-light p-3 <?php if ($_SESSION["current_page"] == "Petugas") {
                                                                                                                            echo "active";
                                                                                                                        } else {
                                                                                                                            echo "inactive";
                                                                                                                        } ?>">Petugas</a>
        </div>
    </div>
                                                                                                                    </div>