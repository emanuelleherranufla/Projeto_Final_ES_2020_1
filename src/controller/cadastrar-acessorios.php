<?php

include_once '..\persistence\Conexao.php';
include_once '..\model\Acessorios.php';
include_once '..\persistence\AcessoriosDAO.php';

$nome= $_POST['nome'];
$categoria= $_POST['categoria'];
$tipo= $_POST['tipo'];
$marca= $_POST['marca'];
$quantidade= $_POST['quantidade'];
$cor= $_POST['cor'];
$precoAntigo= $_POST['precoAntigo'];
$precoNovo= $_POST['precoNovo'];
$descricao= $_POST['descricao'];

$conexao = new Conexao();
$conexao = $conexao->getConnection();

$a = new Acessorios($nome, $categoria, $tipo, $marca, $quantidade, $cor, $precoAntigo, $precoNovo, $descricao);

$acessoriodao = new AcessoriosDAO();
$acessoriodao->salvar($a, $conexao);

?>