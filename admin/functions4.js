$(function(){

	$.post( 'funcion_departamento.php' ).done( function(respuesta)
	{
		$( '#departamentos' ).html( respuesta );
	});
	
	$('#departamentos').change(function()
	{
	
		});
	});
