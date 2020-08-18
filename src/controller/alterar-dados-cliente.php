<?php

include_once '..\persistence\Conexao.php';
include_once '..\persistence\UsuarioDAO.php';

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$usuariodao = new UsuarioDAO();
$res = $usuariodao->consultar_usuario($conexao);

if($res->num_rows > 0){
	$registro = $res->fetch_assoc();
}

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
					<a href='gerenciar-produtos.html'>Gerenciar produtos</a>
				</div>
			</div>
			<nav class='menu'>
				<ul>
					<li><a href=''>Feminino</a></li>
					<li><a href=''>Masculino</a></li>
					<li><a href=''>Calçados</a></li>
					<li><a href=''>Acessórios</a></li>
				</ul>
			</nav>
		</div>
	</section><!-- menu -->

	<div class='titulo-pagina'>
		<h1>Alterar dados pessoais</h1>
	</div>

	<section class='card-cadastro'>
		<div class='container' style='min-height: 630px;'>
			<p>Para alterar seus dados basta inserir nos campos e clicar no botão Alterar!</p>

			<form action='..\controller\alterar-dados-cliente-definitivo.php' method='POST'>
				<div class='inputs1'>
					<label for='nome'>Nome completo</label>
					<input type='text' name='nome' value='".$registro['Nome']."'>
					<label for='email'>E-mail</label>
					<input type='e-mail' name='email' value='".$registro['Email']."'>
					<label for='senha'>Senha</label>
					<input type='password' name='senha' value='".$registro['Senha']."'>
					<label for='cpf'>CPF</label>
					<input type='text' name='cpf' value='".$registro['Cpf']."'>				
				</div>

				<div class='inputs2'>
					<label for='rua'>Rua</label>
					<input type='text' name='rua' value='".$registro['Rua']."'>
					<label for='bairro'>Bairro</label>
					<input type='text' name='bairro' value='".$registro['Bairro']."'>
					<label for='numero'>Número</label>
					<input type='number' name='numero' value='".$registro['Num']."'>				
				</div>

				<div class='inputs3'>
					<label for='cidade'>Cidade</label>
					<input type='text' name='cidade' value='".$registro['Cidade']."'>
					<label for='estado'>Estado</label>
					<input list='estados' name='estado' id='estado' value='".$registro['Estado']."'>
						<datalist id='estados'>
						  	<option value='MG'>
						    <option value='SP'>
						    <option value='RJ'>
						    <option value='ES'>
						</datalist>				
				</div>

				<input type='submit' name='alterar' value='Alterar'>	
				<a class='link2' href='../controller/excluir-cliente.php'>Excluir Conta</a>	
				<a class='link3' href='../controller/logout.php'>Sair da conta</a>		
			</form>

		</div>

		<div class='clear'></div>
	</section><!-- form cadastro -->

	<footer style='background-color: #181818; padding: 30px 2%;'>
		<h4 style='text-align: center; font-family: font-family: 'Maven Pro', sans-serif; color: #545454;'>designed by Emanuelle Herran</h4>
	</footer>
</body>
</html>"

?>