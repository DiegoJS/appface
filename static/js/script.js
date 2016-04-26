$(function(){
	$('#departamento').on('change',function(){
		$.ajax({
			url: '/home/ajaxProvincia',
			type: 'post',
			data: {
				'iddep': $(this).val()
			},
			success: function(data){
				$('#provincia').html(data);
				$('#distrito').html('<option></option>');
			}
		});
	});

	$('#provincia').on('change',function(){
		$.ajax({
			url: '/home/ajaxDistrito',
			type: 'post',
			data: {
				'idprov': $(this).val()
			},
			success: function(data){
				$('#distrito').html(data);
			}
		});
	});

	var palabras = 0;
	var oracion = '';

	$('#botones>button').on('click',function(){
		if(palabras < 5){
			oracion += $(this).html()+' ';
			$('#oracion').val(oracion);
			$(this).attr('disabled','disabled');
			palabras++;
		}
	});

	$('#clip').on('click',function(){
		$('#oracion').select();
		if(palabras < 3)
			alert('Selecciones al menos 3 palabras');
		else{
			$.ajax({
				url: '/home/ajaxClip',
				type: 'post',
				data: {
					idCliente: $('#idCli').val(),
					oracion: oracion
				},
				success: function(data){
					try{
						document.execCommand('copy');
					}
					catch(e){
						console.log('Error al copiar');
					}
					$('#clip').attr('disabled','disabled');
				}
			});
		}
	});
});