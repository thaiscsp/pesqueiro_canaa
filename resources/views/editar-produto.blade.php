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
	<h1 class="text-center">Editar Produto</h1>
	<center><hr></center>
	<div class="row form-group">
		<div class="col">
			<form method="post" action="" enctype="multipart/form-data">
				@csrf
				<?php
					$produtos = Produto::all();
					$uri = $_SERVER['REQUEST_URI'];
					$index = strpos($uri,"=");
					$id = substr($uri, $index+1);
					foreach($produtos as $produto) {
						if ($produto->id == $id) {
							$tipo = str_replace('_', ' ', $produto->tipo);
							$array = explode(' ', $tipo);
							if (count($array)==2) {
								$tipo = ucfirst($array[0]) .' - '. ucfirst($array[1]);
							} elseif (count($array)==3) {
								$tipo = ucfirst($array[0]) .' - '. ucfirst($array[1]) .' '. $array[2];
							}
							echo(	'<label for="nome">Nome</label>
										<input class="form-control" type="text" name="nome" required value="' .$produto->nome. '">
										<br>
										<div class="row">
											<div class="col">
												<label for="tipo-atual">Tipo atual</label>
												<input class="form-control" name="tipo-atual" type="text" value="' .$tipo. '" readonly>
												<small>Este tipo será mantido caso nenhum outro seja selecionado.</small>
											</div>');
				?>
					<div class="col">
						<label for="tipo">Novo tipo</label>
						<select class="form-control" onchange="" id="tipo" name="tipo">
							<option value="porcao">Porção</option>
							<option value="combo">Combo</option>
							<option value="prato_executivo">Prato Executivo</option>
							<option value="bebida">Bebida</option>
							<option value="suco">Suco</option>
						</select>
					</div>
				</div>
				<br>
				<div id="tipo-especifico"></div>
				<?php
						echo(	'<label for="preco">Preço</label>
									<div class="input-group">
        						<div class="input-group-prepend">
          						<div class="input-group-text">R$</div>
        						</div>
        						<input class="form-control" type="text" name="preco" required value="' .$produto->preco. '">
      						</div>
									<br>
									<label for="imagem-atual">Imagem atual</label>
									<br>
									<img name="imagem-atual" src="https://www.dropbox.com/s/' .$produto->caminho_imagem. '">
									<br>
									<small>Esta imagem será mantida caso nenhuma outra seja selecionada.</small>
									<br><br>');
				?>
				<label for="imagem">Nova imagem</label>
				<input class="form-control" type="file" accept=".jfif, .jpeg, .jpg, .png" name="imagem">
			<?php
						echo('<input type="hidden" name="id" value="' .$produto->id. '">'); 
					}
				}
			?>
				<br>
				<center><input class="btn btn-warning" name="operacao" type="submit" value="Editar"></center>
				<br>
				<center><button type="button" class="btn btn-primary"><a style="text-decoration: none;" href="https://pesqueiro-canaa.herokuapp.com/gerenciar-cardapio">Voltar</a></button></center>
				<br>
			</form>
		</div>
	</div>
	
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
