<?php
  $host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'login';  
 
  $konek_db = mysqli_connect($host, $user, $password,$database);
 
  $find_db = mysqli_select_db($konek_db,$database) ;
  if(!$find_db){
	  die("gagal memilih database");
  }
?>