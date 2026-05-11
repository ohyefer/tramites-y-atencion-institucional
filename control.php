<?php 
  include('config/conexion.php');
  $conexion=conectarse();
  $acentos= $conexion->query("SET NAMES 'utf8'");
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Control</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" type="text/css" href="css/stcontrol.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/codrops.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/slideshowcontrol.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >

      <script src="js/jquery-2.1.4.min.js"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <script src="js/app.min.js" type="text/javascript"></script>

  </head>

  <body >

<ul class="cb-slideshow">



<li><span>1</span><div></div></li>
<li><span>2</span><div></div></li>
<li><span>3</span><div></div></li>
<li><span>4</span><div></div></li>
<li><span>5</span><div></div></li>
<li><span>6</span><div></div></li>

        </ul>
<div class="container">

<header >

<center><td style="width:10px;">
        <a href="modal/cerrar.php" class="btn btn-danger btn-lg">Cerrar</a>
      </td></center>

      <br>
      <br>
      <br> 

 <div class="perfil-cuadro posicion">
        <div class="perfil perfil-cuadro">
  <div class="cabecera1"><p class="letras">PISO 1</p></div>

<?php

 $registros = mysqli_query($conexion,"SELECT * FROM pisos INNER JOIN  departamentos ON (pisos.id_pisos=departamentos.pisos_id) INNER JOIN agregar_pase ON (departamentos.id_departamento=agregar_pase.departamento_id) INNER JOIN estatus ON (agregar_pase.estatu_id=estatus.id_estatus) WHERE id_pisos=2 AND estatu_id=1") or die("Problemas en el select:".mysqli_error($conexion)); 
 header("refresh:6");

?>
 
      <table class="table table-bordered table-hover positable">
           
          <tr>
          <th>#</th>  
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cédula</th>
          <th>Oficina</th>
          <th>Estatus</th>
        
         

<?php $n=1; while ($reg=mysqli_fetch_array($registros)) :?>
      <tr>
          <th> <?php echo $n++; ?></th>
          <td> <?php echo ($reg['nombre_p']);?></td>   
          <td> <?php echo ($reg['apellido_p']);?></td> 
          <td> <?php echo ($reg['cedula_p']);?></td>
          <td> <?php echo ($reg['add_departamento']);?></td>
          <td> <?php echo ($reg['nombre_status']);?></td> 

<?php endwhile; ?>



</tr>
</tr>
</table> 


       <br>
          
             
        </div>
    </div>

</header> 

   
<header>

 <div class="perfil-cuadro posicion1">
        <div class="perfil perfil-cuadro">
        <div class="cabecera2"><p class="letras">PISO 2</p></div> 

     <?php

$registros = mysqli_query($conexion,"SELECT * FROM pisos INNER JOIN  departamentos ON (pisos.id_pisos=departamentos.pisos_id) INNER JOIN agregar_pase ON (departamentos.id_departamento=agregar_pase.departamento_id) INNER JOIN estatus ON (agregar_pase.estatu_id=estatus.id_estatus) WHERE id_pisos=3 AND estatu_id=1") or die("Problemas en el select:".mysqli_error($conexion)); 

?>
 
      <table class="table table-bordered table-hover positable">
           
          <tr>
          <th>#</th>  
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cédula</th>
          <th>Oficina</th>
          <th>Estatus</th>
        
         

<?php $n=1; while ($reg=mysqli_fetch_array($registros)) :?>
      <tr>
          <th> <?php echo $n++; ?></th>
          <td> <?php echo ($reg['nombre_p']);?></td>   
          <td> <?php echo ($reg['apellido_p']);?></td> 
          <td> <?php echo ($reg['cedula_p']);?></td>
          <td> <?php echo ($reg['add_departamento']);?></td>
          <td> <?php echo ($reg['nombre_status']);?></td> 

<?php endwhile; ?>

          
      </table> 


        <br>
          
             
        </div>
    </div>


</header>  

 





 <header>

   <div class="perfil-cuadro posicion2">
        <div class="perfil perfil-cuadro">
        <div class="cabecera3"><p class="letras">PISO 3</p></div>
           

      <?php
$registros = mysqli_query($conexion,"SELECT * FROM pisos INNER JOIN  departamentos ON (pisos.id_pisos=departamentos.pisos_id) INNER JOIN agregar_pase ON (departamentos.id_departamento=agregar_pase.departamento_id) INNER JOIN estatus ON (agregar_pase.estatu_id=estatus.id_estatus) WHERE id_pisos=4 AND estatu_id=1") or die("Problemas en el select:".mysqli_error($conexion)); 

?>
 
      <table class="table table-bordered table-hover positable">
           
          <tr>
          <th>#</th>  
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cédula</th>
          <th>Oficina</th>
          <th>Estatus</th>
        
         

<?php $n=1; while ($reg=mysqli_fetch_array($registros)) :?>
      <tr>
          <th> <?php echo $n++; ?></th>
          <td> <?php echo ($reg['nombre_p']);?></td>   
          <td> <?php echo ($reg['apellido_p']);?></td> 
          <td> <?php echo ($reg['cedula_p']);?></td>
          <td> <?php echo ($reg['add_departamento']);?></td>
          <td> <?php echo ($reg['nombre_status']);?></td> 

<?php endwhile; ?>

          
      </table> 


       <br>
          
             
        </div>
    </div>


</header>  


<header >

    <div class="perfil-cuadro posicion3">
        <div class="perfil perfil-cuadro">
        <div class="cabecera4"><p class="letras">PLANTA BAJA</p></div>
           

<?php

$registros = mysqli_query($conexion,"SELECT * FROM pisos INNER JOIN  departamentos ON (pisos.id_pisos=departamentos.pisos_id) INNER JOIN agregar_pase ON (departamentos.id_departamento=agregar_pase.departamento_id) INNER JOIN estatus ON (agregar_pase.estatu_id=estatus.id_estatus) WHERE id_pisos=5 AND estatu_id=1") or die("Problemas en el select:".mysqli_error($conexion)); 

?>
 
      <table class="table table-bordered table-hover positable">
           
          <tr>
          <th>#</th>  
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cédula</th>
          <th>Oficina</th>
          <th>Estatus</th>
        
         

<?php $n=1; while ($reg=mysqli_fetch_array($registros)) :?>
      <tr>
          <th> <?php echo $n++; ?></th>
          <td> <?php echo ($reg['nombre_p']);?></td>   
          <td> <?php echo ($reg['apellido_p']);?></td> 
          <td> <?php echo ($reg['cedula_p']);?></td>
          <td> <?php echo ($reg['add_departamento']);?></td>
          <td> <?php echo ($reg['nombre_status']);?></td> 

<?php endwhile; ?>

          
      </table> 


       <br>    
             
        </div>
    </div>


</header>  
  
<?php include("footer.php");?>