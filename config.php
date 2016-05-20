<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "sample";
$con = mysql_connect($hostname, $username, $password);
mysql_select_db("sample", $con);
if(empty($con))
{
die("Connection Error :". mysql_error());
}


?>