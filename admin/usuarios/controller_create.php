<?php 
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$ci = $_POST['ci'];
$celular = $_POST['celular'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$password = $_POST['password'];
$verificar_password = $_POST['verificar_password'];

$password_encriptada = password_hash($password, PASSWORD_DEFAULT);


if($password==$verificar_password){

    $sentencia = $pdo->prepare('INSERT INTO tb_usuarios
    (nombres, apellidos, ci, celular, cargo, email, password, fyh_creacion, estado) 
    VALUES(:nombres, :apellidos, :ci, :celular, :cargo, :email, :password, :fyh_creacion, :estado)');

    $sentencia->bindParam(':nombres', $nombres);
    $sentencia->bindParam(':apellidos', $apellidos);
    $sentencia->bindParam(':ci', $ci);
    $sentencia->bindParam(':celular', $celular);
    $sentencia->bindParam(':cargo', $cargo);
    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':password', $password_encriptada);
    $sentencia->bindParam(':fyh_creacion', $fyh_creacion);
    $sentencia->bindParam(':estado', $estado);

    if($sentencia->execute()){
        header('Location:'.$URL.'/admin/usuarios');
        session_start();
        $_SESSION['msj'] = "Registro exitoso";
    
    }else{
        session_start();
        $_SESSION['msj'] = "Error al insertar en la base de datos";
    }



}else{
    echo "ERROR: Contraseñas diferentes!";
}
/*

*/
?>