<?php
$msg_register = "";
if (isset($_POST["register"]))
{
$nick = addslashes(htmlspecialchars($_POST["nick"]));
$email = addslashes(htmlspecialchars($_POST["email"]));
$password = addslashes(htmlspecialchars($_POST["password"]));
$repeat_password = addslashes(htmlspecialchars($_POST["repeat_password"]));
$confirm = "";
$code = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

for ($x = 0; $x < 36; $x++) 
{
        $confirm .= $code[rand(0, count($code) - 1)];
    }
	
$reset = "";
$code = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

for ($x = 0; $x < 36; $x++) 
{
        $reset .= $code[rand(0, count($code) - 1)];
    }

if (empty($nick) || empty($email) || empty($password) || empty($repeat_password))
{
return;
}

if (!preg_match("/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_]+$/", $nick))
{
$msg_register = $lang_Register["nick_error"];
return;
}

if (strlen($nick) < 3 || strlen($nick) > 50)
{
$msg_register = $lang_Register["nick_error_char"];
return;
}

$query_nick = "SELECT nick FROM users WHERE nick='$nick'";
$result_nick = $connection -> query($query_nick);
$row_nick = $result_nick -> fetch_array();
if (!empty($row_nick))
{
$msg_register = $lang_Register["nick_exist"];
return;
}

if (!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $email))
{
$msg_register = $lang_Register["email_error"];
return;
}

if (strlen($email) > 50)
{
$msg_register = $lang_Register["email_error_char"];
return;
}

$query_email = "SELECT email FROM users WHERE email='$email'";
$result_email = $connection -> query($query_email);
$row_email = $result_email -> fetch_array();
if (!empty($row_email))
{
$msg_register = $lang_Register["email_exist"];
return;
}

if (!preg_match("/^([a-zA-Z]+[0-9]+)|([0-9]+[a-zA-Z]+)/i", $password))
{
$msg_register = $lang_Register["password_error"];
return;
}
else if(strlen($password) < 8 || strlen($password) > 16)
{
$msg_register = $lang_Register["password_error_char"];
return;
}

if ($repeat_password != $password)
{
$msg_register = $lang_Register["password_repeat_error"];
return;
}


$mail_hash = md5(strtolower(trim($email)));
    $size_avatar = 279;
    $rand = rand(10000, 99999);
    $cad = $rand . "-" . $nick . ".jpg";

if (copy("http://www.gravatar.com/avatar/" . $mail_hash . "?s=" . $size_avatar . "&d=404", "avatars/" . $cad)) 
{
        $avatar = "avatars/" . $cad;
}
  	else
	{
	   $avatar = "avatars/gravatar.jpg";
	}
	
$query = "INSERT INTO users(nick, email, password, avatar, confirm, reset) VALUES('$nick', '$email', '".md5($password)."', '$avatar', '$confirm', '$reset')";
$result = $connection -> query($query);

if ($result)
{
$to = $email;
$from = email_admin;
$title_web = title_web;
$titulo = utf8_encode($title_web);
$mensaje = utf8_encode
("<b>".$lang_Register["welcome"]." <a href='$router'>$title_web</a> ...</b>
<br><br> 
".$lang_Register["msg_email"]." ...  <a href='".$router."login.php?confirm=$confirm'>".$lang_Register["confirm"]."</a>
<br><br>
".$lang_Register["regards"]."
");

$cabeceras = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
	'Content-type: text/html\r\n' .	
    'X-Mailer: PHP/' . phpversion();
	
$mail = mail($to, $titulo, $mensaje, $cabeceras);

if ($mail){
$msg_register = "<span style='color: blue;'>".$lang_Register["please"]."</span>";
}
}
}
?>