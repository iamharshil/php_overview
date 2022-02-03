<?php 
/*
way to connect MYSQL db
1. mysqli extention 
2. PDO
*/

//connect to db
$servername = 'localhost';
$username = 'root';
$password = ''; //empty when its local

//create a connection

$con = mysql_connect($servername, $username, $password); //here con local var could be anything.

if (!$con) {
	die("failed to connect."); // in condition ! means not true.
}
else {
	echo "connected successfully."
}


?>