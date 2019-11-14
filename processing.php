<?php
include "config.php";
$_SESSION['loc']=$_COOKIE['loc'];
$_SESSION['temp']=$_SESSION['loc'];
$_SESSION['guest']=false;
header("Location:proj_rec.php");
?>
