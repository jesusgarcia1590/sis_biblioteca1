<?php 
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$editorial = $_POST['editorial'];


    $sentencia = $pdo->prepare('INSERT INTO tb_editoriales
    (editorial, fyh_creacion, estado) 
    VALUES(:editorial, :fyh_creacion, :estado)');

    $sentencia->bindParam(':editorial', $editorial);
    $sentencia->bindParam(':fyh_creacion', $fyh_creacion);
    $sentencia->bindParam(':estado', $estado);

    if($sentencia->execute()){
        header('Location:'.$URL.'/admin/libros/create.php');
        session_start();
        $_SESSION['msj'] = "Se registró la editorial de forma correcta";
    
    }else{
        session_start();
        $_SESSION['msj'] = "Error al insertar en la base de datos";
    }
?>