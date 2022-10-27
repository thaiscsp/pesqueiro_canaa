@extends('layouts.master')
@section('title', 'Gerenciar Produtos')

@section('content')
<br>
<div class="container">
	<form method="post" action="" enctype="multipart/form-data">
		@csrf
		<label for="nome">Nome: </label>
		<input type="text" name="nome" required>
		<br><br>

		<label for="tipo">Tipo: </label>
		<select onchange="" id="tipo" name="tipo" required>
			<option value="Porção">Porção</option>
			<option value="Combo">Combo</option>
			<option value="Prato Executivo">Prato Executivo</option>
			<option value="Bebida">Bebida</option>
			<option value="Suco">Suco</option>
		</select>
		<br><br>

		<div id="tipo-especifico"></div>

		<label for="preco">Preço: </label>
		<input type="text" name="preco" required>
		<br><br>

		<label for="imagem">Imagem: </label>
		<input type="file" accept=".jpeg, .jpg, .png" name="imagem" required>
		<br><br>

		<input type="submit" value="Adicionar">
	</form>
	<br>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<script>
		$(document).ready(function() {
			$('#tipo').change(function() {
				if ($('#tipo').val() == 'Bebida') {
					$('#tipo-especifico').html(
						'<select name="tipo-especifico" required>' +
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
						'<br><br>'
						);
				} else if($('#tipo').val() == 'Suco') {
					$('#tipo-especifico').html(
						'<select name="tipo-especifico" required>' +
							'<option value="Copo 500ml">Copo 500ml</option>' +
							'<option value="1L">1L</option>' +
						'</select>' +
						'<br><br>'
						);
				} else {
					$('#tipo-especifico').html('');
				}
			});
		});
	</script>
</div>

@stop