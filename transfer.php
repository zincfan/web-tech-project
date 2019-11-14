<?php 
include "config.php";
$username=$_SESSION['username'];

$_SESSION['loc']=$_COOKIE['proj_name'];
$_SESSION['temp']=$_SESSION['loc'];
$_SESSION['guest']=true;
header("Location:proj_rec.php");
?>
