<?php
$msg_reset = "";
if (isset($_POST["reset_password"]))
{
$email = addslashes(htmlspecialchars($_POST["email"]));
$password = addslashes(htmlspecialchars($_POST["password"]));
$repeat_password = addslashes(htmlspecialchars($_POST["repeat_password"]));
$reset_password = addslashes(htmlspecialchars($_POST["reset_password"]));
	
if (empty($email) || empty($password) || empty($repeat_password))
{
return;
}

if (!preg_match("/^[a-zA-Z0-9_-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $email))
{
$msg_reset = "Email Error";
return;
}

$query_email = "SELECT email FROM users WHERE email='$email' AND reset='$reset_password'";
$result_email = $connection -> query($query_email);
$row_email = $result_email -> fetch_array();

if (empty($row_email))
{
$msg_reset = "Error";
return;
}

if (!preg_match("/^([a-zA-Z]+[0-9]+)|([0-9]+[a-zA-Z]+)/i", $password))
{
$msg_reset = "Password Error";
return;
}
else if(strlen($password) < 8 || strlen($password) > 16)
{
$msg_reset = "Password Error: between 8 and 16 char";
return;
}

if ($repeat_password != $password)
{
$msg_reset = "Password Repeat Error";
return;
}
	
$reset = "";
$code = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

for ($x = 0; $x < 36; $x++) 
{
        $reset .= $code[rand(0, count($code) - 1)];
    }	
	
$query = "UPDATE users SET password='".md5($password)."', reset='$reset' WHERE email='$email'";
$result = $connection -> query($query);

if ($result)
{
$msg_reset = "<span style='color: blue;'>Reset password, successful.</span>";
}
}
?>