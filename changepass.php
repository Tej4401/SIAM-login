<?php
session_start();
$con=mysqli_connect("localhost","tpaoffyo_tej","jdC8xc8DjdC8xc8D");
    if(mysqli_connect_error())
    {
        die("unable to connect");
    }
    mysqli_select_db($con,"tpaoffyo_tejpa");
    $user=$_POST["user"];
    $pass=$_POST["old"];
    $new=$_POST["new"];
    $s="SELECT * from siam where username='$user' && password='$pass'";
    $t="UPDATE siam SET password='$new' where username='$user'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num == 1)
    {
        mysqli_query($con,$t);
        echo "password changed successfully!!";
    }
    else
    {
        echo "password you entered is incorrect";    
    }
?>