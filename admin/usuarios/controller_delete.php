<?php 
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$id_usuario = $_POST['id_usuario'];
$estado_inactivo = '0';

#mediante el DELETE FROM
/*
$sentencia = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :id_usuario");
$sentencia ->bindParam(':id_usuario',$id_usuario);
$sentencia->execute();
*/
#mediante el UPDATE
$sentencia = $pdo->prepare("UPDATE tb_usuarios SET estado = '$estado_inactivo', fyh_eliminacion = '$fyh_creacion'  WHERE id_usuario = :id_usuario");
$sentencia ->bindParam(':id_usuario',$id_usuario);

if($sentencia->execute()){
    header('Location:'.$URL.'/admin/usuarios');
    session_start();
    $_SESSION['msj'] = "Se borro el usuario de forma correcta";

}else{
    session_start();
    $_SESSION['msj'] = "Error al borrar de la base de datos";
}

$sentencia->execute();

?>