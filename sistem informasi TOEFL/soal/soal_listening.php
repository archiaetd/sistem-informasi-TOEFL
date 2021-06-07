<?php
include("../admin/sys/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reading Section</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit<?php $no?>" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

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
          <form class="form-inline ml-auto" method="post" action="process/next_back_1.php" enctype="multipart/form-data">
            <input class="btn btn-sm btn-secondary text-white" type="submit" name="action" value="< Back" />
            <input class="btn btn-sm btn-primary text-white" type="submit" name="action" value="Next >" />
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <?php
        $idtes = mysqli_query($conn, "select max(id_tes) FROM tes");
        $idnya = mysqli_fetch_array($idtes);

        $select = mysqli_query($conn, "Select sisa_waktu from tes where id_tes = $idnya[0]" );
        $waktu = mysqli_fetch_array($select);
        ?>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="background-color: white">
      <div class="container">
        <h1 class="display-4">Listening Section</h1>
      </div>
      <div class="container" style="font-size: 20px">
        <h4 align="right" id="sa">Time left =<span style="color: #2699fb" id="timer" name="timer"><?php echo($waktu[0]);?></span></h4>
        <span id="waw"></span>

      </div>
    </div>
    <!-- akhir jumbotron -->

    <?php
       
      $select = mysqli_query($conn, "Select * from soal where tipe_soal = 'listening'" );
      $no = 1;
      while($data = mysqli_fetch_array($select)){
          $idsoal = $data["id_soal"];
          $gambar = $data["gambar"];
          $jawaban = $data["jawaban"];

          $select1 = mysqli_query($conn, "select jawaban from cek_soal where id_tes = $idnya[0] AND id_soal = $idsoal ");  
                $jwb = mysqli_fetch_array($select1);
                
    ?>
    <!-- container -->
    <div class="container" style="margin-top: 70px;">
      <!-- soal -->
      <div class="row justify-content-center">
        <div class="col-lg-10 soal">
          <div class="row">
            <div class="col-lg">
          
              <p><?php echo $no++, $data["pertanyaan"];?></p>
              <div class="radio-inline">
                <label><input type="radio" value="a" <?php if ($jwb[0]=='a') {echo "checked";} ?> name="<?php echo $no; ?>" /> <?php echo explode(";",$data["jawaban"])[0]; ?></label>
              </div>
              <div class="radio-inline">
                <label><input type="radio" value="b" <?php if ($jwb[0]=='b') {echo "checked";} ?> name="<?php echo $no; ?>" /> <?php echo explode(";",$data["jawaban"])[1]; ?></label>
              </div>
              <div class="radio-inline">
                <label><input type="radio" value="c" <?php if ($jwb[0]=='c') {echo "checked";} ?> name="<?php echo $no; ?>" /> <?php echo explode(";",$data["jawaban"])[2]; ?></label>
              </div>
              <div class="radio-inline">
                <label><input type="radio" value="d" <?php if ($jwb[0]=='d') {echo "checked";} ?> name="<?php echo $no; ?>" /> <?php echo explode(";",$data["jawaban"])[3]; ?></label>
              </div>
            </div>
            <div class="col-lg">
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

                }
                
                ?>
  </form>
    <!-- akhir container -->

    <br /><br /><br /><br /><br /><br />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="process/script1.js"></script>
  </body>
</html>
