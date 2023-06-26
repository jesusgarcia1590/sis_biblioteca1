<?php 
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$campo = $_POST['campo'];


    $sentencia = $pdo->prepare('INSERT INTO tb_campos
    (campo, fyh_creacion, estado) 
    VALUES(:campo, :fyh_creacion, :estado)');

    $sentencia->bindParam(':campo', $campo);
    $sentencia->bindParam(':fyh_creacion', $fyh_creacion);
    $sentencia->bindParam(':estado', $estado);

    if($sentencia->execute()){
        header('Location:'.$URL.'/admin/libros/create.php');
        session_start();
        $_SESSION['msj'] = "Se registró el campo de forma correcta";
    
    }else{
        session_start();
        $_SESSION['msj'] = "Error al insertar en la base de datos";
    }
?>