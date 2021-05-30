<?php
include("../sys/koneksi.php");
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
            ?>
            <script>
                document.location = "../../welkam.php";
            </script>
            <?php
        }else{
            echo "error";
        }
?>
