<?php
session_start();
if($_SESSION['ok']=="ok")
{

?>



<html>
  <head>
    <meta charset="UTF-8">
    <title>Control</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" type="text/css" href="css/stablavista.css" media="all">
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


        <a href="principal_jefeO.php" class="btn btn-primary btn-lg">Regresar</a>
    
       <center><label><?php echo $_SESSION['piso']; ?>, <?php echo $_SESSION['dp']; ?></label></center>

      <br>
      <br>
      <br>
 




   
<header>

 <table class="table table-hover" style="border-color: #337ab7;">

          <tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
      

     
          
      
          <th>#</th>  
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Cédula</th>
    
     
         
      </table> 


        <br>
          
             
    


</header>  

 

 
  
<?php include ("footer.php");?> 
 <?php
}