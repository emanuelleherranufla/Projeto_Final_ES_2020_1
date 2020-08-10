<?php

include_once '..\persistence\Conexao.php';
include_once '..\persistence\CalcadosDAO.php';

$codigo= $_POST['codigo'];

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$calcadodao = new CalcadosDAO();
$res = $calcadodao->excluir_calcado($codigo, $conexao);

if($res===TRUE){
	header('location:../view/gerenciar-produtos.html');
}else{
	echo "Erro ao alterar: " . $conexao->error;
}

?>