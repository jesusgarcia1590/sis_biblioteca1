<?php
#conectandonos a la base de datos
include('../../app/config/config.php');
include('../../app/config/conexion.php');
#para la sesion activa
include('../../layout/admin/sesion.php');
include('../../layout/admin/datos_sesion_user.php');
?>

<?php include('../../layout/admin/parte1.php');?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de libros</h1>
            <?php
              if(isset($_SESSION['msj'])){
                $respuesta = $_SESSION['msj'];
                ?>
                <script>
                    Swal.fire(
                      'Buen trabajo!',
                      '<?php echo $respuesta; ?>',
                      'success'
                    )
                </script>

              <?php
              #terminamos la sesion del mensaje
              unset($_SESSION['msj']);
              }

            ?>
            <br>
            <div class="card card-blue">
              <div class="card-header">
                Libros
              </div>
              <div class="card-body">

              <script>
                $(document).ready(function () {
                 $('#tabla-1').DataTable({
                  "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                  }
                 });
                });
              </script>
              
                <div class="table-responsive">
                    <table id="tabla-1" class="display table table-striped table-hover table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>Nro</th>
                          <th>Código</th>
                          <th>Titulo</th>
                          <th>Autor</th>
                          <th>Área</th>
                          <th>Campo</th>
                          <th>Ciudad</th>
                          <th>Editorial</th>
                          <th>Año de publicación</th>
                          <th>Nro. de edicion</th>
                          <th>Nro. de Páginas</th>
                          <th>Formato</th>
                          <th>Ejemplares</th>    
                          <th>Código de Barras</th>
                          <th>Observaciones</th>              
                          <th>
                            <center>
                              Acciones
                            </center>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $contador = 0; 
                          $query = $pdo->prepare('SELECT * FROM tb_libros WHERE estado="1" ');
                          $query->execute();
                          #leemos todo lo que esta en la base de datos de libros
                          $libros =$query->fetchAll(PDO::FETCH_ASSOC);
                          foreach($libros as $libro){
                            $id_libro = $libro['id_libro'];
                            $codigo = $libro['codigo'];
                            $titulo = $libro['titulo'];
                            $autor = $libro['autor'];
                            $area = $libro['area'];
                            $campo = $libro['campo'];
                            $ciudad = $libro['ciudad'];
                            $editorial = $libro['editorial'];
                            $ano_publicacion = $libro['ano_publicacion'];
                            $nro_edicion = $libro['nro_edicion'];
                            $paginas = $libro['paginas'];
                            $formato = $libro['formato'];
                            $ejemplares = $libro['ejemplares'];
                            $codigo_barra = $libro['codigo_barra'];
                            $observaciones = $libro['observaciones'];
                            
/*
                            $fyh_creacion = '2023-06-15' ;
                            $fyh_actualizacion = '2023-06-15';
                            $fyh_eliminacion = '2023-06-15';
                            $estado = 1;
                            */
                            $contador = $contador + 1;
                      ?>
                          <tr>
                          <td><?php echo $contador; ?></td>
                          <td><?php echo $codigo; ?></td>
                          <td><?php echo $titulo; ?></td>
                          <td><?php echo $autor; ?></td>
                          <td><?php echo $area; ?></td>
                          <td><?php echo $campo; ?></td>
                          <td><?php echo $ciudad; ?></td>
                          <td><?php echo $editorial; ?></td>
                          <td><?php echo $ano_publicacion; ?></td>
                          <td><?php echo $nro_edicion; ?></td>
                          <td><?php echo $paginas; ?></td>
                          <td><?php echo $formato; ?></td>
                          <td><?php echo $ejemplares; ?></td>
                          <td><?php echo $codigo_barra; ?></td>
                          <td><?php echo $observaciones; ?></td>


                          <td>
                            <center>
                              <a href="edit.php?id=<?php echo $id_libro; ?>" class="btn btn-success btn-sm">Editar <i class="fas fa-pen"></i></a>
                              <a href="delete.php?id=<?php echo $id_libro; ?>" class="btn btn-danger btn-sm">Eliminar <i class="fas fa-trash" ></i></a>
                            </center>
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                </div>
              </div>
          </div>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <?php include('../../layout/admin/parte2.php');?>
