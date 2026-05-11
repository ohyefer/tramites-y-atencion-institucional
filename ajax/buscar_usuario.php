<?php
	require_once ("../config/conexion.php");
?>

<?php

$conexion=conectarse();			
$action='ajax';
	if($action == 'ajax'){
         $q = mysqli_real_escape_string($conexion,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		  $sTable = "publico";
		 $sWhere = "";
		 $sWhere.="WHERE id_publico<=id_publico";
		if ( $_GET['q'] != "" )
		{
		$sWhere.= " and cedula like '%$q%'";
			
		}
		
		$sWhere.=" order by cedula asc";
		
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;


		$registro = mysqli_query($conexion,"SELECT * FROM $sTable $sWhere") or
    die("Problemas en el select:".mysqli_error($conexion));
		
		?>

				<table class="table table-hover" style="border-color: #337ab7;">

					<tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
					
        
 
          <th>#</th>  
          <th>Nombre Completo</th>
          <th>Cédula</th>


        <?php $n=1; while ($reg=mysqli_fetch_array($registro)) :?>
        

         <tr>
          <td> <?php echo $n++; ?> </td>
          <td><a href="registrarT.php?cedula=<?php echo $reg['cedula']; ?>
          "> <?php echo ($reg['nombre'])."&nbsp".($reg['apellido']);?></td></a>
          <td> <?php echo ($reg['cedula']);?></td>
        
                 
        </tr>
    </tr>




<?php endwhile; ?>

        </table>
<?php
}
?>



			