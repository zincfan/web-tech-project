<?php
include "config.php";



    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != "" && $password != "")
    {

        $sql_query = "select count(*) as cntUser from DB where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
             header('Location: repository.html');
        }
        else
        {
            echo "Invalid username and password";
        }
        }
?>
