<?php

class AcessoriosDAO{
	function __construct(){}

	function salvar($acessorio, $conn){
		$sql = "INSERT INTO acessorio(Nome, Categoria, Tipo, Marca, Quantidade, Cor, PrecoAntigo, PrecoAtual, Descricao) VALUES ('" .
			$acessorio->getNome() . "','" .
			$acessorio->getCategoria() . "','" .
			$acessorio->getTipo() . "','" .
			$acessorio->getMarca() . "'," .
			$acessorio->getQuantidade() . ",'" .
			$acessorio->getCor() . "'," .
			$acessorio->getPrecoAntigo() . "," .
			$acessorio->getPrecoNovo() . ",'" .
			$acessorio->getDescricao() . "')";

		if($conn->query($sql) == TRUE){
			header('location:../view/gerenciar-produtos.html');
		}else{
			echo "erro no cadastro: <br>".$conn->error;
		}
	}

	function consultar_codigo($codigo, $conn){
		$sql = "SELECT Codigo, Nome, Categoria, Tipo, Marca, Quantidade, Cor, PrecoAntigo, PrecoAtual, Descricao FROM acessorio WHERE Codigo=".$codigo;
		$res = $conn->query($sql);
		return $res;
	}

	function alterar_acessorio($codigo, $a, $conn){
		$sql = "UPDATE acessorio SET Nome='". $a->getNome() . "', Categoria='" . $a->getCategoria() . "', Tipo='" . $a->getTipo() . "', Marca='" . $a->getMarca() . "', Quantidade=" . $a->getQuantidade() . ", Cor='" . $a->getCor() . "', PrecoAntigo=" . $a->getPrecoAntigo() . ", PrecoAtual=" . $a->getPrecoNovo() . ", Descricao='" . $a->getDescricao() ."' WHERE Codigo=".$codigo;
		$res = $conn->query($sql);
		return $res;
	}

	function excluir_acessorio($codigo, $conn){
		$sql = "DELETE FROM acessorio WHERE Codigo=".$codigo;
		$res = $conn->query($sql);
		return $res;
	}
}

?>