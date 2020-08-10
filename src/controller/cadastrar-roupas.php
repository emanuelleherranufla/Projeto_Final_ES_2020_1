<?php

include_once '..\persistence\Conexao.php';
include_once '..\model\Roupas.php';
include_once '..\persistence\RoupasDAO.php';

$nome= $_POST['nome'];
$categoria= $_POST['categoria'];
$tipo= $_POST['tipo'];
$marca= $_POST['marca'];
$quantidade= $_POST['quantidade'];
$cor= $_POST['cor'];
$tamP= $_POST['tamP'];
$tamM= $_POST['tamM'];
$tamG= $_POST['tamG'];
$tamGG= $_POST['tamGG'];
$precoAntigo= $_POST['precoAntigo'];
$precoNovo= $_POST['precoNovo'];
$descricao= $_POST['descricao'];

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$r = new Roupas($nome, $categoria, $tipo, $marca, $quantidade, $cor, $tamP, $tamM, $tamG, $tamGG, $precoAntigo, $precoNovo, $descricao);

$roupadao = new RoupasDAO();
$roupadao->salvar($r, $conexao);

?>