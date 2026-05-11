<?php include("navbar.php"); ?>

<?php
if(isset($_GET['cedula']))
{

  include('config/conexion.php');
  $conexion=conectarse();
  mysqli_set_charset($conexion,'SET NAMES utf8');

  $cedula=$_GET['cedula'];
  $registro=$conexion->query("SELECT * FROM publico WHERE cedula='$cedula'");
  $reg = $registro->fetch_array();

?>
<div class="content-wrapper">
      <div class="content">
        <div class="row">
  <div class="col-md-12">

                       <form action="modal/insertarRJO.php" method="POST" rol="form">
                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" class="form-control" name="fecha_inicio" value="<?php echo $reg["fecha"];?>"  readonly></input>
                          </div>

                                           
                          <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input class="form-control" id="nombre" name="nombre_p" value="<?php echo $reg["nombre"];?>" readonly></input>
                          </div>
                          <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input class="form-control" id="apellido" name="apellido_p" value="<?php echo $reg["apellido"];?>" readonly></input>
                          </div>
                          
                          <div class="form-group">
                            <label for="cedula">Cédula:</label>
                            <input class="form-control" id="cedula" name="cedula_p" value="<?php echo $reg['cedula']; ?>" readonly></input>
                          </div>



                          <div class="form-group">
                            <label for="fecha">Fecha Pase:</label>
                            <input class="form-control" id="fecha" name="fecha_p" value="<?php date_default_timezone_set('America/Caracas'); echo date("d-m-Y");?>" readonly></input>
                          </div>




               <div class="form-group">
                       <label for="departamento">Departamento</label>
                            <select   name="departamento_id" id="departamentos" class="form-control">

                  </select>
              </div>

              <div class="form-group">
                       <label for="login">Jefes de Oficina</label>
                            <select   name="login_id" id="login" class="form-control">

                  </select>
              </div>

                    <div class="form-group">
                       <label for="entrada">Estatus</label>
                            <select   name="estatu_id" id="estatus" class="form-control" required>
                              <option value="">Seleccione</option>
                              <option value="1">En atención</option>


                            </select>
                          </div>



                          <input type="submit" class="btn btn-primary" name="submit" value="Enviar Pase">


                          <a href="realizarP.php" class="btn btn-danger">Cancelar</a>

                       </form>
            
            


          </div>
        </div>

        <?php 
      }

        ?>
       <script src="functions5.js"></script>
        <br>
        <br>
        <br>
        <br>

          <?php include ("footer.php");?> 



