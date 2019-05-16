<?php
     session_start();
     $con=mysqli_connect("localhost","tpaoffyo_tej","jdC8xc8DjdC8xc8D");
        if(mysqli_connect_error())
        {
            die("unable to connect");
        }
        mysqli_select_db($con,"tpaoffyo_tejpa");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MEMBERS</title>
        <meta name="viewport" conte nt="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="stylem.css">
    </head>
    <body>
        <u><h1>OUR MEMBERS</h1></u>
<?php
        $s="SELECT * from siam";
        $resultset = mysqli_query($con, $s) or die("database error:". mysqli_error($conn));
        while($record = mysqli_fetch_assoc($resultset)){
?>
    <a href="profile.php?id=<?php echo $record['username']; ?>">
    <div class="card text-center border-dark mb-3" style="width: 18rem;">
    <img class="card-img-top" src="images\<?php echo $record['image']; ?>" alt="Card image cap">
    <div class="card-body text-dark">
    <h5 class="card-title"><?php echo $record['name']; ?></h5>
    <p class="card-text"><?php echo $record['pos']; ?></p>
    </div>
    </div>
    <?php } ?>
    </a>
    </body>
</html>
