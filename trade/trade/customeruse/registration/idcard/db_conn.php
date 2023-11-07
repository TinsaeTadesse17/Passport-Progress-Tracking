<?php  

$sname = "localhost";
$uname = "gage";
$password = "1234";

$db_name = "trade";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}