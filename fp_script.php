<?php

require("common.php");
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
echo 'An Email has been sent to your registered email-id with the link to reset your password.';
?>
<p>Click <a href="index.php">Here</a> to login again continue shopping!