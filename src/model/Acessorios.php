<?php

class Acessorios{
	private $nome;
	private $categoria;
	private $tipo;
	private $marca;
	private $quantidade;
	private $cor;
	private $precoAntigo;
	private $precoNovo;
	private $descricao;

	function __construct($vnome, $vcategoria, $vtipo, $vmarca, $vquantidade, $vcor, $vprecoAntigo, $vprecoNovo, $vdescricao){
		$this->nome = $vnome;
		$this->categoria = $vcategoria;
		$this->tipo = $vtipo;
		$this->marca = $vmarca;
		$this->quantidade = $vquantidade;
		$this->cor = $vcor;
		$this->precoAntigo = $vprecoAntigo;
		$this->precoNovo = $vprecoNovo;
		$this->descricao = $vdescricao;	
	}

	function getNome(){
		return $this->nome;
	}

	function getCategoria(){
		return $this->categoria;
	}

	function getTipo(){
		return $this->tipo;
	}

	function getMarca(){
		return $this->marca;
	}

	function getQuantidade(){
		return $this->quantidade;
	}

	function getCor(){
		return $this->cor;
	}

	function getPrecoAntigo(){
		return $this->precoAntigo;
	}

	function getPrecoNovo(){
		return $this->precoNovo;
	}

	function getDescricao(){
		return $this->descricao;
	}

}

?>