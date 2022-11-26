@extends('layouts.master')
@section('title', 'Gerenciar Produtos')

@section('content')

<?php
use App\Models\Produto;

if (Session::get('admin')) {
?>

<!-- Navbar -->
<nav style="position: relative !important;" id="nav" class="text-center navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Pesqueiro Canaã</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/gerenciar-cardapio">Gerenciar cardápio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gerenciar-admins">Gerenciar admins</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
	<br>
	<?php
		if (Session::get('sucesso')) {
			echo ('	<div class="alert alert-success" role="alert">' .
						Session::get('sucesso') .
					'</div>');
		} elseif (Session::get('erro')) {
			echo ('	<div class="alert alert-danger" role="alert">' .
						Session::get('erro') .
					'</div>');
		}

		echo ('<p style="text-align: right;">Usuário logado: <i>' .Session::get('admin'). '</i></p>');
	?>
	<h1 class="text-center">Gerenciar Cardápio</h1>
	<br>
	<div class="row form-group">
		<div class="col">
			<h3 class="text-center">Adicionar produto</h3>
			<center><hr></center>
			<form method="post" action="" enctype="multipart/form-data">
				@csrf
				<label for="nome">Nome</label>
				<input class="form-control" type="text" name="nome" required>
				<br>
				<label for="tipo">Tipo</label>
				<select class="form-control" onchange="" id="tipo" name="tipo" required>
					<option value="porcao">Porção</option>
					<option value="combo">Combo</option>
					<option value="prato_executivo">Prato Executivo</option>
					<option value="bebida">Bebida</option>
					<option value="suco">Suco</option>
				</select>
				<br>
				<div id="tipo-especifico"></div>
				<label for="preco">Preço</label>
				<div class="input-group">
        			<div class="input-group-prepend">
          				<div class="input-group-text">R$</div>
        			</div>
        			<input class="form-control" type="text" name="preco" required>
      			</div>
				<br>
				<label for="imagem">Imagem</label>
				<input class="form-control" type="file" accept=".jfif, .jpeg, .jpg, .png" name="imagem" required>
				<br>
				<center><input class="btn btn-success" name="operacao" type="submit" value="Adicionar"></center>
			</form>
		</div>
	</div>
	<br><br>
	<div class="row form-group">
		<div class="col">
			<h3 class="text-center">Editar/Remover produto</h3>
			<center><hr></center>
			<table class="text-center table table-hover">
  			<thead>
    			<tr>
      			<th scope="col">Nome</th>
      			<th scope="col">Preço</th>
      			<th scope="col"></th>
      			<th scope="col"></th>
    			</tr>
  			</thead>
  			<tbody>
  			<?php
					$produtos = Produto::all();
					foreach ($produtos as $produto) {
						echo('	<tr>
      								<td scope="row">' .$produto->nome. '</td>
      								<td>R$ ' .$produto->preco. '</td>
      								<td>
      									<form method="post" action="">');
      	?>
      										@csrf
      	<?php
      			echo('					<input type="hidden" name="id" value="' .$produto->id. '">
      											<input class="btn btn-warning" value="Editar" name="operacao" type="submit">
      									</form>
      								</td>
      								<td>
      									<form method="post" action="">');
      	?>
      										@csrf
      	<?php
      			echo('					<input type="hidden" name="id" value="' .$produto->id. '">
      											<input class="btn btn-danger" value="Remover" name="operacao" type="submit">
      									</form>
      								</td>
    								</tr>');
					}
				?>
			</tbody>
		</table>
		</div>
	</div>
	<br>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://pesqueiro-canaa.herokuapp.com/js/gerenciar_cardapio.js"></script>
</div>

<?php
} else {
	echo (	'<br><div class="alert alert-danger container" role="alert">
				Acesso negado.
			</div><br>');
}
?>

@stop
