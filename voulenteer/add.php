<?php
session_start();
include("../config.php");
$sql="insert into child (cname,gender,class,sid) values('".$_POST['cname']."','".$_POST['gender']."','".$_POST['class']."',".$_POST['sid'].")";
$result=mysqli_query($conn,$sql);
$sql1="select cid from child where cname='".$_POST['cname']."'";
$i=mysqli_query($conn,$sql1);
$k=mysqli_fetch_array($i);
echo $k['cid'];
$sql2="insert into cdata values (".$k['cid'].",".$_SESSION['vid'].",'".$_POST['Grade']."',".$_POST['marks'].",'".$_POST['remarks']."',".$_POST['sem'].") ";
$result=mysqli_query($conn,$sql2);
header("location: volen.php");
?>