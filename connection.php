<?php
$host="localhost";
$user="root";
$pass= " ";
$db = "poll";

$con = mysql_connect($host,$user);
$db = mysql_select_db($db);

if(!$con){
die("Connection Error".mysqli_error());
}

?>

