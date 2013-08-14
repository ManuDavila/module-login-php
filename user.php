<?php
include "login/login/Session.php";
include "login/config.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $lang_user["user"]; ?> <?php echo $user_nick; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<br><br><br><br>
<h3><?php echo $lang_user["welcome"]; ?> <?php echo $user_nick; ?></h3>
<form method="post">
<button class="btn"><?php echo $lang_user["exit"]; ?></button>
<input type="hidden" name="exit">
</form>
<img src="<?php echo $user_avatar; ?>">
</center>
</body>
</html>