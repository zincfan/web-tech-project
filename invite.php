<?php
include "config.php";
$username=$_POST['username'];
$target_folder=$_SESSION['temp'];


$sql="INSERT INTO $target_folder (contributers) VALUES ('$username')";
mysqli_query($con, $sql);

$owner=$_SESSION['username'];

$sql="INSERT INTO $username (curr_proj,ratings,contributors) VALUES ('$target_folder','-','$owner')";
mysqli_query($con, $sql);

$owner_net=$owner.'_net';
$sql="INSERT INTO $owner_net VALUES('$username')";
mysqli_query($con, $sql);

$username_net=$username.'_net';
$sql="INSERT INTO $username_net VALUES('$owner')";
mysqli_query($con, $sql);

echo "INVITATION SENT!";

?>

