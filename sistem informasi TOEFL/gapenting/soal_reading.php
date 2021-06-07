<?php
include("admin/sys/koneksi.php");
                $r = [];
                $cek = mysqli_query($conn, "SELECT id_soal FROM `soal` WHERE `tipe_soal`='reading'");
                while($data = mysqli_fetch_array($cek)){
                    $r[]=$data[0];

                }
                $banyak_soal = count($r);
                $nomor = 0;
                $no_prev = $nomor-1;
                $no_next = $nomor+1;


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reading Section</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="soal reading/style.css" />

    <!-- my fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #e3f2fd">
      <div class="container text-center">
        <a class="navbar-brand navbar" style="color: #2699fb" href="#"
          >FTO
          <p style="color: black; font-family: Arial, Helvetica, sans-serif">Free TOEFL Online</p></a
        >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="form-inline ml-auto">
            <a href="../welkam.html" class="btn btn-sm btn-outline-success btn-secondary text-white disable">&#60; Back</a>
            <button onclick=""></button>
            <a href="soal listening/listening.html" class="btn btn-sm btn-outline-success btn-primary text-white">Next &#62;</a>
          </form>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="background-color: white">
      <div class="container">
        <h1 class="display-4">Reading Section</h1>
        <h3 class="question">Question <?php echo $nomor+1 ?>/<?php echo ($banyak_soal); ?></h3>
      </div>
      <div class="container" style="font-size: 20px">
        <p align="right">Time left = <span id="timer" style="color: #2699fb"></span></p>
      </div>
    </div>
    <!-- akhir jumbotron -->

    <!-- container -->
    <div class="container">
      <!-- soal -->
      <div class="row justify-content-center">
        <div class="col-lg-10 soal">
          <div class="row">
            <div class="col-lg">

                <?php
                
            


                $select = mysqli_query($conn, "Select * from soal where id_soal = $r[$nomor]");
              
                while($data = mysqli_fetch_array($select)){
                    $soal = $data["pertanyaan"];
                    $gambar = $data["gambar"];
                    $jawaban = $data["jawaban"];
                }
                
                ?>


              <p>1. <?php echo $soal; ?></p>
              <div class="radio-inline">
                <label><input type="radio" name="posradio " /> <?php echo explode(";",$jawaban)[0]; ?></label>
              </div>
              <div class="radio-inline">
                <label><input type="radio" name="posradio" /> <?php echo explode(";",$jawaban)[1]; ?></label>
              </div>
              <div class="radio-inline">
                <label><input type="radio" name="posradio" /> <?php echo explode(";",$jawaban)[2]; ?></label>
              </div>
              <div class="radio-inline">
                <label><input type="radio" name="posradio" /> <?php echo explode(";",$jawaban)[3]; ?></label>
              </div>
            </div>
            <div class="col-lg">
              <p>
                  <?php
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $gambar ).'" class="img-fluid">';
                  ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir container -->

    <br /><br /><br /><br /><br /><br />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="soal reading/script.js"></script>
  </body>
</html>
