<?php
include "login/config.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $lang_register["register"]; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<script>
$(function(){
$('#nick').bind('input propertychange', function() {

$("#check_nick").val(this.value);

	var url = "login/ajax/Ajax.php"; // the script where you handle the form input.
    $.ajax({
           type: "POST",
           url: url,
           data: $("#form_check_nick").serialize(), // serializes the form's elements.
           success: function(data)
           {
               $("#nick_request").html(data); // show response from the php script.
           }
         });
		 return false; // avoid to execute the actual submit of the form.
});

$('#email').bind('input propertychange', function() {

$("#check_email").val(this.value);

	var url = "login/ajax/Ajax.php"; // the script where you handle the form input.
    $.ajax({
           type: "POST",
           url: url,
           data: $("#form_check_email").serialize(), // serializes the form's elements.
           success: function(data)
           {
               $("#email_request").html(data); // show response from the php script.
           }
         });
		 return false; // avoid to execute the actual submit of the form.
});

$('#password').bind('input propertychange', function() {

$("#check_password").val(this.value);

	var url = "login/ajax/Ajax.php"; // the script where you handle the form input.
    $.ajax({
           type: "POST",
           url: url,
           data: $("#form_check_password").serialize(), // serializes the form's elements.
           success: function(data)
           {
               $("#password_request").html(data); // show response from the php script.
           }
         });
		 return false; // avoid to execute the actual submit of the form.
});

});
</script>

</head>
<body>
<center>
<br><br><br><br>
<h3><?php echo $lang_register["register"]; ?>:</h3>
<strong style="color: red;"><?php echo $msg_register; ?></strong>
<form method="post">
<table class="table table-striped">
<tr>
<td style="text-align: right;"><?php echo $lang_register["nick"]; ?>:</td><td><input type="text" id="nick" placeholder="<?php echo $lang_register["nick"]; ?>" name="nick"><div id="nick_request"></div></td>
</tr>
<tr>
<td style="text-align: right;"><?php echo $lang_register["email"]; ?>:</td><td><input type="text" id="email" placeholder="<?php echo $lang_register["email"]; ?>" name="email"><div id="email_request"></div></td>
</tr>
<tr>
<td style="text-align: right;"><?php echo $lang_register["password"]; ?>:</td><td><input type="password" id="password" placeholder="<?php echo $lang_register["password"]; ?>" name="password"><div id="password_request"></div></td>
</tr>
<tr>
<td style="text-align: right;"><?php echo $lang_register["repeat_password"]; ?>:</td><td><input type="password" id="password_repeat" placeholder="<?php echo $lang_register["repeat_password"]; ?>" name="repeat_password"></td>
</tr>
</table>
<input type="hidden" name="register">
<button type="submit" class="btn"><?php echo $lang_register["send"]; ?></button>
<br>
<a href="login.php"><?php echo $lang_register["back_to_login"]; ?></a>
</form>

<form id="form_check_nick" method="post">
<input type="hidden" id="check_nick" name="check_nick">
</form>

<form id="form_check_email" method="post">
<input type="hidden" id="check_email" name="check_email">
</form>

<form id="form_check_password" method="post">
<input type="hidden" id="check_password" name="check_password">
</form>
</center>
</body>
</html>