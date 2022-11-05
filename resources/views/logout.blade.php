@extends('layouts.master')
@section('title', 'Admin')

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
		echo ('<p style="text-align: right;">Usuário logado: <i>' .Session::get('admin'). '</i></p>');
	?>

	<h1 class="text-center">Logout</h1>
	<center><hr></center>
	<div class="row form-group">
		<div class="col">
			<br>
			<p class="text-center" >Tem certeza que deseja sair?</p>
			<form method="post" action="">
				@csrf
				<br>
				<center><input class="btn btn-danger" type="submit" value="Sair"></center>
			</form>
		</div>
	</div>
</div>

<?php
} else {
	echo (	'<br><div class="alert alert-danger container" role="alert">
				Acesso negado.
			</div><br>');
}
?>

@stop
