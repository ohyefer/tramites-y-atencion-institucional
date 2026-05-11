$(function(){

	$.post( 'funcion_tramite.php' ).done( function(respuesta)
	{
		$( '#tramites' ).html( respuesta );
	});
	
	$('#tramites').change(function()
	{
		var el_bravo = $(this).val();
		
		$.post( 'funcion_requisitos.php', { bravo: el_bravo} ).done( function( respuesta )
		{
			$( '#requisitos' ).html( respuesta );
		});
	});

})
