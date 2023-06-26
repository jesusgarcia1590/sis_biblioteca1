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
            <h1 class="m-0">Registro de un nuevo usuario</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="card">
            <div class="card-header">
                Llene la siguiente información
            </div>
            <div class="card-body">
                <form action="controller_create.php" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombres:</label><span style="color:red"><b> * </b></span>
                                <input type="text" name="nombres" class="form-control"  placeholder="Escribe tus nombres" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Apellidos:</label><span style="color:red"><b> * </b></span>
                                <input type="text" name="apellidos" class="form-control" placeholder="Escribe tus apellidos" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Código:</label><span style="color:red"><b> * </b></span>
                                <input type="number" name="ci" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Celular:</label>
                                <input type="number" name="celular" class="form-control" placeholder="Escribe tus nombres" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cargo:</label>
                                <select name="cargo" id="" class="form-control">
                                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                    <option value="DOCENTE">DOCENTE</option>
                                    <option value="ESTUDIANTE">ESTUDIANTE</option>
                                    <option value="PÚBLICO">PÚBLICO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Correo Electrónico:</label><span style="color:red"><b> * </b></span>
                                <input type="email" name="email" class="form-control" placeholder="Escribe tu correo" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                                <label for="">Contraseña:</label><span style="color:red"><b> * </b></span>
                                <input type="text" name="password" class="form-control"  required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Verificaci&oacute;n de contraseña:</label><span style="color:red"><b> * </b></span>
                                <input type="text" name="verificar_password" class="form-control"  required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-4">
                            <center>
                                <a href="<?php echo$URL."/admin/usuarios";  ?>" class="btn btn-default btn-block">Cancelar</a>
                            </center>
                        </div>
                        <div class="col-md-4">
                            <center>
                            <button type="submit" onclick="return confirm('¿Son los datos correctos?')" class="btn btn-primary btn-block">Registrar Usuario</button>
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