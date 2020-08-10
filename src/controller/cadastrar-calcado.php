<?php

include_once '..\persistence\Conexao.php';
include_once '..\model\Calcados.php';
include_once '..\persistence\CalcadosDAO.php';

$nome= $_POST['nome'];
$categoria= $_POST['categoria'];
$tipo= $_POST['tipo'];
$marca= $_POST['marca'];
$quantidade= $_POST['quantidade'];
$cor= $_POST['cor'];
$tam35= $_POST['tam35'];
$tam36= $_POST['tam36'];
$tam37= $_POST['tam37'];
$tam38= $_POST['tam38'];
$tam39= $_POST['tam39'];
$tam40= $_POST['tam40'];
$tam41= $_POST['tam41'];
$tam42= $_POST['tam42'];
$tam43= $_POST['tam43'];
$tam44= $_POST['tam44'];
$precoAntigo= $_POST['precoAntigo'];
$precoNovo= $_POST['precoNovo'];
$descricao= $_POST['descricao'];

echo "<html><body><h1>"
		.$tam35." ".$tam36." ".$tam37." ".$tam38." ".$tam39." ".$tam40." ".$tam41." ".$tam42." ".$tam43. " ".$tam44.
		"</body></html>";

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$c = new Calcados($nome, $categoria, $tipo, $marca, $quantidade, $cor, $tam35, $tam36, $tam37, $tam38, $tam39, $tam40, $tam41, $tam42, $tam43, $tam44, $precoAntigo, $precoNovo, $descricao);

$calcadodao = new CalcadosDAO();
$calcadodao->salvar($c, $conexao);

?>