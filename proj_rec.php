<?php 
include "config.php";
$username=$_SESSION['username'];
$loc=$_SESSION['loc'];


$dir="proj_record/$loc";
$parent=$dir.'/..';
?>
<html>
<body>
<button onclick='location.href="reset_dir.php"' >RESET DIR</button>
<table style="width:100%;">
<tr>
<th>FILES</th>
<th>TYPE</th>
<th>DEL</th>
</tr>

<?php 
$a = scandir($dir);
$i=0;
?>

<?php while($i<count($a)) {?>
<tr  >
<td style="text-align:center" onclick="location.href='<?php if(!is_dir($dir.'/'.$a[$i])) {echo $dir.'/'.$a[$i];} else {$_SESSION['loc']=$loc.'/'.$a[$i]; echo "proj_rec.php";} ?>'"> <?php echo $a[$i]; ?> </td>
<td style="text-align:center"> <?php if(is_dir($dir.'/'.$a[$i])) echo "DIR"; else echo "FILE"; ?> </td>
<td style="text-align:center"><button onclick="del('<?php echo $dir.'/'.$a[$i]; ?>')">X</button></td>
</tr>

<?php $i++; } ?>

</table>
<button onclick='location.href="edit_proj.html"'>Upload Files</button>
<?php
if($loc==$_SESSION['temp'] && $_SESSION['guest']!=true)
{
echo
'<h1>Enter invites!</h1>
<form method="post" action="invite.php">
<p>USERNAME<input type="text" name="username" />
<input type = "hidden" name = "proj_name" value = "<?php echo $loc ?>" />
<input type="submit" value="INVITE!" />';
}

?>
</form>
<script>
function del(path)
{
document.cookie="del_path="+path;

location.href="delete.php";
}

</script>
</body>
</html>

<?php

?>
