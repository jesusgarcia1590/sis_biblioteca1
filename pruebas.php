<?php
/*
$passwordform ="12345678";
echo $passwordform.'<br>';
echo password_hash($passwordform, PASSWORD_DEFAULT).'<br>';

$passwordbd = password_hash($passwordform, PASSWORD_DEFAULT);


if (password_verify($passwordform, $passwordbd)){
    echo "Password Correcta";
}
else {
    echo "Password Incorrecta"; 
}
*/
date_default_timezone_set('America/Mexico_City');
$fyh_creacion = date('Y-m-d  H:i:s');
echo $fyh_creacion;
?>