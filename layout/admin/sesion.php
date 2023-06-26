<?php
session_start();
if(isset($_SESSION['sesion_email'])){
   // echo "Sesion activa";
}else{
    #si no ha iniciado sesion se redirige a la pagina de inicio de sesion
    header('Location: '.$URL.'/login');
}
?>