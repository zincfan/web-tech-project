<?php 
include "config.php";

    $uname = $_POST['username'];
    $password =$_POST['password'];

    if ($uname != "" && $password != "")
    {

        $sql_query = "select count(*) as cntUser from DB where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0)
        {
            $_SESSION['username'] = $uname;
            $_SESSION['password']= $password;
             header('Location: Repository-2.php');
        }
        else
        {
            echo "Invalid username and password";
        }
        }
?>
