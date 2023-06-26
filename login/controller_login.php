<?php
include('../app/config/config.php');
include('../app/config/conexion.php');



$correo = $_POST['correo'];
$password = $_POST['password'];

#Verificamos si la consulta se encuentra en la base de datos de la tabla
$query_login = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email='$correo' AND estado ='1' ");
$query_login->execute();
#Aquí mostramos los resultados de
$usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);

$contador = 0;

foreach($usuarios as $usuario){
    $contador = $contador +1;
     $nombres = $usuario['nombres'];
     $password_tb = $usuario['password'];
}

if($contador==0){
    //echo "No existe el usuario";
    header('Location: '.$URL.'/login/error.php');
}
else{
    #verificamos la contraseña coincida con la contraseña encriptada.
    if (password_verify($password, $password_tb)){

        session_start();
        $_SESSION['sesion_email'] = $correo;
        header('Location: '.$URL.'/admin');
    }
    else {
        header('Location: '.$URL.'/login/error.php'); 
    }
}

?>