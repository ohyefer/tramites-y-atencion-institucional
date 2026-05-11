$(function(){

	$.post( 'funcion_tipo_personal.php' ).done( function(respuesta)
	{
		$( '#tipo_personal' ).html( respuesta );
	});
	
	$('#tipo_personal').change(function()
	{
		var el_continente = $(this).val();
		
		$.post( 'funcion_tramite.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#tramites' ).html( respuesta );
		});
	});

})
