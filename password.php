<!DOCTYPE html>
<html>
    <head>
        <title>change password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="loginbox">
            <h3>Password Change:</h3>
        <form action="changepass.php" method="POST">
            <label>USERNAME:&nbsp;</label><input type="text" class="form-control" placeholder="username" name="user" id="user" required><br>
            <label>OLD PASSWORD: &nbsp;</label><input type="password" class="form-control" placeholder="oldpassword" name="old" id="old" required><br>
            <label>NEW PASSWORD: &nbsp;</label><input type="password" class="form-control" placeholder="newpassword" name="new" id="new" required>
            <br><input type="submit" class="btn btn-dark" value="change password"><br>   
        </form>
</div>
    </body>
</html>