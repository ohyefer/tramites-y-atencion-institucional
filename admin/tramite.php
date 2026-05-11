<?php include ("navbar.php");?>
<?php

    include('config/conexion.php');
    $conexion=conectarse();
    $acentos= $conexion->query("SET NAMES 'utf8'");

    $registros = mysqli_query($conexion,"SELECT * FROM tramites INNER JOIN requisitos ON (tramites.requisitos_id=requisitos.id_requisitos) INNER JOIN tipo_personal ON (tramites.tipopersonal_id=tipo_personal.id_tipopersonal) WHERE id_tramites>=1 ORDER BY 1 ") or
    die("Problemas en el select:".mysqli_error($conexion));



?>

<div class="content-wrapper">
      <div class="content">
        <div class="row">
  <div class="col-md-12">


    <center><h1>Lista de Departamentos</h1></center>
<br>
      
           <table class="table table-hover" style="border-color: #337ab7;">
          
          <tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
          <th>#</th>  
          <th>Trámites</th>
          <th>Requisitos</th>
          <th>Tipo Personal</th>
          <th></th>
          <th></th>


        <?php ; while ($reg=mysqli_fetch_array($registros)) :?>
         <?php include ('modal/editarTra.php'); ?>
         <tr>
          <td> <?php echo ($reg['id_tramites']); ?> </td>
          <td> <?php echo ($reg['nombre_tramite']); ?> </td>
           <td> <?php echo ($reg['nombre_requisito']);?></td>
          <td> <?php echo ($reg['nombre_tipo']);?></td>
   
        </tr>

       
        </tr>  







<?php endwhile; ?>

        </table>
    

  </div>

</div>        </div>
      </div>




<?php include ("footer.php"); ?>
