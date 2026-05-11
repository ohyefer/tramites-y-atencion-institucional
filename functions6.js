$(function(){

	$.post( 'funcion_de_pisos.php' ).done( function(respuesta)
	{
		$( '#pisos' ).html( respuesta );
	});
	
	$('#pisos').change(function()
	{

		var el_continente = $(this).val();
		
		$.post( 'funcion_de_departamentos.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#departamentos' ).html( respuesta );
		});
	});
});


