<h3>Module Login PHP</h3> is a module base for users: login, register and recover password.

<i>DEMO:</i> http://recursos-web.comoj.com/module-login-php/login.php

<b>Sites description:</b>

English: http://php-estudios.blogspot.com.es/2013/08/module-login-php.html

Spanish: http://php-estudios.blogspot.com.es/2013/08/modulo-para-login-de-usuarios-php.html

<b>Module properties:</b>

- Ajax request for validate input value

- Filter data

- Language config. Default english. Availables: english and spanish

- Confirmation email in the Register and  Recover password

- Encryptation of password

- File for users table for install in mysql

- Support for the gravatar images

- sessions for private sites


<b>Configuration:</b>

- <b>Download on github and extract in your folder project.</b>

- <b>Config the file login/config.php</b>

//include email from notifications

define("email_admin", "youremail@here.com");

//include title from web

define("title_web", "Your title web");

//include the language options. Availables: en.php | es.php

include "login/language/en.php";

- <b>Modify the language option in the file ... login/ajax/Ajax.php</b>

//include the language options. Availables: en.php | es.php

include "../language/en.php";

- <b>Config the file login/connection.php</b>

//include connection to data base

$connection = new mysqli("localhost", "root", "yourpass", "yourdatabase");

- <b>Install the users table in your mysql data base, the file is login/users.sql.</b>

- <b>Finally check the application, go to login.php or register.php</b>

- <b>If you need include the private session in the some file, simply include the next code in the file ...</b>

include "login/login/Session.php";

