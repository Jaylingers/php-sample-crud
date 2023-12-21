<?php  

$sname = "localhost:33306";
$uname = "root";
$password = "root";

$db_name = "my_db";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}