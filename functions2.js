$(function(){

	$.post( 'funcion_oficina.php' ).done( function(respuesta)
	{
		$( '#detalles_tramites' ).html( respuesta );
	});
	
	$('#detalles_tramites').change(function()
	{
	
		});
	});
