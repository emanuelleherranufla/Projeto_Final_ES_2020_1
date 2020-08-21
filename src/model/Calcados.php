<?php
#classe Calcados com os metodos e atributos necessários

class Calcados{
	private $nome;
	private $categoria;
	private $tipo;
	private $marca;
	private $quantidade;
	private $cor;
	private $tam35;
	private $tam36;
	private $tam37;
	private $tam38;
	private $tam39;
	private $tam40;
	private $tam41;
	private $tam42;
	private $tam43;
	private $tam44;
	private $precoAntigo;
	private $precoNovo;
	private $descricao;

	function __construct($vnome, $vcategoria, $vtipo, $vmarca, $vquantidade, $vcor, $vtam35, $vtam36, $vtam37, $vtam38, $vtam39, $vtam40, $vtam41, $vtam42, $vtam43, $vtam44, $vprecoAntigo, $vprecoNovo, $vdescricao){
		$this->nome = $vnome;
		$this->categoria = $vcategoria;
		$this->tipo = $vtipo;
		$this->marca = $vmarca;
		$this->quantidade = $vquantidade;
		$this->cor = $vcor;
		$this->tam35 = $vtam35;
		$this->tam36 = $vtam36;
		$this->tam37 = $vtam37;
		$this->tam38 = $vtam38;
		$this->tam39 = $vtam39;
		$this->tam40 = $vtam40;
		$this->tam41 = $vtam41;
		$this->tam42 = $vtam42;
		$this->tam43 = $vtam43;
		$this->tam44 = $vtam44;
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

	function getTam35(){
		return $this->tam35;
	}

	function getTam36(){
		return $this->tam36;
	}

	function getTam37(){
		return $this->tam37;
	}

	function getTam38(){
		return $this->tam38;
	}

	function getTam39(){
		return $this->tam39;
	}

	function getTam40(){
		return $this->tam40;
	}

	function getTam41(){
		return $this->tam41;
	}

	function getTam42(){
		return $this->tam42;
	}

	function getTam43(){
		return $this->tam43;
	}

	function getTam44(){
		return $this->tam44;
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