<?php
include "login/config.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Recover password</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<br><br><br><br>
<h3>RECOVER PASSWORD:</h3>
<strong style="color: red;"><?php echo $msg_recover; ?></strong>
<form method="post">
<table class="table table-striped">
<tr>
<td style="text-align: right;">Email:</td><td><input type="text" placeholder="Email" name="email"></td>
</tr>
</table>
<input type="hidden" name="recover_password">
<button type="submit" class="btn">Recover password</button>
<br>
<a href="login.php">Back to login</a>
</form>
</center>
</body>
</html>