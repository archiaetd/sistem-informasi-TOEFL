<?php
include("../../admin/sys/koneksi.php");
$waktu = $_POST['waktunya'];

 $idtes = mysqli_query($conn, "select max(id_tes) FROM tes");
 $idnya = mysqli_fetch_array($idtes);
 $insert = mysqli_query($conn, "update tes set sisa_waktu='$waktu' where id_tes=$idnya[0]");
?>