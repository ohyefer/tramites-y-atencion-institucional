<?php include ("pase.php");

   include('config/conexion.php');
     $conexion=conectarse();
     $acentos= $conexion->query("SET NAMES 'utf8'");
     $registros = mysqli_query($conexion,"SELECT * FROM registro_tramites INNER JOIN tipo_personal ON (registro_tramites.tipopersonal_id=tipo_personal.id_tipopersonal) INNER JOIN tramites ON (registro_tramites.tramites_id=tramites.id_tramites) INNER JOIN pisos ON (registro_tramites.pisos_id=pisos.id_pisos) INNER JOIN departamentos ON (registro_tramites.departamento_id=departamentos.id_departamento) ") or
     die("Problemas en el select:".mysqli_error($conexion));


?>

<div class="content-wrapper">
      <div class="content">
          <div class="row">
  <div class="col-md-12">
      <br><br>


      <br><br>


      <table class="table table-hover" style="border-color: #337ab7;">
      <thead>
      <tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
          
          <th>#</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Cédula</th>
          <th>Profesión</th>
          <th>Trámites</th>
          <th>Piso</th>
          <th>Departamento</th>
          <th>Status Entrada</th>
          <th>Status Salida</th>

        </tr>
         <?php $n=1; while ($reg=mysqli_fetch_array($registros)) :?>
         <tr>
          <td> <?php echo $n++; ?> </td>
          <td> <?php echo ($reg['nombre_tra']);?></td>
          <td> <?php echo ($reg['apellido_tra']);?></td>
          <td> <?php echo ($reg['cedula_tra']);?></td>
          <td> <?php echo ($reg['nombre_tipo']);?></td>
          <td> <?php echo ($reg['nombre_tramite']);?></td>
          <td> <?php echo ($reg['add_piso']);?></td>
          <td> <?php echo ($reg['add_departamento']);?></td>

           <td style="width:30px;">
        <a href="" class="btn btn-primary btn-lg">Entrada</a>
        </td>
        <td style="width: 30px;">
        <a href="" class="btn btn-danger btn-lg">Salida</a></td>

         
       </tr> 
       
      </thead>
     <?php endwhile; ?>
       
  </table>

<?php include ("footer.php"); ?>

