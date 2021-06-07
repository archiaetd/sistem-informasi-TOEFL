<?php

include("../sys/koneksi.php");
session_start();

// if(!isset($_SESSION["user"])){
//     header("location:login.php");
// }


$id = $_POST["id"];

$delete = mysqli_query($conn, "delete from tes where id_tes = $id");

if($delete){
    ?>
    <script>
        alert("Hapus soal berhasil");
        document.location = "../pengunjung.php";
    </script>
    <?php
}else{
    echo "error";
}

?>