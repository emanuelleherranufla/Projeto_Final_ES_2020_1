<?php
#controlador responsável por exibir todas as roupas com tipo Feminino

include_once '..\persistence\Conexao.php';
include_once '..\persistence\RoupasDAO.php';

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$roupasdao = new RoupasDAO();
$res = $roupasdao->consultar_roupas_feminino($conexao);

if($res->num_rows > 0){
	echo "<!DOCTYPE html>
	<html>
	<head>
		<title>Lilith Store</title>
		<link rel='stylesheet' type='text/css' href='../view/css/style.css'>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0,maximum-scale=1.0'>
		<link href='https://fonts.googleapis.com/css2?family=Martel&family=Maven+Pro:wght@500&display=swap' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css2?family=K2D&display=swap' rel='stylesheet'>
	</head>
	<body>
		<header>
			<div class='container'>
				<div class='logo'></div><!-- logo -->
				<div class='container2'>
					<div class='input-busca'>
						<input type='text' name='barra-pesquisa' placeholder='O que deseja encontrar?'>
					</div><!-- barra de pesquisa -->
					<div class='btn-pesquisar'>
						<input type='button' name='pesquisar'>
					</div><!-- botão pesquisar -->
					<div class='carrinho'>
						<input type='button' name='carrinho'>	
					</div><!-- carrinho de compra -->
					<div class='usuario'>
						<a href='../controller/alterar-dados-cliente.php'></a>	
					</div><!-- menu usuario -->
					<div class='nome-usuario'>
						<p>Olá, </p>
						<p>seja bem-vindo!</p>
					</div>
				</div>

				<div class='clear'></div>
			</div><!-- container -->
		</header><!-- cabeçalho -->

		<section class='menu-principal'>
			<div class='container-menu'>
				<div class='menu-hamburguer'>
					<button class='menu-button'></button>
					<div class='dropdown-menu'>
						<p>Operações administrativas</p>
						<a href='../view/gerenciar-produtos.html'>Gerenciar produtos</a>
					</div>
				</div>
				<nav class='menu'>
					<ul>
						<li><a href='feminino-produtos.php'>Feminino</a></li>
						<li><a href='masculino-produtos.php'>Masculino</a></li>
						<li><a href='calcado-produtos.php'>Calçados</a></li>
						<li><a href='acessorio-produtos.php'>Acessórios</a></li>
					</ul>
				</nav>
			</div>
		</section><!-- menu -->

		<div class='titulo-pagina'>
			<h1>Feminino</h1>
		</div>

		<section class='produtos'>
			<div class='container'>";

	while($registro = $res->fetch_assoc()){
	    echo "
				<div class='produto-destaque' style='max-height: 500px;'>
					<form method='POST' action='exibe-produto.php'>
						<div class='roupa-img'></div>
						<h3>Código ".$registro['Codigo']."</h3>
						<h2>".$registro['Nome']."</h2>
						<h4>Por: </h4>
						<h3>R$".$registro['PrecoAtual']."</h3>
						<input type='submit' name='comprar' value='Comprar!'>
					</form>
				</div><!-- produto destaque -->";
	}

	echo "
			<div class='clear'></div>
		</section><!-- seção produtos -->
		<footer style='background-color: #181818; padding: 30px 2%; margin-top: 122px;'>
			<h4 style='text-align: center; font-family: font-family: 'Maven Pro', sans-serif; color: #545454;'>designed by Emanuelle Herran</h4>
		</footer>
	</body>
	</html>";
}

?>