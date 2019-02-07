<?php 
$dbusername="root";
$dbpassword="";
$dbserver="localhost";
$dbname="udgam";

$conn=mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);

if(!$conn){
    die("connection error".mysqli_error());
}

?>