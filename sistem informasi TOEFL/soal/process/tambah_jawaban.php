<?php
include("../../admin/sys/koneksi.php");
 $cek = mysqli_query($conn, "SELECT id_soal FROM `soal`");
 while($data = mysqli_fetch_array($cek)){
 $r[]=$data[0];
  }
$idtes = mysqli_query($conn, "select max(id_tes) FROM tes");
$idnya = mysqli_fetch_array($idtes);
$banyak_soal = count($r);
$no=0;
while ($no<$banyak_soal) {
  $insert = mysqli_query($conn, "INSERT INTO `cek_soal` (`id_cek_soal`, `id_tes`, `id_soal`, `jawaban`) VALUES (null, '$idnya[0]', '$r[$no]', NULL);");
   $no++; 
}
if($insert){
            $idtes = mysqli_query($conn, "select max(id_tes) FROM tes");
            $idnya = mysqli_fetch_array($idtes);
            $insert1 = mysqli_query($conn, "update tes set sisa_waktu='00:10:00' where id_tes=$idnya[0]");
            if ($insert1) {
            ?>
            <script>
                document.location = "../../welkam.php";
            </script>
            <?php
            }
            
        }else{
            echo "error";
        }
?>