<?php
#controlador responsável pela exclusão de um cliente no banco de dados

include_once '..\persistence\Conexao.php';
include_once '..\persistence\UsuarioDAO.php';

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$usuariodao = new UsuarioDAO();
$res = $usuariodao->excluir($conexao);

?>