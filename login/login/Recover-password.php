<?php
$msg_recover = "";
if (isset($_POST["recover_password"]))
{
$email = addslashes(htmlspecialchars($_POST["email"]));
if (empty($email))
{
return;
}

if (!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $email))
{
$msg_recover = $lang_Recover_password["email_error"];
return;
}

$query = "SELECT email FROM users WHERE email='$email'";
$result = $connection -> query($query);
$row = $result -> fetch_array();
if (empty($row))
{
$msg_recover = $lang_Recover_password["email_no_exist"];
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
("<b>".$lang_Recover_password["welcome"]." <a href='$router'>$title_web</a> ...</b>
<br><br>
".$lang_Recover_password["msg_email"]." ...  <a href='".$router."reset-password.php?reset=$reset'>".$lang_Recover_password["reset_password"]."</a>
<br><br>
".$lang_Recover_password["regards"]."
");

$cabeceras = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
	'Content-type: text/html\r\n' .	
    'X-Mailer: PHP/' . phpversion();
	
$mail = mail($to, $titulo, $mensaje, $cabeceras);

if ($mail){
$msg_recover = "<span style='color: blue;'>".$lang_Recover_password["please"]."</span>";
return;
}
}
}
?>