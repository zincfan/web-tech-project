<?php
include "config.php";
$usr_net=$_SESSION['username']."_net";
$sql = "SELECT networks FROM $usr_net";
$result = mysqli_query($con, $sql);
?>

<html>
<body style="background-color:grey">
<ul>

<?php 
if (mysqli_num_rows($result) > 0) 
{

while($row = mysqli_fetch_assoc($result))
{
?>
<li> <?php echo $row['networks']; ?> </li>

<?php
 }
 }
?>
</ul>
</body>
</html>
