<?php
#para conectar a la base de datos
include('../app/config/config.php');
include('../app/config/conexion.php');
#para la sesion activa
include('../layout/admin/sesion.php');
include('../layout/admin/datos_sesion_user.php');
?>
<!--
<a href="../login/controller_cerrar_sesion.php">Cerrar Sesion</a>
-->

<?php include('../layout/admin/parte1.php');?>;
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">¡Bienvenido!</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
          <table class="table table-hover table-bordered table-striped" style="background-color: #ffffff">
              <thead>
                <tr>
                  <th scope="col">Nombres</th>
                  <td scope="col"><?php echo $sesion_nombres; ?></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Apellidos</th>
                  <td><?php echo $sesion_apellidos; ?></td>
                </tr>
                <tr>
                  <th scope="row">C.I.</th>
                  <td><?php echo $sesion_ci; ?></td>
                </tr>
                <tr>
                  <th scope="row">Celular</th>
                  <td colspan="2"><?php echo $sesion_celular; ?></td>
                </tr>
                <tr>
                  <th scope="row">Cargo</th>
                  <td colspan="2"><?php echo $sesion_cargo; ?></td>
                </tr>
                <tr>
                  <th scope="row">E-mail</th>
                  <td colspan="2"><?php echo $email_sesion; ?></td>
                </tr>
              </tbody>
        </table>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <?php include('../layout/admin/parte2.php');?>

