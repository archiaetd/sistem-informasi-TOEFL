<?php

include("../../admin/sys/koneksi.php");

$idtes = mysqli_query($conn, "select max(id_tes) FROM tes");
$idnya = mysqli_fetch_array($idtes);

$select = mysqli_query($conn, "select cek_soal.*, soal.kunci, soal.tipe_soal from cek_soal INNER JOIN soal ON cek_soal.id_soal = soal.id_soal where id_tes = $idnya[0] AND tipe_soal = 'reading' ");

$cek = mysqli_query($conn, "SELECT nama FROM `tes` WHERE `id_tes` = $idnya[0]" );
$nama = mysqli_fetch_array($cek);
$score = 0;
while($data=mysqli_fetch_array($select)){
  if($data["jawaban"]==$data["kunci"]){
    $score += 20;
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
    $score1 += 20;
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
<html>
<head>
	<title>TOEFL</title>
</head>
<body>
 
	<center>
 
		<h1>Score TOEFL</h1>
		<h1>Hai, <?php echo ($nama[0]); ?><br />You Can Start Your TOEFL Simulation Test Score Is</h1> 
	</center>
 
	<table border="1" style="width: 100%">
		<tr>
			<th>Section</th>
			<th>Nama</th>
			<th>Level</th>
		</tr>
		<tr>
			<td>Reading</td>
			<td><?php echo $score;?></td>
			<td><?php echo $level;?></td>
		</tr>
		<tr>
			<td>Listening</td>
			<td><?php echo $score1;?></td>
			<td><?php echo $level1;?></td>
		</tr>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>
