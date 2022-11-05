$(document).ready(function() {
	$('#tipo').change(function() {
		if ($('#tipo').val() == 'Bebida') {
			$('#tipo-especifico').html(
				'<label for="tipo_especifico">Tipo específico:&nbsp;</label>' +
				'<select class="form-control" name="tipo-especifico" required>' +
					'<option value="Cervejas 600ml">Cervejas 600ml</option>' +
					'<option value="Long Neck">Long Neck</option>' +
					'<option value="Cervejas Lata">Cervejas Lata</option>' +
					'<option value="Refrigerante 1L">Refrigerante 1L</option>' +
					'<option value="Refrigerante Lata">Refrigerante Lata</option>' +
					'<option value="Drinks">Drinks</option>' +
					'<option value="Opções de Frutas">Opções de Frutas</option>' +
					'<option value="Bebidas Quentes">Bebidas Quentes</option>' +
					'<option value="Combos">Combos</option>' +
				'</select>' +
				'<br>'
				);
		} else if($('#tipo').val() == 'Suco') {
			$('#tipo-especifico').html(
				'<label for="tipo_especifico">Tipo específico:&nbsp;</label>' +
				'<select class="form-control" name="tipo-especifico" required>' +
					'<option value="Copo 500ml">Copo 500ml</option>' +
					'<option value="1L">1L</option>' +
				'</select>' +
				'<br>'
				);
		} else {
			$('#tipo-especifico').html('');
		}
	});
});