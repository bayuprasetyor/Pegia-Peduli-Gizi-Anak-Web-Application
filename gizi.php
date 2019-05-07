<?php
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$tinggi = $_POST["tinggi"];
$berat = $_POST["berat"];

// perintah SQL
$query="insert into gizi values ('$tinggi',' $berat') " ;

$hasil=mysqli_query($konek_db,$query);

if ($tinggi< $berat){
	
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= bookingdokter.php'/>  ";
} 
else { echo "Data gagal disimpan
<meta http-equiv='refresh' content='2; url= index.php'/> ";
}
?>