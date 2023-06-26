<?php
include('../../app/config/config.php');
include('../../app/config/conexion.php');


$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$area = $_POST['area'];
$campo = $_POST['campo'];
$ciudad = $_POST['ciudad'];
$editorial = $_POST['editorial'];
$ano_publicacion = $_POST['ano_publicacion'];
$nro_edicion = $_POST['nro_edicion'];
$paginas = $_POST['paginas'];
$formato = $_POST['formato'];
$ejemplares = $_POST['ejemplares'];
$observaciones = $_POST['observaciones'];
$codigo_barra = $_POST['codigo_barra'];



//extrae el area
$codigo = $_POST['codigo'];
$texto_area =  $_POST['area'];
$arraytext_area = explode(" ", $texto_area);
$letras_extraidas_area = "";
foreach($arraytext_area as $letra){
    $array_letra = str_split($letra, 1);
    $letras_extraidas_area = $letras_extraidas_area.$array_letra['0'];
}

//extrae el autor
$texto_autor =  $_POST['autor'];
$arraytext_autor = explode(" ", $texto_autor);
$letras_extraidas_autor = "";
foreach($arraytext_autor as $letra){
    $array_letra = str_split($letra, 1);
    $letras_extraidas_autor = $letras_extraidas_autor.$array_letra['0'];
}

$paginas = $_POST['paginas'];
$formato = $_POST['formato'];
if($formato=="FíSICO"){
    $formato = "F";
}else{
    $formato = "D";
}
$codigo_generado = $codigo."-".$letras_extraidas_area."-".$letras_extraidas_autor."-".$paginas."-".$formato;





$sentencia = $pdo->prepare('INSERT INTO tb_libros
(codigo, titulo, autor, area, campo, ciudad, editorial, ano_publicacion, nro_edicion, paginas, formato, ejemplares, observaciones, codigo_barra, fyh_creacion, estado)
VALUES ( :codigo,:titulo,:autor,:area,:campo,:ciudad,:editorial,:ano_publicacion,:nro_edicion,:paginas,:formato,:ejemplares,:observaciones,:codigo_barra,:fyh_creacion,:estado)');

$sentencia->bindParam(':codigo',$codigo_generado);
$sentencia->bindParam(':titulo',$titulo);
$sentencia->bindParam(':autor',$autor);
$sentencia->bindParam(':area',$area);
$sentencia->bindParam(':campo',$campo);
$sentencia->bindParam(':ciudad',$ciudad);
$sentencia->bindParam(':editorial',$editorial);
$sentencia->bindParam(':ano_publicacion',$ano_publicacion);
$sentencia->bindParam(':nro_edicion',$nro_edicion);
$sentencia->bindParam(':paginas',$paginas);
$sentencia->bindParam(':formato',$formato);
$sentencia->bindParam(':ejemplares',$ejemplares);
$sentencia->bindParam(':observaciones',$observaciones);
$sentencia->bindParam(':codigo_barra',$codigo_barra);
$sentencia->bindParam(':fyh_creacion',$fyh_creacion);
$sentencia->bindParam(':estado',$estado);

if($sentencia->execute()){
    header('Location:'.$URL.'/admin/libros/index.php');
    session_start();
    $_SESSION['msj'] = "Registro exitoso";

}else{
    session_start();
    $_SESSION['msj'] = "Error al insertar en la base de datos";
}


?>