<?php

include("admin/sys/koneksi.php");

$select = mysqli_query($conn, "select cek_soal.*, soal.kunci from cek_soal INNER JOIN soal ON cek_soal.id_soal = soal.id_soal where id_tes = 111");

$score = 0;
while($data=mysqli_fetch_array($select)){
  if($data["jawaban"]==$data["kunci"]){
    $score += 10;
  }
}

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
    <td width="200" align="center"><?php echo $score; ?></td>
    <td width="200" align="center"></td>
    </tr>
    <tr style="background-color: linen; font-size: 20px;">
    <td width="150" align="center">Listening</td>
    <td width="200" align="center"></td>
    <td width="200" align="center"></td>
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