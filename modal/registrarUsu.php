<?php  
include_once ('./config/conexion.php');
$conexion = conectarse();

$registros1 = mysqli_query($conexion,"SELECT * FROM  cargos") or die("Problemas en el select:".mysqli_error($conexion));

$registros2 = mysqli_query($conexion,"SELECT * FROM  departamentos") or die("Problemas en el select:".mysqli_error($conexion));

$registros3 = mysqli_query($conexion,"SELECT * FROM  pisos") or die("Problemas en el select:".mysqli_error($conexion));



?>

                

<div class="modal" id="nuevoUsua" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h2> Agregar Usuario</h2></center>
                    </div>
                    <div class="modal-body">
                       
                       <form action="modal/insertarUsu.php" method="POST">                  
                          <div class="form-group">
                            <label for="nombres">Nombre Completo:</label>
                            <input class="form-control" id="nombres" name="nombre_apellido" type="text" placeholder="Nombre Completo" required></input>
                          </div>
                     
                          <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input class="form-control" id="correo" name="email" type="text" placeholder="Correo" required></input>
                          </div>


                    <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input class="form-control" id="usuario" name="username" type="text" placeholder="Usuario" required></input>
                    </div>

                    <div class="form-group">
                    <label for="contraseña">Contraseña</label>
                    <input class="form-control" type="password" name="password" id="contraseña" placeholder="Contraseña" required/></input>
                    </div>


                        <div class="form-group">

                    <label for="cargo">Cargo</label>
                            <select   name="cargo_id" id="cargos" class="form-control">
                              

                              <?php

                              while ($tipo=mysqli_fetch_array($registros1)) {

                                echo 
                                "  <option value='".$tipo['id_cargo']."'>".$tipo['nombre_cargo']."</option>";

                  }

                  ?>

                  </select>
              </div>
                   

                   <div class="form-group">
                       <label for="departamento">Departamento</label>
                            <select   name="departamento_id" id="departamento" class="form-control">
                                     
                              <?php

                              while ($tipo=mysqli_fetch_array($registros2)) {

                                echo 
                                "  <option value='".$tipo['id_departamento']."'>".$tipo['add_departamento']."</option>";
                                                    
                  }

                  ?>

                  </select>
              </div>

                 <div class="form-group">
                       <label for="pisos">Pisos</label>
                            <select   name="pisos_id" id="pisos" class="form-control">
                              <?php

                              while ($tipo=mysqli_fetch_array($registros3)) {

                                echo 
                                "  <option value='".$tipo['id_pisos']."'>".$tipo['add_piso']."</option>";
                  }

                  ?>

                  </select>
              </div>

                         


              <input type="submit" class="btn btn-primary" value="Guardar">
                       </form>
                   
           </div>
            <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>