<?php

include_once '..\persistence\Conexao.php';
include_once '..\persistence\RoupasDAO.php';

$codigo= $_POST['codigo'];

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$roupadao = new RoupasDAO();
$res = $roupadao->excluir_roupa($codigo, $conexao);

if($res===TRUE){
	header('location:../view/gerenciar-produtos.html');
}else{
	echo "Erro ao alterar: " . $conexao->error;
}

?>