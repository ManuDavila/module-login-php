<?php
include "login/config.php";
include "login/login/Get-number-reset.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Reset Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<br><br><br><br>
<h3>RESET PASSWORD:</h3>
<strong style="color: red;"><?php echo $msg_reset; ?></strong>
<form method="post">
<table class="table table-striped">
<tr>
<td style="text-align: right;">Email:</td><td><input type="text" placeholder="Email" name="email"></td>
</tr>
<tr>
<td style="text-align: right;">Password:</td><td><input type="password" placeholder="Password" name="password"></td>
</tr>
<tr>
<td style="text-align: right;">Repeat Password:</td><td><input type="password" placeholder="Repeat Password" name="repeat_password"></td>
</tr>
</table>
<input type="hidden" name="reset_password" value="<?php echo $reset; ?>">
<button type="submit" class="btn">Reset</button>
<br>
<a href="login.php">Back to login</a>
</form>
</center>
</body>
</html>