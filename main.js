$(document).ready(function(){
	cargarProvincias();
});

$(function(){
	function cargarProvincias(){
		$.ajaj({
			type: 'GET',
			url: 'provincias.php',
			dataType: "json",
			success: cargarProvinciasPantalla()
		});
	}
 
	function cargarProvinciasPantalla(data){
		$('#select-provincias option').remove();
		var list = data == null ? [] : (data.provincias instanceof Array ? data.provincias : [data.provincias]);
		if (list.length < 1) {
		   alert("SIN NINGÚN RESULTADO EN LA BD");
		} else {
			alert("SIN NINGÚN RESULTADO EN LA BD2");
			$('#select-provincias').append('<option value="0">SELECCIONAR...</option>');
			$.each(list, function(index, categoria) {
				$('#select-provincias').append('<option value='+provincias.id+'>'+provincias.name+'</option>');
			});
			$('#select-provincias').focus();
		}
	 }
	
	
	//////////////////////////////////////////////////////////////////////////////////////////////
	var cargarCantones = function(){
		var selected = $('#select-provincias').val();
		$('#select-cantones').empty();
		$.getJSON("cantones.php?selected="+selected,null,function(data){
	 	   data.forEach(function(element,index){
		      $('#select-cantones').append('<option value="'+element+'">'+element+'</option>');
		   });
		});
	}
	$('#select-provincias').change(cargarCantones);
	cargarCantones();
	

});