@extends('layouts.master')
@section('title', 'Gerenciar Produtos')

@section('content')

<?php
if (Session::get('admin')) {
?>

<!-- Navbar -->
<nav style="position: relative !important;" id="nav" class="text-center navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Pesqueiro Canaã</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php 
    	if (Session::get('admin')) {
    ?>
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
	<?php } ?>
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
	<h1 class="text-center">Gerenciar Admins</h1>
	<br>
	<div class="row form-group">
		<div class="col">
			<h3 class="text-center">Adicionar admin</h3>
			<center><hr></center>
			<form method="post" action="">
				@csrf
				<label for="email">E-mail</label>
				<input class="form-control" type="email" name="email" required>
				<br>
				<label for="senha">Senha</label>
				<input class="form-control" type="password" name="senha" required>
				<br>
				<center><input class="btn btn-success" name="operacao" type="submit" value="Adicionar"></center>
			</form>
		</div>
	</div>
	<br><br>
	<div class="row form-group">
		<div class="col">
			<h3 class="text-center">Remover admin</h3>
			<center><hr></center>
			<form method="post" action="">
				@csrf
				<label for="email">E-mail</label>
				<input class="form-control" type="email" name="email" required>
				<br>
				<label for="senha">Senha</label>
				<input class="form-control" type="password" name="senha" required>
				<br>
				<center><input class="btn btn-danger" name="operacao" type="submit" value="Remover"></center>
			</form>
		</div>
	</div>
	<br>
</div>

<?php
} else {
	echo (	'<div class="alert alert-danger container" role="alert">
				Acesso negado.
			</div><br>');
}
?>

@stop