<?php
session_start();
include("../config.php");
$sql="insert into funds (Name,email,contact,amount,method) values ('".$_POST['name']."','".$_POST['email']."',".$_POST['contact'].",".$_POST['amount'].",'".$_POST['method']."')";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>=1){
    echo "]sasasfsad";
}
else{
    echo mysqli_error($conn);
}
header("location: project_details.php");
?>