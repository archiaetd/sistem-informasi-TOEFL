<?php
	include("../../admin/sys/koneksi.php");
	 $waktu = $_POST['timer'];
	 $idtes = mysqli_query($conn, "select max(id_tes) FROM tes");
 	 $idnya = mysqli_fetch_array($idtes);
 	 if (!($waktu ==  '00:00:01')){
	 $insert = mysqli_query($conn, "update tes set sisa_waktu='$waktu' where id_tes= $idnya[0]");}
	 else{
	 	echo "<script> 
            document.location = 'score.php';
        </script>";
	 }

?>