<?php
#classe responsavel pela comunicação com o banco de dados na tabela roupa

class RoupasDAO{
	function __construct(){}

	function salvar($roupa, $conn){
		$sql = "INSERT INTO roupa(Nome, Categoria, Tipo, Marca, Quantidade, Cor, QtdP, QtdM, QtdG, QtdGG, PrecoAntigo, PrecoAtual, Descricao) VALUES ('" .
			$roupa->getNome() . "','" .
			$roupa->getCategoria() . "','" .
			$roupa->getTipo() . "','" .
			$roupa->getMarca() . "'," .
			$roupa->getQuantidade() . ",'" .
			$roupa->getCor() . "'," .
			$roupa->getTamP() . "," .
			$roupa->getTamM() . "," .
			$roupa->getTamG() . "," .
			$roupa->getTamGG() . "," .
			$roupa->getPrecoAntigo() . "," .
			$roupa->getPrecoNovo() . ",'" .
			$roupa->getDescricao() . "')";

		if($conn->query($sql) == TRUE){
			header('location:../view/gerenciar-produtos.html');
		}else{
			echo "erro no cadastro: <br>".$conn->error;
		}
	}

	function consultar_codigo($codigo, $conn){
		$sql = "SELECT Codigo, Nome, Categoria, Tipo, Marca, Quantidade, Cor, QtdP, QtdM, QtdG, QtdGG, PrecoAntigo, PrecoAtual, Descricao FROM roupa WHERE Codigo=".$codigo;
		$res = $conn->query($sql);
		return $res;
	}

	function alterar_roupa($codigo, $r, $conn){
		$sql = "UPDATE roupa SET Nome='". $r->getNome() . "', Categoria='" . $r->getCategoria() . "', Tipo='" . $r->getTipo() . "', Marca='" . $r->getMarca() . "', Quantidade=" . $r->getQuantidade() . ",Cor='" . $r->getCor() . "', QtdP=" . $r->getTamP() . ", QtdM=" . $r->getTamM() . ", QtdG=" . $r->getTamG() . ", QtdGG=" . $r->getTamGG() . ", PrecoAntigo=" . $r->getPrecoAntigo() . ", PrecoAtual=" . $r->getPrecoNovo() . ", Descricao='" . $r->getDescricao() ."' WHERE Codigo=".$codigo;
		$res = $conn->query($sql);
		return $res;
	}

	function excluir_roupa($codigo, $conn){
		$sql = "DELETE FROM roupa WHERE Codigo=".$codigo;
		$res = $conn->query($sql);
		return $res;
	}

}

?>