Module Login PHP is a module base for users: login, register and recover password.

Module properties:

� Ajax request for validate input value

� Filter data

� Confirmation email in the Register and  Recover password

� Encryptation of password

� File for users table for install in mysql

� Support  for the gravatar images

� sessions for private sites


Configuration:

� Download on github and extract in your folder project.

� Config the file login/config.php

//include email from notifications
define("email_admin", "youremail@here.com");

//include title from web
define("title_web", "Your title web");

� Config the file login/connection.php

//include connection to data base
$connection = new mysqli("localhost", "root", "yourpass", "yourdatabase");

� Install the users table in your mysql data base, the file is login/users.sql.

� Finally check the application, go to login.php or register.php

� If you need include the private session in the some file, simply include the next code in the file ...

include "login/login/Session.php";

