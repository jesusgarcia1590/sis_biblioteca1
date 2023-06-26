<?php 
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$area = $_POST['area'];


    $sentencia = $pdo->prepare('INSERT INTO tb_areas
    (area, fyh_creacion, estado) 
    VALUES(:area, :fyh_creacion, :estado)');

    $sentencia->bindParam(':area', $area);
    $sentencia->bindParam(':fyh_creacion', $fyh_creacion);
    $sentencia->bindParam(':estado', $estado);

    if($sentencia->execute()){
        header('Location:'.$URL.'/admin/libros/create.php');
        session_start();
        $_SESSION['msj'] = "Se registró el área de forma correcta";
    
    }else{
        session_start();
        $_SESSION['msj'] = "Error al insertar en la base de datos";
    }
?>