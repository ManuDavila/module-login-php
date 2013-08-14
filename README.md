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
<h3>Module Login PHP</h3>  es un m�dulo base para el sistema de usuarios: iniciar sesi�n, registrar y recuperar password.

<i>DEMO</i>:  http://recursos-web.comoj.com/module-login-php/login.php

<b>Propiedades del m�dulo</b>
=======
<h3>Module Login PHP</h3>  es un módulo base para el sistema de usuarios: iniciar sesión, registrar y recuperar password.

<i>DEMO</i>:  http://recursos-web.comoj.com/module-login-php/login.php

<b>Propiedades del módulo</b>
>>>>>>> 15fb53eedec5ba123e9e87b53c65a963eb2f37ba

- Respuesta Ajax para validar los campos

- Filtrado de datos

<<<<<<< HEAD
- Configuraci�n del lenguaje. Default en ingl�s. Disponibles: ingl�s y espa�ol.

- Email de confirmaci�n para el registro y recuperar password

- Encriptaci�n de password

- Archivo sql para instalar la tabla users

- Soporte para im�genes gravatar

- Sesiones para zonas privadas

<b>Configuraci�n:</b>

- <b>Descargar en github y extraer los archivos en la carpeta de tu proyecto.</b>

- <b>Configuraci�n del archivo login/config.php</b>
=======
- Configuración del lenguaje. Default en inglés. Disponibles: inglés y español.

- Email de confirmación para el registro y recuperar password

- Encriptación de password

- Archivo sql para instalar la tabla users

- Soporte para imágenes gravatar

- Sesiones para zonas privadas

<b>Configuración:</b>

- <b>Descargar en github y extraer los archivos en la carpeta de tu proyecto.</b>

- <b>Configuración del archivo login/config.php</b>
>>>>>>> 15fb53eedec5ba123e9e87b53c65a963eb2f37ba

//incluye tu email para las notificaciones

define("email_admin", "youremail@here.com");

<<<<<<< HEAD
//incluye el t�tulo de tu web

define("title_web", "Your title web");
 
//incluye la opci�n del lenguage. Disponibles: en.php | es.php

include "login/language/es.php";

- <b>Modificar la opci�n del lenguaje al espa�ol en el archivo ... login/ajax/Ajax.php</b>
 
//incluye la opci�n del lenguage. Disponibles: en.php | es.php

include "login/language/es.php";

- <b>Configuraci�n del archivo login/connection.php</b>

//incluye la conexi�n a tu base de datos
=======
//incluye el título de tu web

define("title_web", "Your title web");
 
//incluye la opción del lenguage. Disponibles: en.php | es.php

include "login/language/es.php";

- <b>Modificar la opción del lenguaje al español en el archivo ... login/ajax/Ajax.php</b>
 
//incluye la opción del lenguage. Disponibles: en.php | es.php

include "login/language/es.php";

- <b>Configuración del archivo login/connection.php</b>

//incluye la conexión a tu base de datos
>>>>>>> 15fb53eedec5ba123e9e87b53c65a963eb2f37ba

$connection = new mysqli("localhost", "root", "yourpass", "yourdatabase");

- <b>Instala la tabla users en tu base de datos mysql, el archivo es login/users.sql</b>

<<<<<<< HEAD
- <b>Finalmente comprueba la aplicaci�n, ve a login.php o register.php</b>

- <b>Si necesitas incluir sesiones privadas en alg�n archivo, simplemente incluye el siguiente c�digo ...</b>
=======
- <b>Finalmente comprueba la aplicación, ve a login.php o register.php</b>

- <b>Si necesitas incluir sesiones privadas en algún archivo, simplemente incluye el siguiente código ...</b>
>>>>>>> 15fb53eedec5ba123e9e87b53c65a963eb2f37ba
 
include "login/login/Session.php";



