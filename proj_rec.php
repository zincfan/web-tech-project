<?php 
include "config.php";
$username=$_SESSION['username'];
$loc=$_SESSION['loc'];
$dir="proj_record/$loc";
?>
<html>
<body>
<ul>
<?php

if (is_dir($dir)){

  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){?>
     <li> <?php echo  $file."<br>" ;?></li>
   <?php }
    closedir($dh);
  }
}
?>
</ul>
</body>
</html>


