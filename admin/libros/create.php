<?php
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
          <div class="col-sm-6">
            <h1 class="m-0">Registro de un nuevo Libro</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="card">
            <div class="card-header" style="background-color: #0c84ff; color: #ffffff;">
                Llene la siguiente información
            </div>
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
            <div class="card-body">
                <form action="controller_create.php" method="POST">
                   <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Código</label>
                            <?php
                              $contador_id = 0; 
                              $query_id = $pdo->prepare('SELECT * FROM tb_libros WHERE estado="1" ');
                              $query_id->execute();
                              #leemos todo lo que esta en la base de datos de libros
                              $ids =$query_id->fetchAll(PDO::FETCH_ASSOC);
                              foreach($ids as $id){
                                $contador_id = $contador_id +1;
                              }
                              $contador_id = $contador_id +1;   
                            ?>
                            

                            <input type="text" class="form-control" value="<?php echo $contador_id ?>" disabled>
                            <input type="text" name="codigo" class="form-control" value="<?php echo $contador_id ?>" hidden>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                              <label for="">Titulo</label> <span style="color:red"><b> * </b></span>
                              <input type="text" name="titulo" class="form-control" required>
                          </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                              <label for="">Autor</label><span style="color:red"><b> * </b></span>
                              <input type="text" name="autor" class="form-control" required>
                          </div>
                    </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="">Área</label>
                              <table>
                                <tr>
                                  <td> <select name="area" id="" class="form-control">
                                        <?php
                                        $query_area = $pdo->prepare('SELECT * FROM tb_areas WHERE estado="1" ');
                                        $query_area->execute();
                                        #leemos todo lo que esta en la base de datos de libros
                                        $areas =$query_area->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($areas as $area){
                                          $id_area = $area['id_areas'];
                                          $area = $area['area'];
                                          ?>
                                          <option value="<?php echo $area;?>"><?php echo $area;?> </option>
                                          <?php
                                        }
                                        ?>
                                        
                                      </select> 
                                  </td>
                                  <td><!-- Button trigger modal -->
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                      +</button>
                                  </td>
                                </tr>
                              </table>
                          </div>
                      </div>
                   </div>
                   <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Campo</label>
                              <table>
                                  <tr>
                                    <td> <select name="campo" id="" class="form-control">
                                          <?php
                                          $query_campo = $pdo->prepare('SELECT * FROM tb_campos WHERE estado="1" ');
                                          $query_campo->execute();
                                          #leemos todo lo que esta en la base de datos de libros
                                          $campos =$query_campo->fetchAll(PDO::FETCH_ASSOC);
                                          foreach($campos as $campo){
                                            $id_campo = $campo['id_campo'];
                                            $campo = $campo['campo'];
                                            ?>
                                            <option value="<?php echo $campo;?>"><?php echo $campo;?> </option>
                                            <?php
                                          }
                                          ?>
                                          
                                        </select> 
                                    </td>
                                    <td><!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_campo">
                                        +</button>
                                    </td>
                                  </tr>
                              </table>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                              <label for="">Ciudad</label>
                              <input type="text" name="ciudad" class="form-control">
                          </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                              <label for="">Editorial</label>
                              <table>
                                  <tr>
                                    <td> <select name="editorial" id="" class="form-control">
                                          <?php
                                          $query_editorial = $pdo->prepare('SELECT * FROM tb_editoriales WHERE estado="1" ');
                                          $query_editorial->execute();
                                          #leemos todo lo que esta en la base de datos de libros
                                          $editorials =$query_editorial->fetchAll(PDO::FETCH_ASSOC);
                                          foreach($editorials as $editorial){
                                            $id_editorial = $editorial['id_editorial'];
                                            $editorial = $editorial['editorial'];
                                            ?>
                                            <option value="<?php echo $editorial;?>"><?php echo $editorial;?> </option>
                                            <?php
                                          }
                                          ?>
                                          
                                        </select> 
                                    </td>
                                    <td><!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_editorial">
                                        +</button>
                                    </td>
                                  </tr>
                              </table>
                          </div>
                      </div>
                      <div class="col-md-3">
                      <div class="form-group">
                              <label for="">Año de Publicación</label><span style="color:red"><b> * </b></span>
                              <input type="number" name="ano_publicacion" class="form-control" request>
                          </div>
                      </div>
                   </div>
                   <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nro. de edición</label><span style="color:red"><b> * </b></span>
                            <input type="number" name="nro_edicion" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                              <label for="">Nro. páginas</label><span style="color:red"><b> * </b></span>
                              <input type="number" name="paginas" class="form-control" required>
                          </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                              <label for="">Formato</label>
                              <select name="formato" id="" class="form-control">
                                <option value="FíSICO">FíSICO</option>
                                <option value="DIGITAL">DIGITAL</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-3">
                      <div class="form-group">
                              <label for="">Nro. de Ejemplares</label><span style="color:red"><b> * </b></span>
                              <input type="number" name="ejemplares" class="form-control" required>
                          </div>
                      </div>
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Observaciones</label>
                            <input type="text" name="observaciones" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                              <label for="">Código de barras</label>
                              <input type="text" name="codigo_barra" class="form-control">
                          </div>
                    </div>
                   </div>
                                     
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-4">
                            <center>
                                <a href="<?php echo$URL."/admin/libros";  ?>" class="btn btn-default btn-block">Cancelar</a>
                            </center>
                        </div>
                        <div class="col-md-4">
                            <center>
                            <button type="submit" onclick="return confirm('¿Son los datos correctos?')" class="btn btn-primary btn-block">Registrar Libro</button>
                            </center>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div> 
                   
                    
                </form>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <?php include('../../layout/admin/parte2.php');?>



<!-- Modal del area-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE ÁREAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller_area.php" method="POST">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nombre del Área:</label>
                    <input type="text" class="form-control" name="area">
                  </div>
                </div>
              </div>                           
        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Registrar Área</button>
          </div>
        </form>
    </div>
  </div>
</div>
<!-- Modal del campo-->
<div class="modal fade" id="exampleModal_campo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE CAMPOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller_campo.php" method="POST">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nombre del Campo:</label>
                    <input type="text" class="form-control" name="campo">
                  </div>
                </div>
              </div>                           
        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Registrar Campo</button>
          </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal de la Editorial-->
<div class="modal fade" id="exampleModal_editorial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE EDITORIALES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller_editorial.php" method="POST">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nombre de la Editorial:</label>
                    <input type="text" class="form-control" name="editorial">
                  </div>
                </div>
              </div>                           
        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Registrar Editorial</button>
          </div>
        </form>
    </div>
  </div>
</div>