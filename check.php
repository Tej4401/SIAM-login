<?php
    session_start();
    $con=mysqli_connect("localhost","tpaoffyo_tej","jdC8xc8DjdC8xc8D");
        if(mysqli_connect_error())
        {
            die("unable to connect");
        }
        mysqli_select_db($con,"tpaoffyo_tejpa");
        $error = "username/password incorrect";
        $user=$_POST["username"];
        $pass=$_POST["password"];
        $s="SELECT * from siam where username='$user' && password='$pass'";
        $result=mysqli_query($con,$s);
        $num=mysqli_num_rows($result);
        if($num == 1)
        {
            header('location:members.php');
        }
        else
        {
            $_SESSION["error"] = $error;
            header('location:login.php');
        }
?>