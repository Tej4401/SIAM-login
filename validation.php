<?php
    session_start();
    $con=mysqli_connect("localhost","tpaoffyo_tej","jdC8xc8DjdC8xc8D");
        if(mysqli_connect_error())
        {
            die("unable to connect");
        }
        mysqli_select_db($con,"tpaoffyo_tejpa");
        $image = basename($_FILES['image']['name']);
        $user=$_POST["username"];
        $name=$_POST["name"];
        $pass=$_POST["password"];
        $contact=$_POST["contact"];
        $email=$_POST["email"];
        $team=$_POST["team"];
        $pos=$_POST["pos"];
        $s="SELECT * from siam where username='$user'";
        $result=mysqli_query($con,$s);
        $num=mysqli_num_rows($result);
        if($num == 1)
        {
            echo "username already taken";
        }
        else
        {
            if($_FILES['image']['size'] > 2048*1024)
            {
                echo "You can only upload image of size less than or equal to 2mb";
            }
            else{
            $reg="insert into siam(name,username,password,contact,email,team,pos,image) values('$name','$user','$pass','$contact','$email','$team','$pos','$image')";
            mysqli_query($con,$reg);
            echo "successfully registered";
            if (isset($_POST['upload'])) {
                $target = "images/".$image;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
                {
                    echo "image upload successfully";
                    echo "<br>";
                }
                else
                {
                    echo "There was a problem uploading image";
                    echo "<br>";
                }
            }
        }
        }
?>