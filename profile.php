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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="row"> 
            <div class="col-sm-2 d-none d-sm-block logo"><a href="https://www.siamvit.com/">
                <figure class="swap-on-hover">
                        <img  class="swap-on-hover__front-image" src="logo-light.png" width="180px" height="70px"/>
                         <img class="swap-on-hover__back-image" src="logo-dark.png" width="180px" height="70px"/>
                       </figure>
                         </a></div>
                <div class="col-sm-10 d-none d-sm-block icon-bar">
                <a href="login.php"><i class="fa fa-home"></i></a> 
                <a href="https://www.facebook.com/SIAMVIT/"><i class="fa fa-facebook-f"></i></a> 
                <a href="https://www.linkedin.com/company/siam-vit"><i class="fa fa-linkedin-square"></i></a> 
                <a href="https://www.instagram.com/siamvit/"><i class="fa fa-instagram"></i></a>
                <a href="https://github.com/SIAM-VIT"><i class="fa fa-github"></i></a> 
                <a href="https://en.wikipedia.org/wiki/Society_for_Industrial_and_Applied_Mathematics"><i class="fa fa-wikipedia-w"></i></a>
              </div>
            </div>
            <div class="d-block d-sm-none">
            <nav class="navbar navbar-expand-lg" style="background-color: black;">
                <a class="navbar-brand" href="#"><img  src="logo-light.png" width="180px" height="40px"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="fa fa-navicon" style="color:white; padding:5px; border:solid; border-radius:4px; border-color:darkgray;"></i></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav text-center mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="login.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://www.facebook.com/SIAMVIT/">Facebook</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://www.linkedin.com/company/siam-vit">Linkedin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/siamvit/">instagram</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="https://github.com/SIAM-VIT">Github</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://en.wikipedia.org/wiki/Society_for_Industrial_and_Applied_Mathematics">Wikipedia</a>
                          </li>
                  </ul>
                </div>
              </nav>
            </div>
        <div style="display: flex; justify-content: center;">
            <div class="card" style="width:30rem ">
                    <img class="card-img-top" src="images\<?php echo $record['image']; ?>" alt="Card image cap" height="250px" width="250px">
                    <div class="card-body">
                      <h4 class="card-title">Name:<?php echo $record['name']; ?></h4>
                      <p class="card-text"><b><?php echo $record['pos']; ?></b></p>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><h6>Team:<?php echo $record['team']; ?></h6></li>
                      <li class="list-group-item"><h6>E-Mail:<?php echo $record['email']; ?></h6></li>
                    </ul>
                </div>
                </div>
                </div><div>
                <footer>
            &copy;SIAM VIT
        </footer></div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
