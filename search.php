<?php
include "config.php";

$key=$_POST['key'];

$sql="SELECT * FROM proj_list WHERE project_name='$key'";

$result = mysqli_query($con, $sql);
?>

<html>
<body style="background-color:grey">
<table style="width:100%">
<tr>
<th>PROJECT NAME</th>
<th>OWNER</th>
</tr>

<?php 
if (mysqli_num_rows($result) > 0) 
{

while($row = mysqli_fetch_assoc($result))
{
?>
<tr onclick="open_proj('<?php echo $row['project_name']; ?>')">
<td style="text-align:center"><?php echo $row['project_name']; ?> </td>
<td style="text-align:center"><?php echo $row['contributers']; ?> </td>
</tr>
<?php
 }
 }
?>
</table>
<script>
function open_proj(proj_name)
{
document.cookie="proj_name="+proj_name;
location.href="transfer.php";
}

</script>
</body>
</html>

