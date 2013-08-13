<?php
session_start();
if ($_SESSION["user"] == true)
{
$user_nick = $_SESSION["nick"];
$user_email = $_SESSION["email"];
$user_avatar = $_SESSION["avatar"];
}
else
{
session_start();
session_destroy();
header("location: login.php");
}
?>