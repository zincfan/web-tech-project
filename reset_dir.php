<?php 
include "config.php";
$username=$_SESSION['username'];
$_SESSION['loc']=$_SESSION['temp'];
header("Location:proj_rec.php");
?>
