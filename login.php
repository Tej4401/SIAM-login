<?php
session_start();
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
        <h1 class="head">WELCOME TO SIAM!!</h1>
        <div class="container">
        <div class="loginbox">
            <div class="row">
                <div class="col-md-6 register">
                <h3>SIGN UP:</h3>
                    <form action="validation.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>NAME:&nbsp;</label><input type="text" class="form-control-sm" placeholder="name" name="name" id="name" required><br></div>
                        <div class="form-group"><label>USERNAME: &nbsp;</label><input type="text" class="form-control-sm" placeholder="username" name="username" id="username" required><br></div>
                        <div class="form-group"><label>PASSWORD: &nbsp;</label><input type="password" class="form-control-sm" placeholder="password" name="password" id="password" required><br></div>
                        <div class="form-group"><label>EMAIL-ID: &nbsp;</label><input type="email" class="form-control-sm" placeholder="email-id" name="email" id="email" required><br></div>
                        <div class="form-group"><label>CONTACT NO: &nbsp;</label><input type="number" class="form-control-sm" placeholder="contact" name="contact" id="contact" required><br></div>
                        <p>SELECT YOUR TEAM:</p>
                        <div class="form-group"><select name="team" id="team" required>
                                                          <option value="collab">COLLABORATION AND OUTREACH</option>
                                                          <option value="research">RESEARCH</option>
                                                          <option value="marketing">MARKETING</option>
                                                        </select></div>
                        <p>CHOOSE YOUR POSITION: </p>
                     <div> <input type="radio" name="pos" id="core" value="CORE-MEMBER" required>  <label><b>CORE-MEMBER</b></label>
                       <input type="radio" name="pos" id="board" value="BOARD-MEMBER"> <label><b>BOARD MEMBER</b></label></div>
                        <div class="form-group"><label>UPLOAD YOUR PHOTO: &nbsp;</label><input type="file" class="form-control-sm" name="image" id="photo" required></div>
                        <input type="submit" class="btn btn-success button" name="upload" value="signup">
                    </form>
                </div>
                <div class="col-md-6 login">
                <h3>LOGIN:</h3>
                    <form action="check.php" method="POST">
                    <div class="form-group">
                        <label>USERNAME: &nbsp;</label><input type="text" class="form-control-sm" placeholder="username" name="username" id="username" required><br>
                        <label>PASSWORD: &nbsp;</label><input type="password" class="form-control-sm" placeholder="password" name="password" id="password" required><br></div>
                        <br><input type="submit" class="btn btn-success" value="login">
                        <?php
                            if(isset($_SESSION["error"]))
                            {
                                $error=$_SESSION["error"];
                                echo "$error";
                            }
                    ?>  
                    </form>
                    <a href='password.php'><button class="btn btn-dark">Change Password</button></a></div>
            </div>
            </div> 
        </div>
    </body>
</html>
<?php
    unset($_SESSION["error"]);
?> 
