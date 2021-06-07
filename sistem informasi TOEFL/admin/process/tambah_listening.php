<?php

include("../sys/koneksi.php");
session_start();

// if(!isset($_SESSION["user"])){
//     header("location:login.php");
// }


    $pertanyaan = $_POST["pertanyaan"];
    $jawaban_a = $_POST["jawaban_a"];
    $jawaban_b = $_POST["jawaban_b"];
    $jawaban_c = $_POST["jawaban_c"];
    $jawaban_d = $_POST["jawaban_d"];
    $kunci = $_POST["kunci"];

    $jawaban = $jawaban_a.";".$jawaban_b.";".$jawaban_c.";".$jawaban_d;

    $insert = mysqli_query($conn, "INSERT INTO `soal` VALUES (NULL, '$pertanyaan', 'listening', NULL, NULL, '$jawaban', '$kunci');");

    if($insert){
        ?>
        <script>
            alert("Tambah data listening berhasil");
            document.location = "../listening.php";
        </script>
        <?php
    }else{
        echo "error";
    }




?>