<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | Mobile-Store.com</title>
        <link rel="shortcut icon" href="img/srtcticon.png" type="image/png">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="bootstrap/css/style.css" rel="stylesheet">
    </head>
    <body style="padding-top: 50px;">

        <div class="modal fade" id="lmodal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="login_submit.php">
                            <div class="form-group">
                                <label for="email"><span class="glyphicon glyphicon-user"></span> Username</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" checked>Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p>Not a member? <a href="signup.php">Sign Up</a></p>
                        <p><a href="forgot_password.php">Forgot Password?</a></p>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>
