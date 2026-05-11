<?php include("registradora.php"); ?>
      
<?php
if(isset($_GET['cedula']))
{

  include('config/conexion.php');
  $conexion=conectarse();

  $cedula=$_GET['cedula'];
  $registro=$conexion->query("SELECT * FROM publico WHERE cedula='$cedula'");
  $reg = $registro->fetch_array();

?>

  <div class="content-wrapper">
      <div class="content">
        <div class="row">
  <div class="col-md-12">

                       <form action="modal/insertarTra.php" method="POST" rol="form">
                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input class="form-control" name="fecha_inicio" value="<?php echo $reg["fecha"];?>"  readonly></input>
                          </div>

                                           
                          <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input class="form-control" id="nombre" name="nombre_tra" value="<?php echo $reg["nombre"];?>" readonly></input>
                          </div>
                          <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input class="form-control" id="apellido" name="apellido_tra" value="<?php echo $reg["apellido"];?>" readonly></input>
                          </div>
                          
                          <div class="form-group">
                            <label for="cedula">Cédula:</label>
                            <input class="form-control" id="cedula" name="cedula_tra" value="<?php echo $reg['cedula']; ?>" readonly></input>
                          </div>

                          <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input class="form-control" id="correo" name="correo_tra" value="<?php echo $reg['correo']; ?>" readonly></input>
                          </div>

                          <div class="form-group">
                            <label for="motivo">Motivo:</label>
                            <input class="form-control" id="motivo" name="motivo_tra" value="<?php echo $reg['motivo']; ?>" readonly></input>
                          </div>

                          <div class="form-group">
                            <label for="fecha">Fecha Trámite:</label>
                            <input class="form-control" id="cedula" name="fecha_tra" value="<?php date_default_timezone_set('America/Caracas'); echo date("d-m-Y");?>" readonly></input>
                          </div>




                           <div class="form-group">
                       <label for="tipopersonal">Tipo Personal</label>
                            <select   name="tipopersonal_id" id="tipo_personal" class="form-control" required>

                            </select>
                          </div>

                            <div class="form-group">
                       <label for="tramites">Trámites</label>
                            <select   name="tramites_id" id="tramites" class="form-control" required>

                            </select>
                          </div>

                           <div class="form-group">
                       <label for="requisitos">Requisitos</label>
                            <textarea name="requisitos_id" id="requisitos" class="form-control" cols=4 rows=4 maxlength=250 readonly>
                            </textarea>
                          </div>

                           <div class="form-group">
                       <label for="departamentos">Departamento</label>
                            <select   name="departamento_id" id="detalles_tramites" class="form-control" required>


                            </select>
                          </div>

                          <input type="submit" class="btn btn-primary" name="submit" value="Guardar">


                          <a href="realizarT.php" class="btn btn-danger">Cancelar</a>

                       </form>
            
            


          </div>
        </div>

        <?php 
      }

        ?>

          <?php include ("footer.php");?> 

   <script src="functions.js"></script>
   <script src="functions2.js"></script>
   <script src="functions3.js"></script>

