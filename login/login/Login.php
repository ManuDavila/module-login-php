<?php
$msg_login = "";
if (isset($_POST["login"]))
{
$user = addslashes(htmlspecialchars($_POST["user"]));
$password = addslashes(htmlspecialchars($_POST["password"]));
if (empty($user) || empty($password))
{
return;
}

if (!preg_match("/^[0-9a-zA-Z������������������������_]+$/", $user) && !preg_match("/^[a-zA-Z0-9_-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $user))
{
$msg_login = "User Error";
return;
}

if (!preg_match("/^([a-zA-Z]+[0-9]+)|([0-9]+[a-zA-Z]+)/i", $password))
{
$msg_login = "Password Error";
return;
}
else if(strlen($password) < 8 || strlen($password) > 16)
{
$msg_login = "Password Error: between 8 and 16 char";
return;
}

$query = "SELECT nick, email, password, avatar FROM users WHERE nick='$user' or email='$user' AND password='".md5($password)."' AND active='true'";
$result = $connection -> query($query);
$row = $result -> fetch_array();
if (empty($row))
{
$msg_login = "Error login";
return;
}
else
{
session_start();
$_SESSION["user"] = true;
$_SESSION["nick"] = $row["nick"];
$_SESSION["email"] = $row["email"];
$_SESSION["avatar"] = $row["avatar"];
header("location: user.php");
}
}
?>