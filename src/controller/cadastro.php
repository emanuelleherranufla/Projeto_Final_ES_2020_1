<?php

include_once '..\persistence\Conexao.php';
include_once '..\model\Usuario.php';
include_once '..\persistence\UsuarioDAO.php';

$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$cpf= $_POST['cpf'];
$rua= $_POST['rua'];
$bairro= $_POST['bairro'];
$numero= $_POST['numero'];
$cidade= $_POST['cidade'];
$estado= $_POST['estado'];

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$u = new Usuario($cpf, $nome, $email, $senha, $cidade, $estado, $rua, $bairro, $numero);

$usuariodao = new UsuarioDAO();
$res = $usuariodao->verifica_email($email, $conexao);

if($res->num_rows > 0){
	echo "<script>alert('Usuário já cadastrado!')</script>";
}else{
	$usuariodao->salvar($u, $conexao);		
}

?>