<?php
#controlador responsável por fazer a busca de um determinado produto no banco de dados

include_once '..\persistence\Conexao.php';
include_once '..\persistence\AcessoriosDAO.php';

$codigo= $_POST['codigo'];

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$acessoriodao = new AcessoriosDAO();
$res = $acessoriodao->consultar_codigo($codigo, $conexao);

if($res->num_rows > 0){
	$registro = $res->fetch_assoc();

	echo "<!DOCTYPE html>
	<html>
	<head>
		<title>Lilith Store</title>
		<link rel='stylesheet' type='text/css' href='../view/css/style.css'>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0,maximum-scale=1.0'>
		<link href='https://fonts.googleapis.com/css2?family=Martel&family=Maven+Pro:wght@500&display=swap' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css2?family=K2D&display=swap' rel='stylesheet'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
	</head>
	<body>
		<header>
			<div class='container'>
				<div class='logo'></div><!-- logo -->
				<div class='container2'>
					<div class='input-busca'>
						<input type='text' name='barra-pesquisa' placeholder='O que deseja encontrar?''>
					</div><!-- barra de pesquisa -->
					<div class='btn-pesquisar'>
						<input type='button' name='pesquisar'>
					</div><!-- botão pesquisar -->
					<div class='carrinho'>
						<input type='button' name='carrinho'>	
					</div><!-- carrinho de compra -->
					<div class='usuario'>
						<input type='button' name='usuario'>	
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
			<h1>Visualizando informações do acessório</h1>
		</div>

		<section class='card-cadastro-roupa'>
			<div class='container' style='min-height: 600px;'>
				<form method='POST' action='' enctype='multipart/form-data' autocomplete='off'>
					<div class='container1-roupa'>

					<div class='inputs-card-roupas1'>
						<label for='codigo'>Código</label>
						<input type='number' name='codigo' value='".$registro['Codigo']."'>
					</div>

					<div class='inputs-card-roupas2'>
						<label for='nome-produto'>Nome</label>
						<input type='text' name='nome' value='".$registro['Nome']."' disabled>					
					</div>

					<div class='inputs-card-roupas3'>
						<label for='categoria'>Categoria</label>
						<input list='categorias' name='categoria' id='categoria' value='".$registro['Categoria']."' disabled>
							<datalist id='categorias'>
							  	<option value='Choker'>
							    <option value='Brincos'>
							    <option value='Pulseiras'>
							    <option value='Bolsas'>
							    <option value='Cintos'>
							</datalist>	
						<label for='tipo'>Tipo</label>
						<input list='tipos' name='tipo' id='tipo' value='".$registro['Tipo']."' disabled>
							<datalist id='tipos'>
							  	<option value='Feminino'>
							    <option value='Masculino'>
							</datalist>						
					</div>

					<div class='inputs-card-roupas4'>
						<label for='marca'>Marca</label>
						<input type='text' name='marca' value='".$registro['Marca']."' disabled>
						<label for='quantidade'>Quantidade</label>
						<input type='number' name='quantidade' value='".$registro['Quantidade']."' disabled>
						<label for='cor'>Cor</label>
						<input type='text' name='cor' value='".$registro['Cor']."' disabled>					
					</div>					
					</div>

					<div class='inputs-card-roupas5'>
						<input id='editarFoto' type='file' accept='image/*' style='display: none;' name='imagem' onchange='previewImagem()'>
						<img style='width: 200px; height: 260px;'>
						<label for='editarFoto' class='btn-img'>Editar foto</label>
					</div>

					<div class='inputs-card-roupas7'>
						<label for='precoAntigo'>Preço(Antigo)</label>
						<input name='precoAntigo' formControlName='sGPTypeDeliveryId' type='text' class='form-control' value='".$registro['PrecoAntigo']."' disabled>
						<label for='precoNovo'>Preço(Atual)</label>
						<input name='precoNovo' formControlName='sGPTypeDeliveryId' type='text' class='form-control' value='".$registro['PrecoAtual']."' disabled><br>
						<label for='descricao'>Descrição</label><br>
						<input type='text' id='descricao' name='descricao' value='".$registro['Descricao']."' disabled>
					</div>	
				</form>
			</div>
		</section><!-- formulario de cadastro roupa -->

		<script type='text/javascript'>
			function previewImagem(){
				var imagem = document.querySelector('input[name=imagem]').files[0];
				var preview = document.querySelector('img');

				var reader = new FileReader();

				reader.onloadend = function() {
					preview.src = reader.result;
				}

				if(imagem){
					reader.readAsDataURL(imagem);
				}else{
					preview.src = '';
				}
			}
		</script>
	</body>
	</html>";
}else{
	echo "Código não encontrado, volte e tente novamente usando um código válido!";
}



?>