<?php
session_start();
if($_SESSION['ok']=="ok")
{

?>

<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Atención Ciudadano  | Principal</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <meta name="description" content=" background image slideshow" />
    <meta name="keywords" content="slideshow, img, content" />
    <meta name="author" content="Codrops" />
   
    <link rel="stylesheet" type="text/css" href="css/codrops.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/slideshow.css" media="all">






    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css"/>
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/Admin.css" rel="stylesheet" type="text/css" />
    <link href="css/skin-red-light.css" rel="stylesheet" type="text/css" />

 
       <script type="text/javascript" src="js/VentanaCentrada.js"></script>
  <script type="text/javascript" src="js/buscar.js"></script> 
      <script src="js/jquery-2.1.4.min.js"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <script src="js/app.min.js" type="text/javascript"></script>
    
  </head>

  <body class="skin-red-light sidebar-mini">
    <div class="wrapper">
            <header class="main-header">
        <a href="principal_pase.php" class="logo">
          <span class="logo-mini"><b>Z</b><b>E</b></span>
          <span><b>Zona Educativa</b></span>
        </a>

<nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          </a>

        
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <li class="dropdown user user-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                  <span class=""><?php echo $_SESSION['rol']; ?>
                   <b class="caret"></b> </span>
<br>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                   <p> Zona Educativa <br> Atención al Ciudadano
                   <small>Usuario: <?php echo $_SESSION['nomusuario']; ?>
                    <br>
                    <?php echo $_SESSION['piso']; ?>
                  </small> 
                    
                   <small>Departamento: <?php echo $_SESSION['dp']; ?> </small> 
                   </p>

                    </li>

                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="modal/cerrar.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
 
            </ul>
          </div>
        </nav>
      </header>

      <aside class="main-sidebar">

        <section class="sidebar" style="height:auto;">
           
           <ul class="sidebar-menu">
         
            <li class="header">CONTROL Y SEGURIDAD</li>

            <li><a href="#"><i class='fa fa-check'></i> <span>Registrado</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="realizarP.php"><i class=""></i> Asignar pase</a></li>
                <li><a href="registrado.php"><i class=""></i> Asignados</a></li>
                </ul>
                </li>

            
        </section>
</aside>


 <?php
}
else
{
  header("location: index.php");
}
?>