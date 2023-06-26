<?php
#localmente
define('BD_SERVIDOR', 'localhost');
define('BD_USUARIO', 'root');
define('BD_PASSWORD', '');
define('BD_SISTEMA', 'bd_sis_biblioteca');

#servidor
/*
define('BD_SERVIDOR', 'localhost');
define('BD_USUARIO', 'root');
define('BD_PASSWORD', '');
define('BD_SISTEMA', 'bd_sis_biblioteca');
*/

//localmente
$URL = 'http://localhost/www.sis_biblioteca.com';


//servidor se le quita el localhost y se coloca el servidor que aloja
//$URL = 'http://www.sis_biblioteca.com';

date_default_timezone_set('America/Mexico_City');
$fyh_creacion = date('Y-m-d  H:i:s');
$estado = "1";


?>