<?php

include_once '..\persistence\Conexao.php';
include_once '..\model\UsuarioLogin.php';
include_once '..\persistence\UsuarioDAO.php';

$email= $_POST['email'];
$senha= $_POST['senha'];

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$u = new UsuarioLogin($email, $senha);

$usuariodao = new UsuarioDAO();
$res = $usuariodao->logar($email, $senha, $conexao);

?>