<?php
#controlador responsável por fazer a alteração de um produto no banco de dados

include_once '..\persistence\Conexao.php';
include_once '..\model\Acessorios.php';
include_once '..\persistence\AcessoriosDAO.php';

$codigo= $_POST['codigo'];
$nome= $_POST['nome'];
$categoria= $_POST['categoria'];
$tipo= $_POST['tipo'];
$marca= $_POST['marca'];
$quantidade= $_POST['quantidade'];
$cor= $_POST['cor'];
$precoAntigo= $_POST['precoAntigo'];
$precoNovo= $_POST['precoNovo'];
$descricao= $_POST['descricao'];

$a = new Acessorios($nome, $categoria, $tipo, $marca, $quantidade, $cor, $precoAntigo, $precoNovo, $descricao);

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$acessoriodao = new AcessoriosDAO();
$res = $acessoriodao->alterar_acessorio($codigo, $a, $conexao);

if($res===TRUE){
	header('location:../view/gerenciar-produtos.html');
}else{
	echo "Erro ao alterar: " . $conexao->error;
}

?>