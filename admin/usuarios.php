<?php include ("navbar.php");?>
<?php

    include('config/conexion.php');
    $conexion=conectarse();
    $registros = mysqli_query($conexion,"SELECT * FROM  login INNER JOIN cargos ON (login.cargo_id=cargos.id_cargo) INNER JOIN pisos ON (login.pisos_id=pisos.id_pisos) INNER JOIN departamentos ON (login.departamento_id=departamentos.id_departamento)WHERE id_login>=2 ORDER BY 1") or
    die("Problemas en el select:".mysqli_error($conexion));



?>

<div class="content-wrapper">
      <div class="content">
        <div class="row">
  <div class="col-md-12">

  <a href="#" data-toggle="modal" data-target="#nuevoUsua" class="btn btn-default pull-right"><i class='fa fa-user'></i> Nuevo Usuario</a>
    <h1>Lista de Usuarios</h1>
<br>
      
           <table class="table table-hover" style="border-color: #337ab7;">
          
          <tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
          <th>#</th>  
          <th>Nombre Completo</th>
          <th>Correo</th>
          <th>Usuario</th>
          <th>Cargo</th>
          <th>Piso</th>
          <th>Departamento</th>
          <th></th>
          <th></th>



        <?php $n=1; while ($reg=mysqli_fetch_array($registros)) :?>
        <?php include ('modal/editarUsu.php');?>
         <tr>
          <td> <?php echo ($reg['id_login']); ?> </td>
          <td> <?php echo ($reg['nombre_apellido']);?></td>
          <td> <?php echo ($reg['email']);?></td>
          <td> <?php echo ($reg['username']);?></td>
          <td> <?php echo ($reg['nombre_cargo']);?></td>
          <td> <?php echo ($reg['add_piso']);?></td>
          <td> <?php echo ($reg['add_departamento']);?></td>
          
        <td style="width:15px;">
        <a href="#" data-toggle="modal" data-target="#EditarUsua<?php echo $reg["id_login"];?>" class="btn btn-warning btn-xs">Editar</a>
        </td>
        <td style="width: 15px;">
        <a href="modal/eliminarUsu.php?username=<?php echo $reg['username']; ?>" class="btn btn-danger btn-xs">Eliminar</a></td>
          
        </tr>

       
        </tr>  







<?php endwhile; ?>

        </table>
    

  </div>

</div>        </div>
      </div>

<?php include ("footer.php"); ?>
