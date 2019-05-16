<?php
     session_start();
     $con=mysqli_connect("localhost","tpaoffyo_tej","jdC8xc8DjdC8xc8D");
        if(mysqli_connect_error())
        {
            die("unable to connect");
        }
        mysqli_select_db($con,"tpaoffyo_tejpa");
        $user=$_GET['id'];
        $s="SELECT * from siam where username='$user'";
        $result=mysqli_query($con,$s);
        $record = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SIAM VIT USER LOGIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div style="display: flex; justify-content: center;">
            <div class="card bg-success mb-3" style="width:30rem ">
                    <img class="card-img-top" src="images\<?php echo $record['image']; ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Name:<?php echo $record['name']; ?></h5>
                      <p class="card-text"><b><?php echo $record['pos']; ?></b></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Team:<?php echo $record['team']; ?></li>
                      <li class="list-group-item">E-Mail:<?php echo $record['email']; ?></li>
                    </ul>
                </div>
                </div>
    </body>
</html>