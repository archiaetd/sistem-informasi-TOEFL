<?php
include("admin/sys/koneksi.php");
$idtes = mysqli_query($conn, "select max(id_tes) FROM tes");
$idnya = mysqli_fetch_array($idtes);

 $cek = mysqli_query($conn, "SELECT nama FROM `tes` WHERE `id_tes` = $idnya[0]" );
 $nama = mysqli_fetch_array($cek);
 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/navigation.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <title>TOEFL</title>
  </head>

  <!--Awal Jumbotron-->

  <body background="bekgron.png"></body>
  <div class="constructor" style="padding-left: 3rem; padding-top: 4rem;">

    <h1 class="display-8">Welcome, <?php echo ($nama[0]); ?><br />You Can Start Your <br />TOEFL Practice Now!</h1>
    <a href="../sistem informasi TOEFL/Tutorial/tutorial test directionn.html" class="btn btn-primary start-0">Start Test</a>
  </div>
</div>
</html>

