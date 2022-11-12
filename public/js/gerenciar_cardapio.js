$(document).ready(function() {
	$('#tipo').change(function() {
		if ($('#tipo').val() == 'bebida') {
			$('#tipo-especifico').html(
				'<label for="tipo_especifico">Tipo específico</label>' +
				'<select class="form-control" name="tipo-especifico" required>' +
					'<option value="cerveja_600ml">Cerveja 600ml</option>' +
					'<option value="long_neck">Long Neck</option>' +
					'<option value="cerveja_lata">Cerveja Lata</option>' +
					'<option value="refrigerante_1L">Refrigerante 1L</option>' +
					'<option value="refrigerante_lata">Refrigerante Lata</option>' +
					'<option value="drink">Drinks</option>' +
					'<option value="opcao_de_fruta">Opção de Frutas</option>' +
					'<option value="bebida_quente">Bebida Quente</option>' +
					'<option value="combo">Combo</option>' +
				'</select>' +
				'<br>'
				);
		} else if($('#tipo').val() == 'suco') {
			$('#tipo-especifico').html(
				'<label for="tipo_especifico">Tipo específico</label>' +
				'<select class="form-control" name="tipo-especifico" required>' +
					'<option value="copo_500ml">Copo 500ml</option>' +
					'<option value="1L">1L</option>' +
				'</select>' +
				'<br>'
				);
		} else {
			$('#tipo-especifico').html('');
		}
	});
});