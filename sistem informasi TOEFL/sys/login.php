<?php

include("../admin/sys/koneksi.php");
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$select = mysqli_query($conn, "select * from user where binary email = '$username' and binary password = '$password'");
$num_row = mysqli_num_rows($select);

if($num_row < 1){
    ?>
    <script>
        alert("Username atau password salah!");
        document.location = "../login.php";
    </script>
    <?php
}else{
    while($data = mysqli_fetch_array($select)){
        $nama_user = $data["nama_user"];
        $tipe_user = $data["tipe_user"];
    }
    $_SESSION["nama_user"] = $nama_user;
    if($tipe_user=="admin"){
        header("location:../admin");
    }else{
        header("location:../project akhir.html");
    }
}

?>