<?php 

$host="localhost";
$user="root";
$pass= "";
$db="oop_login";
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
   echo"Failed to connect to DB".$conn->connect_error;
}
?>