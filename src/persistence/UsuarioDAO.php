<?php

class UsuarioDAO{
	function __construct(){}

	function verifica_email($email, $conn){
		$sql = "SELECT ID_usuario FROM usuario WHERE Email ='" .$email . "'";
		$res = $conn->query($sql);
		return $res;
	}

	function salvar($usuario, $conn){
		$sql = "INSERT INTO usuario(Cpf, Nome, Email, Senha, Cidade, Estado, Rua, Bairro, Num) VALUES ('" .
			$usuario->getCpf() . "','" .
			$usuario->getNome() . "','" .
			$usuario->getEmail() . "','" .
			$usuario->getSenha() . "','" .
			$usuario->getCidade() . "','" .
			$usuario->getEstado() . "','" .
			$usuario->getRua() . "','" .
			$usuario->getBairro() . "'," .
			$usuario->getNumero() . ")";

		if($conn->query($sql) == TRUE){
			header('location:../view/login.html');
		}else{
			echo "erro no cadastro: <br>".$conn->error;
		}
	}

	function logar($email, $senha, $conn){
		$sql = "SELECT Senha FROM usuario WHERE Email ='" .$email . "'";
		$res = $conn->query($sql);
		$senhaRetorno = mysqli_fetch_array($res);

		session_start();

		if($senhaRetorno[0] == $senha and $senha != ""){
			$_SESSION["email"] = $email;
			header('location:../view/index-login.html');
		}else{
			echo "Usuário ou senha incorretos, volte e tente novamente!";
		}
	}
}

?>