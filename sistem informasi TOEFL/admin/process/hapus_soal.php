<?php

include("../sys/koneksi.php");
session_start();

// if(!isset($_SESSION["user"])){
//     header("location:login.php");
// }


$id = $_POST["id"];

$delete = mysqli_query($conn, "delete from soal where id_soal = $id");

if($delete){
    ?>
    <script>
        alert("Hapus soal berhasil");
        document.location = "../reading.php";
    </script>
    <?php
}else{
    echo "error";
}

?>