<?php

include("../sys/koneksi.php");
session_start();

// if(!isset($_SESSION["user"])){
//     header("location:login.php");
// }


if(file_exists($_FILES['gambar']['tmp_name']) || is_uploaded_file($_FILES['gambar']['tmp_name'])){
    $file_type = $_FILES['gambar']['type'];
    if($_FILES['gambar']['size'] < 16777215  && ($file_type =='image/jpeg' or $file_type == 'image/png')){
        $imgData =addslashes (file_get_contents($_FILES['gambar']['tmp_name']));

        $id_soal = $_POST["id_soal"];
        $pertanyaan = $_POST["pertanyaan"];
        $jawaban_a = $_POST["jawaban_a"];
        $jawaban_b = $_POST["jawaban_b"];
        $jawaban_c = $_POST["jawaban_c"];
        $jawaban_d = $_POST["jawaban_d"];
        $kunci = $_POST["kunci"];

        $jawaban = $jawaban_a.";".$jawaban_b.";".$jawaban_c.";".$jawaban_d.";".$jawaban_e;

        $insert = mysqli_query($conn, "update soal set pertanyaan='$pertanyaan', jawaban='$jawaban', kunci='$kunci', gambar='$imgData' where id_soal=$id_soal");

        if($insert){
            ?>
            <script>
                alert("Edit data reading berhasil");
                document.location = "../reading.php";
            </script>
            <?php
        }else{
            echo "error";
        }
        
    }else{
        ?>
        <script>
            alert("Ukuran File / Format File Tidak Sesuai");
            document.location = "../reading.php";
        </script>
        <?php
    }
}else{
    $id_soal = $_POST["id_soal"];
    $pertanyaan = $_POST["pertanyaan"];
    $jawaban_a = $_POST["jawaban_a"];
    $jawaban_b = $_POST["jawaban_b"];
    $jawaban_c = $_POST["jawaban_c"];
    $jawaban_d = $_POST["jawaban_d"];
    $kunci = $_POST["kunci"];

    $jawaban = $jawaban_a.";".$jawaban_b.";".$jawaban_c.";".$jawaban_d.";".$jawaban_e;

    $insert = mysqli_query($conn, "update soal set pertanyaan='$pertanyaan', jawaban='$jawaban', kunci='$kunci' where id_soal=$id_soal");

    if($insert){
        ?>
        <script>
            alert("Edit data reading berhasil");
            document.location = "../reading.php";
        </script>
        <?php
    }else{
        echo "error";
    }
}



?>