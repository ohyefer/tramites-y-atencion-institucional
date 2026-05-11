<div class="modal" id="EditarDep<?php echo $reg["id_departamento"];?>" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h2> Editar Departamiento</h2></center>
                    </div>
                    <div class="modal-body">
                       <form action="modal/actualizar_departamento.php" method="POST">                  
                          
                          <div class="form-group">
                            <label for="Codigo">Codigo:</label>
                            <input class="form-control" name="id_departamento" value="<?php echo $reg['id_departamento']; ?>" readonly></input>
                          </div>

                          <div class="form-group">
                            <label for="nombres">Nombre del Departamento:</label>
                            <input class="form-control" id="nombres" name="add_departamento" type="text" value="<?php echo $reg['add_departamento']; ?>" required></input>
                          </div>
                
            
                        <div class="form-group">
                            <label for="cargo">Piso:</label>
                            <div class="form-group">
                              <select class="form-control" id="pisos" name="pisos_id" required >
                                <?php

                                echo  
                                " <option value='".$reg['id_pisos']."'>&nbsp;".$reg['add_piso']."</option>";
                                ?>

                                <?php

                                $registros3 = mysqli_query($conexion,"SELECT * FROM  pisos") or die("Problemas en el select:".mysqli_error($conexion));

                                while ($tipo=mysqli_fetch_array($registros3)) {
                                  echo 
                                "  <option value='".$tipo['id_pisos']."'>".$tipo['add_piso']."</option>";
                              }
                              ?>
                                
                              </option>
                            </select>
                          </div>
                        </div>

                  



              <input type="submit" class="btn btn-primary" value="Guardar">
                       </form>
                   
           </div>
            <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>