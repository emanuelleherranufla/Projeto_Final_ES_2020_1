<?php
#controlador responsável por fazer a alteração das informações do usuário no banco de dados

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

$u = new Usuario($cpf, $nome, $email, $senha, $cidade, $estado, $rua, $bairro, $numero);

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$usuariodao = new UsuarioDAO();
$res = $usuariodao->alterar($u, $conexao);

if($res===TRUE){
	header('location:../view/index-login.html');
}else{
	echo "Erro ao alterar: " . $conexao->error;
}

?>