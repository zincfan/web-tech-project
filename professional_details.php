<?php
include "config.php";

$username=$_SESSION['username'];

$sql="SELECT resume FROM user_data WHERE username='$username'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$resume=$row['resume'];

?> 
<html>
<body onload="location.href='<?php echo $resume ?>'">
</body>
</html>
