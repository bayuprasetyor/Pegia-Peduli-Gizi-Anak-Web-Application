<?php


// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$tinggi = $_POST["tinggi"];
$berat = $_POST["berat"];
$umur = $_POST["umur"];

$database = new mysqli('localhost', 'root', '', 'login'); 
// perintah SQL
$query="insert into gizi values ('$tinggi',' $berat','$umur') " ;
$query = 'SELECT median FROM hitung where umur ='.$umur;
$result_set = $database->query($query);//?? 
$row = $result_set->fetch_assoc();

$kuery = 'SELECT sd FROM hitung where umur ='.$umur;
$result = $database->query($kuery);//?? 
$baris = $result->fetch_assoc();

$median=$row['median'];
$sd=$baris['sd'];
$t=$tinggi/100;
$imt=$berat/($t*$t);
$z=($imt-$median)/($sd-$median);
if ($z >= 2 and $umur <=6 ){
header("Location: submitsatu_gemuk.php");
}
else if($z >= 2 and $umur >= 7 and $umur <=12){
header("Location: submitdua_gemuk.php");
} 
else if($z >= 2 and $umur >= 13 and $umur <=35){
header("Location: submittiga_gemuk.php");
}
else if($z >= 2 and $umur >= 36 and $umur <=60){
header("Location: submitempat_gemuk.php");
}

else if ($z >= -2 and $z <2 and $umur <=6 ){
header("Location: submitsatu_normal.php");
}
else if ($z >= -2 and $z <2 and $umur >= 7 and $umur <=12){
header("Location: submitdua_normal.php");
} 
else if($z >= -2 and $z <2 and $umur >= 13 and $umur <=35){
header("Location: submittiga_normal.php");
}
else if($z >= -2 and $z <2 and $umur >= 36 and $umur <=60){
header("Location: submitempat_normal.php");
}

else if ($z >= -3 and $z <-2 and $umur <=6 ){
header("Location: submitsatu_kurus.php");
}
else if($z >= -3 and $z <-2 and $umur >= 7 and $umur <=12){
header("Location: submitdua_kurus.php");
} 
else if($z >= -3 and $z <-2 and $umur >= 13 and $umur <=35){
header("Location: submittiga_kurus.php");
}
else if($z >= -3 and $z <-2 and $umur >= 36 and $umur <=60){
header("Location: submitempat_kurus.php");
}

else if ($z < -3 and $umur <=6 ){
header("Location: submitsatu_sangatkurus.php");
}
else if($z < -3 and $umur >= 7 and $umur <=12){
header("Location: submitdua_sangatkurus.php");
} 
else if($z < -3 and $umur >= 13 and $umur <=35){
header("Location: submittiga_sangatkurus.php");
}
else if($z < -3 and $umur >= 36 and $umur <=60){
header("Location: submitempat_sangatkurus.php");
}
?>