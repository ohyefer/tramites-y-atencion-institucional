<?php  
include_once ('./config/conexion.php');
$conexion = conectarse();
$registros2 = mysqli_query($conexion,"SELECT * FROM  tipo_personal") or die("Problemas en el select:".mysqli_error($conexion));

?>
<div class="modal" id="nuevoTra" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h2>Nuevo Trámite</h2></center>
                    </div>
                    <div class="modal-body">
                       <form action="modal/insertar_tramite.php" method="POST">
                          <div class="form-group">
                            <label for="nombres">Nombre Trámite</label>
                            <input class="form-control" id="nombre" name="nombre_tramite" type="text" placeholder="Ingresar nombre del nuevo tramite" required></input>
                          </div>

                           <div class="form-group">
                            <label for="requisitos">Requisitos:</label>
                            <textarea class="form-control" name="requisitos_id" type="text" placeholder="Por favor, escribir los requisitos de ese nuevo trámite..." cols=4 rows=4 maxlength=250 required ></textarea>
                          </div>

                               <div class="form-group">
                       <label for="pisos">Pisos</label>
                            <select   name="tipopersonal_id" id="tipop" class="form-control">
                              <?php

                              while ($tipo=mysqli_fetch_array($registros2)) {

                                echo 
                                "  <option value='".$tipo['id_tipopersonal']."'>".$tipo['nombre_tipo']."</option>";
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