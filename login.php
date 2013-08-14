<?php
include "login/config.php";
include "login/login/Confirm.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $lang_login["login"]; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<br><br><br><br>
<h3><?php echo $lang_login["login"]; ?>:</h3>
<strong style="color: red;"><?php echo $msg_login; ?></strong>
<form method="post">
<table class="table table-striped">
<tr>
<td style="text-align: right;"><?php echo $lang_login["user"]; ?>:</td><td><input type="text" placeholder="<?php echo $lang_login["user"]; ?>" name="user"></td>
</tr>
<tr>
<td style="text-align: right;"><?php echo $lang_login["password"]; ?>:</td><td><input type="password" placeholder="<?php echo $lang_login["password"]; ?>" name="password"></td>
</tr>
</table>
<input type="hidden" name="login">
<button type="submit" class="btn"><?php echo $lang_login["login"]; ?></button>
<br>
<a href="register.php"><?php echo $lang_login["register"]; ?></a>
<br>
<a href="recover-password.php"><?php echo $lang_login["recover_password"]; ?></a>
</form>
</center>
</body>
</html>