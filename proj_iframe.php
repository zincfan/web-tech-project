<?php 
include "config.php";
$username=$_SESSION['username'];
$sql = "SELECT curr_proj,ratings,contributors FROM $username";
$result = mysqli_query($con, $sql);
?>

<html>
<head>
<link rel="stylesheet" href="proj_iframe.css">
</head>
<body>
<table id="head">

<tr>
<th >Current Projects</th>
<th >Ratings</th>
<th >Contributors</th>
</tr>
</table>
<table>
<tr id="invisible">
<th id="c1">Current Projects</th>
<th id="c2">Ratings</th>
<th id="c3">Contributors</th>
</tr>
<?php 
if (mysqli_num_rows($result) > 0) 
{

while($row = mysqli_fetch_assoc($result))
{
$loc=$row['curr_proj_link'];
?>
<tr onclick="window.open('<?php echo $loc?>',target='_blank')">
<td><?php echo $row['curr_proj']; ?></td>
<td><?php echo $row['ratings']; ?></td>
<td><?php echo $row['contributors']; ?></td>
</tr>

<?php
}
}

?>

</table>

</body>
</html>

