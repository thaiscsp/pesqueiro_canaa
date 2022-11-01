<?php

/*use App\Models\Produto;

if (!empty($_GET['nome_arquivo'])) {
	$produtos = Produto::all();
	foreach ($produtos as $produto) {
		if ($produto->nome_arquivo == $_GET['nome_arquivo']) {
			Header( "Content-type: image/jpg");
			echo $produto->imagem;
		}
	}
}*/

$con = new mysqli("localhost","pesqueiro","8756neb&%&$&od934hn6$&*$(357","pesqueiro_canaa");

$nome_arquivo = $_GET['nome_arquivo'];
$query = "SELECT imagem FROM produtos WHERE nome_arquivo = '" . $nome_arquivo ."';";
$resultado = mysqli_query($con, $query);
$imagem = mysqli_fetch_object($resultado);
Header( "Content-type: image/gif");
echo $imagem->imagem;

?>