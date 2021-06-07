<?php

include("admin/sys/koneksi.php");

$idtes = mysqli_query($conn, "select max(id_tes) FROM tes");
$idnya = mysqli_fetch_array($idtes);

$select = mysqli_query($conn, "select cek_soal.*, soal.kunci, soal.tipe_soal from cek_soal INNER JOIN soal ON cek_soal.id_soal = soal.id_soal where id_tes = $idnya[0] AND tipe_soal = 'reading' ");

$score = 0;
while($data=mysqli_fetch_array($select)){
  if($data["jawaban"]==$data["kunci"]){
    $score += 10;
  }
}
$level = "";
if ($score >= 80) {
   $level = "A";
}elseif ($score >= 70) {
   $level = "B";
}elseif ($score >= 60) {
   $level = "C";
}elseif ($score >= 50) {
   $level = "D";
}else{
  $level = "E";
}

$select1 = mysqli_query($conn, "select cek_soal.*, soal.kunci, soal.tipe_soal from cek_soal INNER JOIN soal ON cek_soal.id_soal = soal.id_soal where id_tes = $idnya[0] AND tipe_soal = 'listening' ");

$score1 = 0;
while($data=mysqli_fetch_array($select1)){
  if($data["jawaban"]==$data["kunci"]){
    $score1 += 10;
  }
}
$level1 = "";
if ($score1 >= 80) {
   $level1 = "A";
}elseif ($score1 >= 70) {
   $level1 = "B";
}elseif ($score1 >= 60) {
   $level1 = "C";
}elseif ($score1 >= 50) {
   $level1 = "D";
}else{
  $level1 = "E";
}
$scorenya = $score+$score1;
$select = mysqli_query($conn, "update tes set score = '$scorenya' where id_tes = $idnya[0]");

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
  <div class="container" style="padding-left: 2rem; padding-top: 4rem;">
  <h1 class="display-8">Hai, <br />You Can Start Your TOEFL Simulation Test Score Is</h1>
  <table align="left" border="1">
    <tr style="background-color: lightseagreen;" align="center">
    <th style="font-size: 20px; color: linen;">Section</th>
    <th style="font-size: 20px; color: linen;">Score</th>
    <th style="font-size: 20px; color: linen;">Level</th>
    </tr>
    <tr style="background-color: linen; font-size: 20px;">
    <td width="150" align="center">Reading</td>
    <td width="200" align="center"><?php echo $score;?></td>
    <td width="200" align="center"><?php echo $level; ?></td>
    </tr>
    <tr style="background-color: linen; font-size: 20px;">
    <td width="150" align="center">Listening</td>
    <td width="200" align="center"><?php echo $score1; ?></td>
    <td width="200" align="center"><?php echo $level1; ?></td>
    </tr>
    <a href="" class="btn btn-primary start-0" style="margin-left: 2rem;">Share it</a>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container text-center">
          <a class="navbar-brand navbar"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <form class="form-inline ml-auto">
              <a href="project akhir.html" class="btn btn-sm btn-outline-success btn-success text-white" style="font-size: 20px;">Back to Home</a>
            </form>
          </div>
        </div>
      </nav>
    </div>
</div>
</html>
