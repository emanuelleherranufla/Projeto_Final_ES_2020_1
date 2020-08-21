<?php
#classe responsavel pela comunicação com o banco de dados na tabela calcado

class CalcadosDAO{
	function __construct(){}

	function salvar($calcado, $conn){
		$sql = "INSERT INTO calcado(Nome, Categoria, Tipo, Marca, Quantidade, Cor, Qtd35, Qtd36, Qtd37, Qtd38, Qtd39, Qtd40, Qtd41, Qtd42, Qtd43, Qtd44, PrecoAntigo, PrecoAtual, Descricao) VALUES ('" .
			$calcado->getNome() . "','" .
			$calcado->getCategoria() . "','" .
			$calcado->getTipo() . "','" .
			$calcado->getMarca() . "'," .
			$calcado->getQuantidade() . ",'" .
			$calcado->getCor() . "'," .
			$calcado->getTam35() . "," .
			$calcado->getTam36() . "," .
			$calcado->getTam37() . "," .
			$calcado->getTam38() . "," .
			$calcado->getTam39() . "," .
			$calcado->getTam40() . "," .
			$calcado->getTam41() . "," .
			$calcado->getTam42() . "," .
			$calcado->getTam43() . "," .
			$calcado->getTam44() . "," .
			$calcado->getPrecoAntigo() . "," .
			$calcado->getPrecoNovo() . ",'" .
			$calcado->getDescricao() . "')";

		if($conn->query($sql) == TRUE){
			header('location:../view/gerenciar-produtos.html');
		}else{
			echo $sql;
			echo "erro no cadastro: <br>".$conn->error;
		}
	}

	function consultar_codigo($codigo, $conn){
		$sql = "SELECT Codigo, Nome, Categoria, Tipo, Marca, Quantidade, Cor, Qtd35, Qtd36, Qtd37, Qtd38, Qtd39, Qtd40, Qtd41, Qtd42, Qtd43, Qtd44, PrecoAntigo, PrecoAtual, Descricao FROM calcado WHERE Codigo=".$codigo;
		$res = $conn->query($sql);
		return $res;
	}

	function alterar_calcado($codigo, $c, $conn){
		$sql = "UPDATE calcado SET Nome='". $c->getNome() . "', Categoria='" . $c->getCategoria() . "', Tipo='" . $c->getTipo() . "', Marca='" . $c->getMarca() . "', Quantidade=" . $c->getQuantidade() . ",Cor='" . $c->getCor() . "', Qtd35=" . $c->getTam35() . ", Qtd36=" . $c->getTam36() . ", Qtd37=" . $c->getTam37() . ", Qtd38=" . $c->getTam38() . ", Qtd39=" . $c->getTam39() . ", Qtd40=" . $c->getTam40() . ", Qtd41=" . $c->getTam41() . ", Qtd42=" . $c->getTam42() . ", Qtd43=" . $c->getTam43() . ", Qtd44=" . $c->getTam44() . ", PrecoAntigo=" . $c->getPrecoAntigo() . ", PrecoAtual=" . $c->getPrecoNovo() . ", Descricao='" . $c->getDescricao() ."' WHERE Codigo=".$codigo;
		$res = $conn->query($sql);
		return $res;
	}

	function excluir_calcado($codigo, $conn){
		$sql = "DELETE FROM calcado WHERE Codigo=".$codigo;
		$res = $conn->query($sql);
		return $res;
	}

}

?>