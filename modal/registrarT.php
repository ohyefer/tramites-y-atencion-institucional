
<?php  

$conexion = mysqli_connect("localhost", "root", "", "atencion_ciudadano"); ?>

<?php
$registros = mysqli_query($conexion,"SELECT * FROM tramites ");
$registros = mysqli_query($conexion,"SELECT * FROM requisitos");
$registros = mysqli_query($conexion,"SELECT * FROM tipo_personal") or
                              die("Problemas en el select:".mysqli_error($conexion));

?>
                           


<div class="modal" id="nuevoT<?php echo $reg["cedula"];?>" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h2>Trámites</h2></center>
                    </div>
                    <div class="modal-body">
                       <form action="" method="POST"> 


                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" class="form-control" name="fecha" value="<?php echo $reg["fecha"];?>"  readonly></input>
                          </div>

                                           
                          <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input class="form-control" id="nombre" name="nombre" value="<?php echo $reg["nombre"];?>" readonly></input>
                          </div>
                          <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input class="form-control" id="apellido" name="apellido" value="<?php echo $reg["apellido"];?>" readonly></input>
                          </div>
                          <div class="form-group">
                            <label for="cedula">Cédula:</label>
                            <input class="form-control" id="cedula" name="cedula" value="<?php echo $reg["cedula"];?>" readonly></input>
                          </div>


                          <div class="form-group">
                            <select   name="tipo_personal" class="form-control" onchange="muestra(this.selectedIndex);" >
                              <option value="">Seleccione el tipo de personal </option>

                            
                          
                              
                              <?php

                              while ($tipo=mysqli_fetch_row($registros)) {

                                echo 
                                "  <option value='".$tipo['1']."'>".$tipo['1']."</option>";
                                "  <option value='".$tipo['2']."'>".$tipo['2']."</option>";
                                "  <option value='".$tipo['3']."'>".$tipo['3']."</option>";

                  }

                  ?>
                            </select>
                          </div>

                          

              
                          <form action="" method="post" name="form1" id="AD" style="display:none;">
<div class="form-group"> 
<label for="Administrativo">Administrativo</label>   
<select class="form-control" name="uno" onchange="muestrados(this.selectedIndex);"> 
<option value="0"></option> 

<option value="2">Liberación por Cargo</option> 
<option value="3">Traslado y Sinceración Personal</option> 
<option value="4">Vacaciones</option>  
</select> 
</div>
</form> 


<form action="" method="post" name="form1" id="OB" style="display:none;"> 
<div class="form-group"> 
<label for="Obrero">Obrero</label>   
<select class="form-control" name="uno"> 
<option value="0"></option> 

<option value="2">Liberación por Cargo</option> 
<option value="3">Traslado y Sinceración Personal</option> 
<option value="4">Vacaciones</option>  
</select>
</div> 
</form> 



<form action="" method="post" name="form1"  id="DO" style="display:none;"> 
<div class="form-group"> 

   
<label for="Docente">Docente</label>   
<select class="form-control" name="uno"> 
<option value="0"></option> 

<option value="2">Liberación por Cargo</option> 
<option value="3">Liberación por Horas</option> 
<option value="4">Titularidad</option> 
<option value="5">Traslado y Sinceración Personal</option> 
<option value="6">Vacaciones</option> 
</select> 
</div>
</form> 




                       
                        <input type="submit" class="btn btn-primary" value="Guardar">
              
                       </form>

                   
           </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>

         <script src="js/mostrar.js"></script>