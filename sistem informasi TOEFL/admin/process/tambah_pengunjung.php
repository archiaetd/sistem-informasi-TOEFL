<?php

include("../sys/koneksi.php");
// if(!isset($_SESSION["user"])){
//     header("location:login.php");
// }
        $nama = $_POST["nama"];
        $number = $_POST["number"];
        $email = $_POST["email"];

        $insert = mysqli_query($conn, "INSERT INTO `tes` (`id_tes`, `no_telpon`, `nama`,`email`, `score`, `sisa_waktu`, `id_user`, `selesai`) VALUES (NULL, '$number', '$nama', '$email',NULL, NULL, '2', NULL);");
        if($insert){
            ?>
            <script>
                document.location = "tambah_jawaban.php";
            </script>
            <?php
        }else{
            echo "error";
        }
?>
