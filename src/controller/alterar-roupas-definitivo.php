<?php
#controlador responsável por fazer a alteração de um produto no banco de dados

include_once '..\persistence\Conexao.php';
include_once '..\model\Roupas.php';
include_once '..\persistence\RoupasDAO.php';

$codigo= $_POST['codigo'];
$nome= $_POST['nome'];
$categoria= $_POST['categoria'];
$tipo= $_POST['tipo'];
$marca= $_POST['marca'];
$quantidade= $_POST['quantidade'];
$cor= $_POST['cor'];
$tamP= $_POST['tamP'];
$tamM= $_POST['tamM'];
$tamG= $_POST['tamG'];
$tamGG= $_POST['tamGG'];
$precoAntigo= $_POST['precoAntigo'];
$precoNovo= $_POST['precoNovo'];
$descricao= $_POST['descricao'];

$r = new Roupas($nome, $categoria, $tipo, $marca, $quantidade, $cor, $tamP, $tamM, $tamG, $tamGG, $precoAntigo, $precoNovo, $descricao);

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$roupadao = new RoupasDAO();
$res = $roupadao->alterar_roupa($codigo, $r, $conexao);

if($res===TRUE){
	header('location:../view/gerenciar-produtos.html');
}else{
	echo "Erro ao alterar: " . $conexao->error;
}

?>