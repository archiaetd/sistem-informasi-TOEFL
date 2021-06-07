<?php  
include("../../admin/sys/koneksi.php");

error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
if ($_POST['action'] == 'Next >') {
    var_dump($_POST['timer']);

	$select = mysqli_query($conn, "Select * from soal where tipe_soal ='listening'" );
    $no = 1;
     
    $idtes = mysqli_query($conn, "select max(id_tes) FROM tes");
	$idnya = mysqli_fetch_array($idtes);
    

    while($cek = mysqli_fetch_array($select)){
    $no++;
                    
	$a = $_POST[$no];
    echo($a);
	$insert = mysqli_query($conn, "update cek_soal set jawaban='$a' where id_soal=$cek[0] and id_tes = $idnya[0]");
    if($insert){
     		echo'<script> 
            document.location = "../../Tutorial/end listening section directory.html";
        </script>';
         
    }else{
        echo'<script> 
            
            document.location = "../../Tutorial/listening section direction.html";
        </script>';
    }
 }
	
} else if ($_POST['action'] == '< Back') {

 echo '<script>
              document.location = "../soal_listening.php";
      </script>
';
}


?>