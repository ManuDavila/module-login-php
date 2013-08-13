<?php
include "login/config.php";
include "login/login/Confirm.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<br><br><br><br>
<h3>LOGIN:</h3>
<strong style="color: red;"><?php echo $msg_login; ?></strong>
<form method="post">
<table class="table table-striped">
<tr>
<td style="text-align: right;">Nick or Email:</td><td><input type="text" placeholder="Nick or Email" name="user"></td>
</tr>
<tr>
<td style="text-align: right;">Password:</td><td><input type="password" placeholder="Password" name="password"></td>
</tr>
</table>
<input type="hidden" name="login">
<button type="submit" class="btn">Login</button>
<br>
<a href="register.php">Register</a>
<br>
<a href="recover-password.php">Recover Password</a>
</form>
</center>
</body>
</html>