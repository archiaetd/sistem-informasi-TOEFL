<?php

include("../sys/koneksi.php");
session_start();

// if(!isset($_SESSION["user"])){
//     header("location:login.php");
// }
    $id_soal = $_POST["id_soal"];
    $pertanyaan = $_POST["pertanyaan"];
    $jawaban_a = $_POST["jawaban_a"];
    $jawaban_b = $_POST["jawaban_b"];
    $jawaban_c = $_POST["jawaban_c"];
    $jawaban_d = $_POST["jawaban_d"];
    $kunci = $_POST["kunci"];

    $jawaban = $jawaban_a.";".$jawaban_b.";".$jawaban_c.";".$jawaban_d;

    $insert = mysqli_query($conn, "update soal set pertanyaan='$pertanyaan', jawaban='$jawaban', kunci='$kunci' where id_soal=$id_soal");

    if($insert){
        ?>
        <script>
            alert("Edit data listening berhasil");
            document.location = "../listening.php";
        </script>
        <?php
    }else{
        echo "error";
    }



?>