<?php
include_once("../functions.php");

$no = $_GET['no_kamar'];

$sql = "DELETE FROM tkamar WHERE no_kamar ='$no'";

$db = dbConnect();
$res = $db->query($sql);

if($res){
    header('location: kamar-view.php');
}
else
echo "Gagal menghapus data";
?>