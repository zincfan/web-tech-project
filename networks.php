<?php

include "config.php";

// Check user login or not
$name=$_SESSION['username'];
$password=$_SESSION['password'];

$sql="SELECT image FROM user_data where username='$name'";
$result = mysqli_query($con, $sql);
$image='default_profile_image_male.jpg';

if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_assoc($result);
if($row['image'])
{
$image=$row['image'];
}

}

$resume="";
$sql="SELECT resume FROM user_data where username='$name'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_assoc($result);
if($row['resume'])
{
$resume=$row['resume'];
}

}

if(!isset($_SESSION['username'])){
    header('Location: index.html');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.html');
}


?>
<html>
<head>
<link rel="stylesheet" href="usr_networks.css">

</head>
<body>
<form method="post" action="pic_upload.php" enctype="multipart/form-data">
<p id="update_profile_pic">
<img src="<?php echo $image ?>" id="img"/>
<input type="file" name='image' />
<input id="submit_pic" type="submit" name="submit" value="UPLOAD" />
</form>
</p>
<form id="usr_data" method="post" action="usr_networks.php" enctype="multipart/form-data">
<div>
<p>NAME:<input id="name" type="text" name="name" value="<?php echo $name;?>" /></p>
</div>
<div id="part">
<p>PASSWORD:<input id="password" type="password" name="password" value="<?php echo $password;?>" /></p>

</div>
<br />
<div id="p_data">
<h1 id="pd"><u>PROFESSIONAL DETAILS:</u></h1>
<p>UPDATE: <input type="file" name="prof_det" value="<?php echo $resume;?>" /></p>

</div>
<input id="submit_button" type="submit" value="SUBMIT" />
</form>
<div id="footer">
<hr />
<p><button onclick="location.href='professional_details.php'"><img src="doc.jpeg" height=50 width=50 align="middle">CLICK to view current professional details</button></p>
<hr />
<br />
<h2><u>YOUR NETWORKS:</u></h2>
<iframe id="net" src="networks_iframe.php"></iframe>

<hr />
</div>



</body>
</html>  


