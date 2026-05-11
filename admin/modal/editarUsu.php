<div class="modal" id="EditarUsua<?php echo $reg["id_login"];?>" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h2> Editar Usuario</h2></center>
                    </div>
                    <div class="modal-body">
                       <form action="modal/actualizarUsu.php" method="POST">                  
                          
                          <div class="form-group">
                            <label for="Codigo">Codigo:</label>
                            <input class="form-control" name="id_login" value="<?php echo $reg['id_login']; ?>" readonly></input>
                          </div>

                          <div class="form-group">
                            <label for="nombres">Nombre Completo:</label>
                            <input class="form-control" id="nombres" name="nombre_apellido" type="text" value="<?php echo $reg['nombre_apellido']; ?>" required></input>
                          </div>
                
                          <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input class="form-control" id="correo" name="email" type="text" value="<?php echo $reg['email']; ?>" required></input>
                          </div>
                       
                         <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input class="form-control" id="usuario" name="username" type="text" value="<?php echo $reg['username']; ?>" required></input>
                          </div>

                          <div class="form-group">
                            <label for="contraseña">Contraseña:</label>
                            <input class="form-control" type="password" name="password" id="password"value="<?php echo $reg['password']; ?>" required/></input>
                          </div>



                            <div class="form-group">
                       <label for="entrada">Cargos</label>
                            <select   name="cargo_id" id="cargos" class="form-control" required>
                              <option value="0">Seleccione</option>

                              <option value="2">Jefe de Oficina</option>
                              <option value="3">Registrador</option>
                              <option value="4">Pase</option>



                            </select>
                          </div>

                         <div class="form-group">
                            <label for="cargo">Departamento:</label>
                            <div class="form-group">
                              <select class="form-control" id="departamentos" name="departamento_id" required>      
                               <?php

                                echo  
                                " <option value='".$reg['id_departamento']."'>&nbsp;".$reg['add_departamento']."</option>";
                                ?>

                                <?php

                                $registros2 = mysqli_query($conexion,"SELECT * FROM  departamentos") or die("Problemas en el select:".mysqli_error($conexion));

                                while ($tipo=mysqli_fetch_array($registros2)) {
                                  echo 
                                "  <option value='".$tipo['id_departamento']."'>".$tipo['add_departamento']."</option>";
                              }
                              ?>
                                
                              </option>
                            </select>
                          </div>
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