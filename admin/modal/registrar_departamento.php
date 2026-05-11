<?php  
include_once ('./config/conexion.php');
$conexion = conectarse();

$registros = mysqli_query($conexion,"SELECT * FROM  pisos") or die("Problemas en el select:".mysqli_error($conexion));



?>

                

<div class="modal" id="nuevoDep" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h2> Nuevo Departamento</h2></center>
                    </div>
                    <div class="modal-body">
                       <form action="modal/insertar_departamento.php" method="POST">
                          <div class="form-group">
                            <label for="nombres">Nombre del Departamento:</label>
                            <input class="form-control" id="nombres" name="add_departamento" type="text" placeholder="Ingresar nombre del nuevo departamento" required></input>
                          </div>
            
                 <div class="form-group">
                       <label for="pisos">Pisos</label>
                            <select   name="pisos_id" id="pisos" class="form-control">
                              <?php

                              while ($tipo=mysqli_fetch_array($registros)) {

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