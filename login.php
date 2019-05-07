<?php
session_start();
 
mysql_connect("localhost", "root", "");
mysql_select_db("login");

if(isset($_POST['login'])){
	$username = mysql_real_escape_string(htmlentities($_POST['username']));
 
	$sql = mysql_query("SELECT * FROM form WHERE username='$username'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo '<script language="javascript">alert("user tidak ditemukan"); document.location="index.php";</script>';
	}else{
		$row = mysql_fetch_assoc($sql);
		if($row['level'] == 1){
			$_SESSION['user']=$username;
			header("Location: indexuser.php");
		}else{
			$_SESSION['dokter']=$username;
			header("Location: indexdokter.php");;
		}
	}
}
?>
