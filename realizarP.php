<?php include("pase.php"); ?>

<div class="content-wrapper">
      <div class="content">
        <div class="row">
  <div class="col-md-12">

    <br>
        <br>


        <form class="form-horizontal" role="form" id="datos_cotizacion">
        
            <div class="input-group">
                <input type="number" name="table_search" ng-model=searchText ng-chenage="searchDB()" class="form-control" input-sm ng-pristine ng-valid id="q" placeholder="Ingresar Cédula de Identidad" onkeyup='load(1);'>
                 <span type="button" class="input-group-addon" onclick='load(1);'>
                  <i class="fa fa-search" ></i></span>
              </div>
        <br>
        <br>
        <br>
    

      </form>


        <div id="resultados"></div>
        <div class='outer_div'></div>
    </div>  
    
    </div>
  </div>
</div>

<script src="js/VentanaCentrada.js"></script>
<script src="js/buscarU.js"></script>
  
  <?php include ("footer.php");?> 