<?php
include "login/config.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $lang_recover_password["recover_password"]; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<br><br><br><br>
<h3><?php echo $lang_recover_password["recover_password"]; ?>:</h3>
<strong style="color: red;"><?php echo $msg_recover; ?></strong>
<form method="post">
<table class="table table-striped">
<tr>
<td style="text-align: right;"><?php echo $lang_recover_password["email"]; ?>:</td><td><input type="text" placeholder="<?php echo $lang_recover_password["email"]; ?>" name="email"></td>
</tr>
</table>
<input type="hidden" name="recover_password">
<button type="submit" class="btn"><?php echo $lang_recover_password["recover_password"]; ?></button>
<br>
<a href="login.php"><?php echo $lang_recover_password["back_to_login"]; ?></a>
</form>
</center>
</body>
</html>