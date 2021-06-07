<?php
    session_start();

    include "sys/koneksi.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $hasil = mysqli_query ($conn, "select * from user where username='$username' and password='$password'");
    $jumlah = mysqli_num_rows($hasil);
    


        if ($jumlah>0) {
            $row = mysqli_fetch_assoc($hasil);
            $_SESSION["username"]=$row["username"];
            $_SESSION["password"]=$row["password"];

            ?>
            <script>
            document.location="index_0.php";
            </script>
            <?php
            
        }else {
            echo "<b> Anda harus melakukan login terlebih dahulu agar dapat mengakses halaman ini <br><a href='index.php'>Kembali ke halaman login</a> </b>";
        }
?>