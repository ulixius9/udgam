<?php
session_start();
include_once('config.php');
$name=$gender=$date=$email=$pass="";

$errors=array();

	$name=mysqli_real_escape_string($conn,$_POST['name']);
    $pass=mysqli_real_escape_string($conn,$_POST['pass']);
    $date=mysqli_real_escape_string($conn,$_POST['birthday']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $contact=mysqli_real_escape_string($conn,$_POST['contact']);
	$sql="insert into volunteers(vname,vpass,DOB,Gender,email,contact) values('$name','$pass','$date','$gender','$email','$contact')";
    if(mysqli_query($conn,$sql)){
		//echo "<script>alert('record added succeefully');</script>";
		$_SESSION['$username']=$name;
		$_SESSION['$success']="you are logged in";
		header("Location: Login/login.php");
		echo "heellow";
		exit();
	}
	else{
			echo "error not able to add record".mysqli_error($conn);
	}	

///check logged user.............
/*
//.......logout..............
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("index.php");
}

?>*/
?>