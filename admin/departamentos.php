<?php include ("navbar.php");?>
<?php

    include('config/conexion.php');
    $conexion=conectarse();
    $registros = mysqli_query($conexion,"SELECT * FROM departamentos INNER JOIN pisos ON (departamentos.pisos_id=pisos.id_pisos) WHERE id_departamento>=2 ORDER BY 1") or
    die("Problemas en el select:".mysqli_error($conexion));



?>

<div class="content-wrapper">
      <div class="content">
        <div class="row">
  <div class="col-md-12">

  <a href="#" data-toggle="modal" data-target="#nuevoDep" class="btn btn-default pull-right"><i class='fa fa-home'></i> Nuevo Departamento</a>
    <center><h1>Lista de Departamentos</h1></center>
<br>
      
           <table class="table table-hover" style="border-color: #337ab7;">
          
          <tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
          <th>#</th>  
          <th>Departamento</th>
          <th>Piso</th>
          <th></th>
          <th></th>



        <?php $n=1; while ($reg=mysqli_fetch_array($registros)) :?>
         <tr>
          <?php include ('modal/editar_departamento.php'); ?>
          <td> <?php echo ($reg['id_departamento']); ?> </td>
           <td> <?php echo ($reg['add_departamento']);?></td>
          <td> <?php echo ($reg['add_piso']);?></td>
        
         <td style="width:15px;">
        <a href="#" data-toggle="modal" data-target="#EditarDep<?php echo $reg["id_departamento"];?>" class="btn btn-warning btn-xs">Editar</a>
        </td>
        <td style="width: 15px;">
        <a href="modal/eliminar_departamento.php?id_departamento=<?php echo $reg['id_departamento']; ?>" class="btn btn-danger btn-xs">Eliminar</a></td>
          
        </tr>

       
        </tr>  







<?php endwhile; ?>

        </table>
    

  </div>

</div>        </div>
      </div>

<?php include ("footer.php"); ?>
