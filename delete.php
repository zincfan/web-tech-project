 <?php
include "config.php";
$file = $_COOKIE['del_path'];

if (!unlink($file)) {
  echo ("Error deleting $file");
} else {
  echo ("Deleted $file");
}
?> 
