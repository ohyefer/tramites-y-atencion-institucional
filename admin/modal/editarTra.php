<div class="modal" id="EditarTra<?php echo $reg["id_tramites"];?>" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h2> Editar Trámite</h2></center>
                    </div>
                    <div class="modal-body">
                       <form action="modal/actualizarTra.php" method="POST">                  
                          
                          <div class="form-group">
                            <label for="Codigo">Codigo:</label>
                            <input class="form-control" name="id_tramites" value="<?php echo $reg['id_tramites']; ?>" readonly></input>
                          </div>

                          <div class="form-group">
                            <label for="nombres">Nombre Trámite:</label>
                            <input class="form-control" id="nombre" name="nombre_tramite" type="text" value="<?php echo $reg['nombre_tramite']; ?>" required></input>
                          </div>

                          <div class="form-group"> 
                            <label for="correo">Requisitos:</label>
                          <input class="form-control" id="requisitos" name="requisitos_id" type="text" value="<?php echo $reg['nombre_requisito']; ?>" required></input> 
                          </div>
                      
                         <div class="form-group">
                            <label for="usuario">Tipo Personal:</label>
                            <input class="form-control" id="tipo_personal" name="tipopersonal_id" type="text"  value="<?php echo $reg['nombre_tipo']; ?>" required></input>
                          </div>


              <input type="submit" class="btn btn-primary" value="Guardar">
                       </form>
                   
           </div>
            <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>