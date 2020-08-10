<?php

class Roupas{
	private $nome;
	private $categoria;
	private $tipo;
	private $marca;
	private $quantidade;
	private $cor;
	private $tamP;
	private $tamM;
	private $tamG;
	private $tamGG;
	private $precoAntigo;
	private $precoNovo;
	private $descricao;

	function __construct($vnome, $vcategoria, $vtipo, $vmarca, $vquantidade, $vcor, $vtamP, $vtamM, $vtamG, $vtamGG, $vprecoAntigo, $vprecoNovo, $vdescricao){
		$this->nome = $vnome;
		$this->categoria = $vcategoria;
		$this->tipo = $vtipo;
		$this->marca = $vmarca;
		$this->quantidade = $vquantidade;
		$this->cor = $vcor;
		$this->tamP = $vtamP;
		$this->tamM = $vtamM;
		$this->tamG = $vtamG;
		$this->tamGG = $vtamGG;
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

	function getTamP(){
		return $this->tamP;
	}

	function getTamM(){
		return $this->tamM;
	}

	function getTamG(){
		return $this->tamG;
	}

	function getTamGG(){
		return $this->tamGG;
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