<?php
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$nama = $_POST["nama"];
$no_telp = $_POST["no_telp"];
$tanggal = $_POST["tanggal"];
$dokter = $_POST["dokter"];

// perintah SQL
$query="insert into booking values ('$nama',' $no_telp','$tanggal','$dokter') " ;

$hasil=mysqli_query($konek_db,$query);

if ($hasil){
	
echo " <center> <b> <font color = 'green' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= indexuser.php'/>  ";
} 
else { echo "Data gagal disimpan
<meta http-equiv='refresh' content='2; url= indexuser.php'/> ";
}
?>