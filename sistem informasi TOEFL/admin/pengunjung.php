<?php

include("sys/koneksi.php");
session_start();
include 'cek.php';


?>
<!doctype html>
<html lang="en">
<head>
    <title>Pengunjung</title>
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

    <script>
        function hapus(id) {  
            $("#id").attr("value", id);
        }

    </script>
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
                            <a href="logout.php" class=" text-light text-decoration-none"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
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
                    Pengunjung
                </div>
                <div class="d-flex flex-column pt-2 pl-3" style="max-height: 73;">
                    <div class="align-self-center text-center p-4 m-auto">
                        <div class="h3 my-1 bg-light p-2">
                            Daftar Pengunjung
                        </div>
                        <div class=" my-1 bg-light p-2 d-flex align-items-start flex-column">
                            <table border="1" class="tabel">
                                <tr>
                                    <th>ID</th>
                                    <th>No Telpon</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Score</th>
                                    <th>Sisa Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php

                            
                                $select = mysqli_query($conn, "select * from tes");
                                while($data = mysqli_fetch_array($select)){
                                    ?>
                                    <tr>
                                        <td><?php echo $data["id_tes"] ?></td>
                                        <td><?php echo $data["no_telpon"] ?></td>
                                        <td><?php echo $data["nama"] ?></td>
                                        <td><?php echo $data["email"] ?></td>
                                        <td><?php echo $data["score"] ?></td>
                                        <td><?php echo $data["sisa_waktu"]?></td>
                                        <td>
                                            <a  style="margin: 10px;" class="btn btn-danger" href="#form-hapus" data-toggle="modal" onclick="hapus(<?php echo $data['id_tes'] ?>)"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
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

<div class="modal fade" id="form-hapus" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="process/hapus_pengunjung.php" method="post" id="form-hapus">
                    <div class="modal-body" id="body-edit">
                        <div class="form-check form-check-inline mb-3 ml-2">
                            <input type="hidden" name="id" id="id">
                        </div>
                        Apakah anda yakin ingin menghapus data ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <input type="submit" value="Ya" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>