<?php 
session_start();
include_once('config.php');
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $query = "SELECT vname,vid FROM volunteers WHERE email ='$email' AND vpass ='$password'";
	if ($results = mysqli_query($conn, $query)) {
		$row=mysqli_fetch_array($results);
          $_SESSION['username'] = $row['vname'];
          $_SESSION['vid']=$row['vid'];
		  $_SESSION['success'] = "You are now logged in";
          if ($_SESSION['username']=='admin')
          {
            header('location: Admin/admin.php');
	  	    exit();
          } 
          else {
            header('location: voulenteer/volen.php');
            exit();
          } 
          
	}
  	else {
          array_push($errors, "Wrong username/password combination");
          echo "error";
  	}
?>