<?php
	require_once ("../config/conexion.php");
?>

<?php

$conexion=conectarse();	
$acentos= $conexion->query("SET NAMES 'utf8'");		
$action='ajax';
	if($action == 'ajax'){
         $q = mysqli_real_escape_string($conexion,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		  $sTable = "agregar_pase";
		 $sWhere = "";

		 $sWhere.="INNER JOIN estatus ON (agregar_pase.estatu_id=estatus.id_estatus) INNER JOIN departamentos ON (agregar_pase.departamento_id=departamentos.id_departamento) Inner Join login ON (agregar_pase.login_id=login.id_login) WHERE id_agregarp<=id_agregarp and estatu_id=1";

		if ( $_GET['q'] != "" )
		{
		$sWhere.= " and cedula_p like '%$q%' ";	
		}
		
		$sWhere.=" order by cedula_p desc ";
		
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		 
		 $registro = mysqli_query($conexion,"SELECT * FROM $sTable $sWhere") or
    die("Problemas en el select:".mysqli_error($conexion));
		;
?>


				<table class="table table-hover" style="border-color: #337ab7;">

					<tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
					
        
 
          <th>#</th>  
          <th>Nombre Completo</th>
          <th>Cédula</th>
          <th>Departamento</th>
          <th>Status</th>
          <th></th>


        <?php $n=1; while ($reg=mysqli_fetch_array($registro)) :?>
 

         <tr>
          <td> <?php echo $n++; ?> </td>
          <td><?php echo ($reg['nombre_p'])."&nbsp".($reg['apellido_p']);?></td>
          <td> <?php echo ($reg['cedula_p']);?></td>
          <td> <?php echo ($reg['add_departamento']);?></td>
          <td> <?php echo ($reg['nombre_status']);?></td>
          
<td>
        
			  <button type="button" class="btn btn-danger btn-lg" onClick="window.location='salida.php?cedula_p=<?php echo $reg['cedula_p']; ?>';">Salida</button>


		</td>
        
                 
        </tr>
    </tr>




<?php endwhile; ?>

        </table>
<?php
}
?>



			