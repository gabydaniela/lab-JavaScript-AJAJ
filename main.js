const p = document.getElementById('select-provincias');
const c = document.getElementById('select-cantones');

const clearSelect = () => {
	const options = subasunto.querySelectorAll('option:not([value=""])');
	options.forEach(option => c.removeChild(option));
  };
  
  const fillSelect = (p, json) => {
	json.forEach(item => {
	  const option = document.createElement('option');
	  option.value = item.id;
	  option.text = item.nombre;
	  option.innerText = item[item.nombre];
	  c.appendChild(option);
	});
	c.disabled = false;
  };
  
  p.addEventListener('change', () => {
	clearSelect();
	c.disabled = true;
	const value = p.value;
	if (value) {
		fetch('cantones.php', { method: 'POST', body: JSON.stringify({id: id}) })
              .then( response => response.json() )
              .then( json => fillSelect(value, json));
	}
  });

$(function(){
	function cargarProvincias(){
		var data="";
		data= '<option value="0">Seleccione...</option>';
		data= data + '<option value="2">TRANSPORTES MARVISUR</option>';
		$("#select-provincias").html(data);
	}
 
	/*function cargarProvinciasPantalla(data){
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
	cargarCantones();*/
	

});