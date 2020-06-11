<?php
    require 'common.php';
    if (isset($_SESSION['email'])) 
    {
        header('location: product.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password | Mobile-Store.com</title>
        <link rel="shortcut icon" href="img/srtcticon.png" type="image/png">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="bootstrap/css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include 'header.php';
        ?><br><br><br><br>
    <center>
        <div class="panel panel-primary p1">
            <div class="panel-heading">
                <h1>Password Reset</h1>
            </div><br><br>
            <div class="panel body">
                
                <form method="POST" action="fp_script.php">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter your Email-id" name="email">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary pull-left">Submit</button>
                </form>
            </div><br>
            
        </div><br><br><br><br><br><br><br><br><br>
        </center>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>