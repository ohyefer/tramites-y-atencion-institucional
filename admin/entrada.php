<?php include("navbar.php"); ?>

<?php
  include ("config/conexion.php");
  $conexion = conectarse();
  mysqli_set_charset($conexion,'SET NAMES utf8');
  $cedula = $_REQUEST['cedula'];
  $consulta = "SELECT * FROM publico WHERE cedula = '$cedula'";
  $reg = mysqli_fetch_array(mysqli_query($conexion,$consulta));
?>


  <div class="content-wrapper">
      <div class="content">
        <div class="row">
  <div class="col-md-12">
                        <center><h2> Visitante</h2></center>
                    </div>
                    <div class="modal-body">
                       <form action="modal/actualizarV.php" method="POST">                  
                          <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input class="form-control" id="nombres" name="nombre" type="text" value="<?php echo $reg['nombre']; ?>" readonly></input>
                          </div>

                           <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input class="form-control" id="nombres" name="apellido" type="text" value="<?php echo $reg['apellido']; ?>" readonly></input>
                          </div>
                
                          <div class="form-group">
                            <label for="cedula">Cedula:</label>
                            <input class="form-control" id="correo" name="cedula" type="text" value="<?php echo $reg['cedula']; ?>" readonly></input>
                          </div>

                          <div class="form-group">
                            <label for="motivo">Motivo:</label>
                            <input class="form-control" id="motivo" name="motivo" type="text" value="<?php echo $reg['motivo']; ?>" readonly></input>
                          </div>


                           <div class="form-group">
                       <label for="departamento">Departamento</label>
                            <select   name="departamento_id" id="departamentos" class="form-control" required>


                            </select>
                          </div>

                          <div class="form-group">
                       <label for="entrada">Entrada</label>
                            <select   name="estatus_id" id="estatus_id" class="form-control" required>
                              <option value="">Seleccione</option>
                              <option value="0">Espera</option>
                              <option value="1">En atención</option>


                            </select>
                          </div>


               <input type="submit" class="btn btn-primary" name="submit" value="Enviar Pase">


                          <a href="registrado.php" class="btn btn-danger">Cancelar</a>

                       </form>
            
            


          </div>
        </div>

          <?php include ("footer.php");?> 


       <script src="functions4.js"></script>