<?php

include("sys/koneksi.php");



?>
<!doctype html>
<html lang="en">
<head>
    <title>Reading</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- optional CSS -->
    <link rel="stylesheet" href="css/main.css?version=51">
</head>
<body>
        
    <div class="container-fluid h-100">
        <div class="row h-100">

            <div class="col-md-2 text-light bg-aside">
                <div class="col-md-12">
                    <span class="h1 text-center d-block">FTO<span>
                    
                </div>
                
                <div class="col-md-12">
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item bg-aside ">
                            <a href="index.php" class="text-light text-decoration-none"><i class="fa fa-home" aria-hidden="true"></i> HOME</a>
                        </li>
                        <li class="list-group-item bg-aside">
                            <a href="reading.php" class=" text-light text-decoration-none active"><i class="fa fa-book" aria-hidden="true"></i> Reading</a>
                        </li>
                        <li class="list-group-item bg-aside">
                            <a href="listening.php" class=" text-light text-decoration-none"><i class="fa fa-headphones" aria-hidden="true"></i> Listening</a>
                        </li>
                        <li class="list-group-item bg-aside">
                            <a href="pengunjung.php" class=" text-light text-decoration-none"><i class="fa fa-users" aria-hidden="true"></i> Pengunjung</a>
                        </li>
                        <li class="list-group-item bg-aside">
                            <a href="" class=" text-light text-decoration-none"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 mx-0 px-0 d-flex flex-column" style="height: 100vh;">
                <div class="bg-header d-flex align-items-center py-2 pl-3 pr-5" style="height: 10%;">
                    <i class="fa fa-bars h4" aria-hidden="true"></i>
                    <span class="ml-auto h4">User <i class="fa fa-user" aria-hidden="true"></i></span>
                </div>
                <div class="h3 pt-2 pl-3" style="height: 10%;">
                    Reading
                </div>
                <div class="d-flex flex-column pt-2 pl-3" style="max-height: 73;">
                    <div class="align-self-center text-center p-4 m-auto">
                        <div class="h3 my-1 bg-light p-2">
                            Daftar Soal
                        </div>
                        <div class=" my-1 bg-light p-2 d-flex align-items-start flex-column">
                            <a class="btn btn-primary my-2 align-content-start" href="#form-tambah" data-toggle="modal"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
                            <table border="1" class="tabel">
                                <tr>
                                    <th>ID Soal</th>
                                    <th>Pertanyaan</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php

                                $select = mysqli_query($conn, "select * from soal where tipe_soal='reading'");
                                while($data = mysqli_fetch_array($select)){
                                    ?>
                                    <tr>
                                        <td><?php echo $data["id_soal"] ?></td>
                                        <td class="px-2" style="max-width: 40em; text-align: left;"><?php echo $data["pertanyaan"] ?></td>
                                        <td>
                                            <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                            <a name="" id="" class="btn btn-danger" href="#" role="button"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                }

                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-center bg-aside text-white p-2 mt-auto" style="height: 7%;">
                    Copyright ©2021 Kelompok 1. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>

    
    
    <!-- Modal Tambah -->
    <div class="modal fade" id="form-tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="process/tambah_barang.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                          <label for="pertanyaan">Pertanyaan</label>
                          <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3"></textarea required>
                        </div>
                        <div class="form-group">
                          <label for="gambar">Gambar</label>
                          <input type="file" class="form-control" name="gambar" id="gambar" required>
                          <small id="helpId" class="form-text text-muted">Masukkan gambar</small>
                        </div>
                        <div class="form-group">
                          <label for="jawaban_a">Jawaban A</label>
                          <input type="text"
                            class="form-control" name="jawaban_a" id="jawaban_a" placeholder="Jawaban A">
                        </div>
                        <div class="form-group">
                          <label for="jawaban_b">Jawaban B</label>
                          <input type="text"
                            class="form-control" name="jawaban_b" id="jawaban_b" placeholder="Jawaban B">
                        </div>
                        <div class="form-group">
                          <label for="jawaban_c">Jawaban C</label>
                          <input type="text"
                            class="form-control" name="jawaban_c" id="jawaban_c" placeholder="Jawaban C">
                        </div>
                        <div class="form-group">
                          <label for="jawaban_d">Jawaban D</label>
                          <input type="text"
                            class="form-control" name="jawaban_d" id="jawaban_d" placeholder="Jawaban D">
                        </div>
                        <div class="form-group">
                          <label for="jawaban_e">Jawaban E</label>
                          <input type="text"
                            class="form-control" name="jawaban_e" id="jawaban_e" placeholder="Jawaban E">
                        </div>
                        <div class="form-group">
                          <label for="kunci">Kunci</label>
                          <input type="text" class="form-control" name="kunci" id="kunci" aria-describedby="helpId" placeholder="Kunci">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Tambah" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>