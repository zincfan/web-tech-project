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
<th style="text-align:center">Current Projects</th>
<th style="text-align:center">Ratings</th>
<th style="text-align:center">Owner</th>
</tr>
</table>
<table>
<tr id="invisible">
<th id="c1">Current Projects</th>
<th id="c2">Ratings</th>
<th id="c3">Owner</th>
</tr>
<?php 
if (mysqli_num_rows($result) > 0) 
{

while($row = mysqli_fetch_assoc($result))
{

?>
<tr >
<td onclick=temp("<?php echo $row['curr_proj']; ?>")  ><?php echo $row['curr_proj']; ?></td>
<td><?php echo $row['ratings']; ?></td>
<td><?php echo $row['contributors']; ?></td>
</tr>

<?php
}
}


?>

</table>
<script>
function temp(loc)
{
document.cookie="loc="+loc;
window.open('processing.php',target='_blank')
}
</script>
</body>
</html>

