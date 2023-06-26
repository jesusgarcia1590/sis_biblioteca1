<?php 
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$ci = $_POST['ci'];
$celular = $_POST['celular'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$id_usuario = $_POST['id_usuario'];



$sentencia = $pdo->prepare("UPDATE tb_usuarios SET 
nombres = :nombres,
apellidos = :apellidos,
ci = :ci,
celular = :celular,
cargo = :cargo,
email = :email,
fyh_actualizacion = :fyh_actualizacion WHERE id_usuario = :id_usuario");

$sentencia ->bindParam(':nombres',$nombres);
$sentencia ->bindParam(':apellidos',$apellidos);
$sentencia ->bindParam(':ci',$ci);
$sentencia ->bindParam(':celular',$celular);
$sentencia ->bindParam(':cargo',$cargo);
$sentencia ->bindParam(':email',$email);
$sentencia ->bindParam(':id_usuario',$id_usuario);
$sentencia ->bindParam(':fyh_actualizacion',$fyh_creacion);

if($sentencia->execute()){
    header('Location:'.$URL.'/admin/usuarios/index.php');
    session_start();
    $_SESSION['msj'] = "Se actualizaron los datos correctamente";

}else{
    session_start();
    $_SESSION['msj'] = "Error al actualizar";
}


$sentencia->execute();


?>