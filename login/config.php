<?php
//include email from notifications
define("email_admin", "youremail@here.com");

//include title from web
define("title_web", "your title web");

// rute from email
$router = $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"];
$router = str_replace("register.php", "", $router);
$router = str_replace("recover-password.php", "", $router);
$router = "http://" . $router;

//include the language options. Availables: en.php | es.php
include "login/language/en.php";
include "login/connection.php";
include "login/login/Login.php";
include "login/login/Register.php";
include "login/login/Recover-password.php";
include "login/login/Reset-password.php";
include "login/login/Exit.php";
?>