<?php include ("navbar.php");
?>
<?php

  include('config/conexion.php');
  $conexion=conectarse();



 $registros = mysqli_query($conexion,"SELECT * FROM agregar_pase INNER JOIN departamentos ON (agregar_pase.departamento_id=departamentos.id_departamento) INNER JOIN login ON (agregar_pase.login_id=login.id_login) INNER JOIN estatus ON (agregar_pase.estatu_id=estatus.id_estatus) WHERE estatu_id=1") or die("Problemas en el select:".mysqli_error($conexion)); 
?>


<div class="content-wrapper">
      <div class="content">
        <div class="row">
  <div class="col-md-12">

    <center><h1>Lista de Visitante</h1></center>
<br>
      
          <table class="table table-hover" style="border-color: #337ab7;">
          
          <tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
          <th>#</th>  
          <th>Nombre Completo</th>
          <th>Cédula</th>
          <th>Departamento</th>



        <?php $n=1; while ($reg=mysqli_fetch_array($registros)) :?>
         <tr>
           <td> <?php echo $n++; ?> </td>
          <td> <?php echo ($reg['nombre_p'])."&nbsp;".($reg['apellido_p']);?></td>
          <td> <?php echo ($reg['cedula_p']);?></td>    
          <td> <?php echo ($reg['add_departamento']);?></td>          
          
        </tr>

       
        </tr>  








<?php endwhile; ?>



        </table>


  </div>
</div>
</div>
</div>

<?php include ("footer.php");

?>
