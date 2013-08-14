<?php
include "../connection.php";
//include the language option. Availables: en.php | es.php
include "../language/en.php";

if(isset($_POST["check_nick"]))
{
$nick = addslashes(htmlspecialchars($_POST["check_nick"]));

if (!preg_match("/^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_]+$/", $nick))
{
echo "<span style='color: red;'>".$lang_Ajax["nick_error"]."</span>";
return;
}

if (strlen($nick) < 3 || strlen($nick) > 50)
{
echo "<span style='color: red;'>".$lang_Ajax["nick_error_char"]."</span>";
return;
}

$query = "SELECT nick FROM users WHERE nick='$nick'";
$result = $connection -> query($query);
$row = $result -> fetch_array();
if(empty($row))
{
echo "<span style='color: blue;'>".$lang_Ajax["nick_available"]."</span>";
}
else
{
echo "<span style='color: red;'>".$lang_Ajax["nick_not_available"]."</span>";
}
}

if(isset($_POST["check_email"]))
{
$email = addslashes(htmlspecialchars($_POST["check_email"]));


if (!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $email))
{
echo "<span style='color: red;'>".$lang_Ajax["email_error"]."</span>";
return;
}

if (strlen($email) > 50)
{
echo "<span style='color: red;'>".$lang_Ajax["email_error_char"]."</span>";
return;
}

$query = "SELECT email FROM users WHERE email='$email'";
$result = $connection -> query($query);
$row = $result -> fetch_array();
if(empty($row))
{
echo "<span style='color: blue;'>".$lang_Ajax["email_available"]."</span>";
}
else
{
echo "<span style='color: red;'>".$lang_Ajax["email_not_available"]."</span>";
}
}

if (isset($_POST["check_password"]))
{
$password = addslashes(htmlspecialchars($_POST["check_password"]));

if (!preg_match("/^([a-zA-Z]+[0-9]+)|([0-9]+[a-zA-Z]+)/i", $password))
{
echo "<span style='color: red;'>".$lang_Ajax["password_required"]."</span>";
return;
}
else if(strlen($password) < 8 || strlen($password) > 16)
{
echo "<span style='color: red;'>".$lang_Ajax["password_error_char"]."</span>";
return;
}
else
{
echo "<span style='color: blue;'>".$lang_Ajax["valid_password"]."</span>";
}
}
?>