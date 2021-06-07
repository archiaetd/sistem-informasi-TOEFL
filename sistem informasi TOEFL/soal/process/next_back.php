<?php  
include("../../admin/sys/koneksi.php");
error_reporting(E_ALL ^ E_WARNING || E_NOTICE);

if ($_POST['action'] == 'Next >') {

	$select = mysqli_query($conn, "Select * from soal where tipe_soal = 'reading'" );
    $no = 1;
     
    $idtes = mysqli_query($conn, "select max(id_tes) FROM tes");
	$idnya = mysqli_fetch_array($idtes);

    while($data = mysqli_fetch_array($select)){
    $no++;
                    
	$a = $_POST[$no];

	$insert = mysqli_query($conn, "update cek_soal set jawaban='$a' where id_soal=$data[0] and id_tes = $idnya[0]");

    if($insert){
     		echo'<script> 
            document.location = "../../Tutorial/end reading section directory.html";
        </script>';
         
    }else{
        echo "error";
    }
}
	
} else if ($_POST['action'] == '< Back') {
    echo'<script> 
            document.location = "../../Tutorial/reading section direction.html";
        </script>';
} else {
   echo '<script>
                document.location = "../soal_reading.php";
         </script>
         ';}


?>