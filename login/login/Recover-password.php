<?php
$msg_recover = "";
if (isset($_POST["recover_password"]))
{
$email = addslashes(htmlspecialchars($_POST["email"]));
if (empty($email))
{
return;
}

if (!preg_match("/^[a-zA-Z0-9_-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $email))
{
$msg_recover = "Email Error";
return;
}

$query = "SELECT email FROM users WHERE email='$email'";
$result = $connection -> query($query);
$row = $result -> fetch_array();
if (empty($row))
{
$msg_recover = "Email no exist";
return;
}
else
{

$reset = "";
$code = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

for ($x = 0; $x < 36; $x++) 
{
        $reset .= $code[rand(0, count($code) - 1)];
    }

$query = "UPDATE users SET reset='$reset' WHERE email='$email'";
$result = $connection -> query($query);

$to = $email;
$from = email_admin;
$title_web = title_web;
$titulo = utf8_encode($title_web);
$mensaje = utf8_encode
("<b>Welcome <a href='$router'>$title_web</a> ...</b>
<br><br>
Click in the next link for reset password ...  <a href='".$router."reset-password.php?reset=$reset'>RESET PASSWORD</a>
<br><br>
Regards.
");

$cabeceras = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
	'Content-type: text/html\r\n' .	
    'X-Mailer: PHP/' . phpversion();
	
$mail = mail($to, $titulo, $mensaje, $cabeceras);

if ($mail){
$msg_recover = "<span style='color: blue;'>Please, check in your account email for reset password.</span>";
return;
}
}
}
?>