$(function(){

	$.post( 'funcion_departamento.php' ).done( function(respuesta)
	{
		$( '#departamentos' ).html( respuesta );
	});

		$('#departamentos').change(function()
		{

			var el_continente1 = $(this).val();
		
		$.post( 'funcion_login.php', { continente: el_continente1} ).done( function( respuesta )
		{
			$( '#login' ).html( respuesta );
		});



});
});