<?php

include "config.php";
$username=$_SESSION['username'];

$target_dir='proj_record/'.$_SESSION['temp'].'/';


for($i=0;$i<count($_FILES["file"]["name"]);$i++)
{
$target_file = $target_dir . basename($_FILES["file"]["name"][$i]);
if (move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file))
{
	echo "The file ". basename( $_FILES["file"]["name"][$i]). " has been uploaded.";
} 
else 
{
        echo "Sorry, there was an error uploading your file.";
}
}


?>
