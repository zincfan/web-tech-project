<?php
include "config.php";
$username=$_SESSION['username'];

$target_folder=$_POST['proj_name'];
mkdir("proj_record/$target_folder");

$sql="CREATE TABLE $target_folder (contributers VARCHAR(100) NOT NULL,PRIMARY KEY (contributers))";
mysqli_query($con, $sql);

$sql="INSERT INTO $target_folder (contributers) VALUES ('$username')";
mysqli_query($con, $sql);

$sql="INSERT INTO proj_list (project_name,contributers) VALUES ('$target_folder','$username')";

$option=$_POST['privacy'];

if($option=="public")
{
mysqli_query($con, $sql);
}

$sql="INSERT INTO $username (curr_proj,ratings,contributors) VALUES ('$target_folder','-','$username')";
mysqli_query($con, $sql);
echo "Created Successfully";
?>
