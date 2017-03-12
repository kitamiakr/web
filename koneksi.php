<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pweb";

$conn = mysql_connect($host, $user, $pass);

if ($conn) {
	$buka = mysql_select_db($db);
	if (!$buka) {
		die("DATABASE TIDAK DITEMUKAN");
	}
	}else{
		die("SERVER MYSQL TIDAK TERHUBUNG");
}
?>