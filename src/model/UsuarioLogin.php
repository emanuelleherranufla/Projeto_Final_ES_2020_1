<?php

class UsuarioLogin{
	private $email;
	private $senha;

	function __construct($vemail, $vsenha){
		$this->email = $vemail;
		$this->senha = $vsenha;
	}

	function getEmail(){
		return $this->email;
	}

	function getSenha(){
		return $this->senha;
	}
}

?>