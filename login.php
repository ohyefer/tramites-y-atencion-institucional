<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Atención Ciudadano | Login</title>

  <meta name="description" content=" background image slideshow" />
  <meta name="keywords" content="slideshow, img, content" />
  <meta name="author" content="Codrops" />

      <link rel="stylesheet" type="text/css" href="css/codrops.css" media="all">
     <link rel="stylesheet" type="text/css" href="css/slideshow.css" media="all">
     <link rel="stylesheet" type="text/css" href="css/login.css" media="all">
  
</head>


<body id="page">

<ul class="cb-slideshow">

<li><span>1</span><div></div></li>
<li><span>2</span><div></div></li>
<li><span>3</span><div></div></li>
<li><span>4</span><div></div></li>
<li><span>5</span><div></div></li>
<li><span>6</span><div></div></li>
<li><span>7</span><div></div></li>

        </ul>
        <div class="container">
        <div class="codrops-top">
        <div class="clr"></div>
            </div>
           

<header>

 <div class="perfil-cuadro">
        <div class="perfil perfil-cuadro">
            <img id="" class="perfil-imagenes" src="img/usuario.jpg"/>



<form method="POST" accept-charset="utf-8" action="modal/validarLogin.php" name="loginform" autocomplete="off" role="form" class="form-signin">


<?php
  if(!empty($_GET)){
    extract($_GET);
    switch ($msj) {
      case 'sesion0':
        echo "<div class='Error'> <center> <b>Error!</b> Usuario y/o contraseña no coinciden. </center> <br></div>";
        

        header("refresh: 5 , login.php");


        break;

    }
  }
?>
        
                
                <input  class="form-control" placeholder="&#9000; Usuario" name="username" type="text" required>


                <input class="form-control" placeholder="&#128273; Contraseña" name="pass" type="password" required>

                    <input id="hidden" class="btn btn-lg btn-success btn-block btn-signin" type="submit" name="submit" value="Iniciar Sesión" />



            </form>
</header>            
        </div>
    </div>
  
  </body>
</html>
