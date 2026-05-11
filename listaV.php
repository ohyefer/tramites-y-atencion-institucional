<?php include ("jefeO.php");?>


<div class="content-wrapper">
      <div class="content">
        <div class="row">
  <div class="col-md-12">

		<center><h1>Reporte de Visitantes por Fecha</h1></center>
		<br>
		<br>

				<table class = "table table-bordered table-hover">
					<thead>
						<tr>

				<center><div class = "form-inline">
				<label>Desde:</label>
				<input type = "date1" class = "form-control" placeholder = "Inicio"  id ="date1"/>&nbsp;
				<label>Hasta</label>
				<input type = "date2" class = "form-control" placeholder = "Final"  id ="date2"/>&nbsp;





				<button type = "button" class = "btn btn-primary" id = "btn_search" onclick="load(2);"><span class = "fa fa-search"></span></button>&nbsp;

				<button type = "button" id = "reset" class = "btn btn-success"><span class = "fa fa-refresh"></span></button>&nbsp;

				<button  type="button" class="btn btn-danger"><span class="fa fa-download"></span><a target="_blank" href="javascript:reportePDF();" >&nbsp;Descargar PDF</a></button>

			
		</div></center>

		<br>
			<br>
			

							

						</tr>
					</thead>

<tbody id = "load_data">
						
			</tbody>
		
</table>


 <script src = "js/jquery-ui.js"></script>
 <script src ="js/buscar_fechaV.js"></script>


</div>
</div>
</div>
</div>



<?php include ("footer.php");?>