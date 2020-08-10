<?php

class Usuario{
	private $cpf;
	private $nome;
	private $email;
	private $senha;
	private $cidade;
	private $estado;
	private $rua;
	private $bairro;
	private $numero;

	function __construct($vcpf, $vnome, $vemail, $vsenha, $vcidade, $vestado, $vrua, $vbairro, $vnumero){
		$this->cpf = $vcpf;
		$this->nome = $vnome;
		$this->email = $vemail;
		$this->senha = $vsenha;
		$this->cidade = $vcidade;
		$this->estado = $vestado;
		$this->rua = $vrua;
		$this->bairro = $vbairro;
		$this->numero = $vnumero;
	}

	function getCpf(){
		return $this->cpf;
	}

	function getNome(){
		return $this->nome;
	}

	function getEmail(){
		return $this->email;
	}

	function getSenha(){
		return $this->senha;
	}

	function getCidade(){
		return $this->cidade;
	}

	function getEstado(){
		return $this->estado;
	}

	function getRua(){
		return $this->rua;
	}

	function getBairro(){
		return $this->bairro;
	}

	function getNumero(){
		return $this->numero;
	}
}

?>