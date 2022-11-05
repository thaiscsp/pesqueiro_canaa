@extends('layouts.master')
@section('title', 'Admin')

@section('content')

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

		if (Session::get('admin')) {
			echo ('<p style="text-align: right;">Usuário logado: <i>' .Session::get('admin'). '</i></p>');
		}
	?>
	<h1 class="text-center">Login</h1>
	<center><hr></center>
	<div class="row form-group">
		<div class="col">
			<form method="post" action="" enctype="multipart/form-data">
				@csrf
				<label for="email">E-mail</label>
				<input class="form-control" type="email" name="email" required>
				<br>
				<label for="senha">Senha</label>
				<input class="form-control" type="password" name="senha" required>
				<br>
				<center><input class="btn btn-primary" type="submit" value="Entrar"></center>
			</form>
		</div>
	</div>
</div>

@stop