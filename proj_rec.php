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
<th>---</th>
</tr>

<?php 
$a = scandir($dir);
$i=0;
?>

<?php while($i<count($a)) {?>
<tr onclick="location.href='<?php if(!is_dir($dir.'/'.$a[$i])) {echo $dir.'/'.$a[$i];} else {$_SESSION['loc']=$loc.'/'.$a[$i]; echo "proj_rec.php";} ?>'" >
<td style="text-align:center"> <?php echo $a[$i]; ?> </td>
<td style="text-align:center"> <?php if(is_dir($dir.'/'.$a[$i])) echo "D"; else echo "F"; ?> </td>
</tr>

<?php $i++; } ?>

</table>
<button onclick='location.href="edit_proj.php"'>Upload Files</button>

</body>
</html>

<?php

?>
