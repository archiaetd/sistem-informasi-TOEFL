<?php

include("../sys/koneksi.php");
$id = $_POST["id"];

$select = mysqli_query($conn, "select * from soal where id_soal=$id");

while($data = mysqli_fetch_array($select)){
    $id_soal = $data["id_soal"];
    $pertanyaan = $data["pertanyaan"];
    $gambar = $data["gambar"];
    $jawaban = $data["jawaban"];
    $kunci = $data["kunci"];
}

$jawaban_a = explode(";", $jawaban)[0];
$jawaban_b = explode(";", $jawaban)[1];
$jawaban_c = explode(";", $jawaban)[2];
$jawaban_d = explode(";", $jawaban)[3];

?>
<div class="form-group">
  <label for="id">ID</label>
  <input type="text"
    class="form-control" name="id_soal" id="id" aria-describedby="helpId" placeholder="id" readonly value="<?php echo $id_soal ?>">
</div>
<div class="form-group">
    <label for="pertanyaan">Pertanyaan</label>
    <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3" required ><?php echo $pertanyaan ?></textarea>
</div>
<div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" class="form-control" name="gambar" id="gambar">
    <small id="helpId" class="form-text text-muted">Masukkan gambar</small>
</div>
<div class="form-group">
    <label for="jawaban_a">Jawaban A</label>
    <input type="text"
    class="form-control" name="jawaban_a" id="jawaban_a" placeholder="Jawaban A" value="<?php echo $jawaban_a ?>">
</div>
<div class="form-group">
    <label for="jawaban_b">Jawaban B</label>
    <input type="text"
    class="form-control" name="jawaban_b" id="jawaban_b" placeholder="Jawaban B" value="<?php echo $jawaban_b ?>">
</div>
<div class="form-group">
    <label for="jawaban_c">Jawaban C</label>
    <input type="text"
    class="form-control" name="jawaban_c" id="jawaban_c" placeholder="Jawaban C" value="<?php echo $jawaban_c ?>">
</div>
<div class="form-group">
    <label for="jawaban_d">Jawaban D</label>
    <input type="text"
    class="form-control" name="jawaban_d" id="jawaban_d" placeholder="Jawaban D" value="<?php echo $jawaban_d ?>">
</div>
<div class="form-group">
    <label for="kunci">Kunci</label>
    <input type="text" class="form-control" name="kunci" id="kunci" aria-describedby="helpId" placeholder="Kunci" value="<?php echo $kunci ?>">
</div>