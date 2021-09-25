$(function(){
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