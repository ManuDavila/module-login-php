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



<<<<<<< HEAD
<h3>Module Login PHP</h3>  es un m骴ulo base para el sistema de usuarios: iniciar sesi髇, registrar y recuperar password.

<i>DEMO</i>:  http://recursos-web.comoj.com/module-login-php/login.php

<b>Propiedades del m骴ulo</b>
=======
<h3>Module Login PHP</h3>  es un m贸dulo base para el sistema de usuarios: iniciar sesi贸n, registrar y recuperar password.

<i>DEMO</i>:  http://recursos-web.comoj.com/module-login-php/login.php

<b>Propiedades del m贸dulo</b>
>>>>>>> 15fb53eedec5ba123e9e87b53c65a963eb2f37ba

- Respuesta Ajax para validar los campos

- Filtrado de datos

<<<<<<< HEAD
- Configuraci髇 del lenguaje. Default en ingl閟. Disponibles: ingl閟 y espa駉l.

- Email de confirmaci髇 para el registro y recuperar password

- Encriptaci髇 de password

- Archivo sql para instalar la tabla users

- Soporte para im醙enes gravatar

- Sesiones para zonas privadas

<b>Configuraci髇:</b>

- <b>Descargar en github y extraer los archivos en la carpeta de tu proyecto.</b>

- <b>Configuraci髇 del archivo login/config.php</b>
=======
- Configuraci贸n del lenguaje. Default en ingl茅s. Disponibles: ingl茅s y espa帽ol.

- Email de confirmaci贸n para el registro y recuperar password

- Encriptaci贸n de password

- Archivo sql para instalar la tabla users

- Soporte para im谩genes gravatar

- Sesiones para zonas privadas

<b>Configuraci贸n:</b>

- <b>Descargar en github y extraer los archivos en la carpeta de tu proyecto.</b>

- <b>Configuraci贸n del archivo login/config.php</b>
>>>>>>> 15fb53eedec5ba123e9e87b53c65a963eb2f37ba

//incluye tu email para las notificaciones

define("email_admin", "youremail@here.com");

<<<<<<< HEAD
//incluye el t韙ulo de tu web

define("title_web", "Your title web");
 
//incluye la opci髇 del lenguage. Disponibles: en.php | es.php

include "login/language/es.php";

- <b>Modificar la opci髇 del lenguaje al espa駉l en el archivo ... login/ajax/Ajax.php</b>
 
//incluye la opci髇 del lenguage. Disponibles: en.php | es.php

include "login/language/es.php";

- <b>Configuraci髇 del archivo login/connection.php</b>

//incluye la conexi髇 a tu base de datos
=======
//incluye el t铆tulo de tu web

define("title_web", "Your title web");
 
//incluye la opci贸n del lenguage. Disponibles: en.php | es.php

include "login/language/es.php";

- <b>Modificar la opci贸n del lenguaje al espa帽ol en el archivo ... login/ajax/Ajax.php</b>
 
//incluye la opci贸n del lenguage. Disponibles: en.php | es.php

include "login/language/es.php";

- <b>Configuraci贸n del archivo login/connection.php</b>

//incluye la conexi贸n a tu base de datos
>>>>>>> 15fb53eedec5ba123e9e87b53c65a963eb2f37ba

$connection = new mysqli("localhost", "root", "yourpass", "yourdatabase");

- <b>Instala la tabla users en tu base de datos mysql, el archivo es login/users.sql</b>

<<<<<<< HEAD
- <b>Finalmente comprueba la aplicaci髇, ve a login.php o register.php</b>

- <b>Si necesitas incluir sesiones privadas en alg鷑 archivo, simplemente incluye el siguiente c骴igo ...</b>
=======
- <b>Finalmente comprueba la aplicaci贸n, ve a login.php o register.php</b>

- <b>Si necesitas incluir sesiones privadas en alg煤n archivo, simplemente incluye el siguiente c贸digo ...</b>
>>>>>>> 15fb53eedec5ba123e9e87b53c65a963eb2f37ba
 
include "login/login/Session.php";



