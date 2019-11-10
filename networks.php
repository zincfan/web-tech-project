<?php

include "config.php";

// Check user login or not
$name=$_SESSION['username'];
$password=$_SESSION['password'];

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

<p id="update_profile_pic">
<img src="default_profile_image_male.jpg">
<button id="update_button">UPDATE<br />PROFILE PICTURE</button>
</p>
<form id="usr_data" method="post" action="usr_networks.php">
<div>
<p>NAME:<input id="name" type="text" name="name" value="<?php echo $name;?>" /></p>
</div>
<div id="part">
<p>PASSWORD:<input id="password" type="password" name="password" value="<?php echo $password;?>" /></p>

</div>
<br />
<div id="p_data">
<h1 id="pd"><u>PROFESSIONAL DETAILS:</u></h1>
<p>UPDATE: <input type="file" name="prof_det" /></p>
<p><button><img src="doc.jpeg" height=50 width=50 align="middle"><a href="professional_details.php">CLICK to view current professional details</a></button></p>
</div>
<input id="submit_button" type="submit" value="SUBMIT" />
</form>
<hr />
<h2><u>YOUR NETWORKS:</u></h2>
<ul id="networks">

</ul>

<hr />
<script src="usr_networks.js"></script>
</body>
</html>  
