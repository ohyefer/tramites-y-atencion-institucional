
<div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h2> Atención al Ciudadano</h2></center>
                    </div>
                    <div class="modal-body">
                       <form action="modal/insertarV.php" method="POST">

                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input  class="form-control" name="fecha" value="<?php date_default_timezone_set('America/Caracas'); echo date("d-m-Y");?>" required></input>
                          </div>

                          <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" title="Solo Caracteres de la A-Za-z se Permiten, Por favor Tipea(Escribe) usando el teclado directamente. " pattern="[A-Za-z ]{1,40}" value="" style="text-transform:capitalize;" onkeyup="javascript:this.value=this.value.Uppercase();"  placeholder="Nombres" required></input>
                          </div>

                          <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input class="form-control" id="apellido" name="apellido" type="text" placeholder="Apellidos" required></input>
                          </div>

                          <div class="form-group">
                            <label for="cedula">Cédula:</label>
                            <input class="form-control" id="cedula" name="cedula" type="number" placeholder="Cedula" required></input>
                          </div>
                          
                          <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input class="form-control" id="correo" name="correo" type="email" placeholder="Correo" required></input>
                          </div>

                           <div class="form-group">
                            <label for="motivo">Motivo:</label>
                            <textarea class="form-control" name="motivo" type="text" placeholder="Por favor, escribir el motivo del porque viene a la Zona Educativa..." cols=4 rows=4 maxlength=250 required ></textarea>
                          </div>
                          
                         
                        <input type="submit" class="btn btn-primary" value="Guardar">
              
                       </form>
                   
           </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>