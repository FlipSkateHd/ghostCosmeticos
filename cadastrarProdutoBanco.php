<?php
session_start();

include 'conexao.php';
$tabela = "produtos";



$nome  = $_POST['nome'];
$marca = $_POST['marca'];
$setor = $_POST['setor'];
$precoCusto  = $_POST['precoCusto'];
$precoVenda  = $_POST['precoVenda'];
$quantMinima  = $_POST['quantMinima'];
$quantEstoque  = $_POST['quantEstoque'];



$sql = "INSERT INTO `{$tabela}` (`nome_produto`, `marca_produto`, `setor_produto`, `preco_custo`, `preco_venda`, `quantidade_minima`, `quantidade_estoque`)  
        VALUES ('$nome', '$marca', '$setor', '$precoCusto', '$precoVenda', $quantMinima , $quantEstoque);";

if ($conexao->query($sql) === true) {
  echo "cadastrado com sucesso <br> </br>";
  echo '<a href="produtos.php">Voltar</a>';
} else {
  echo "Erro ao cadastrar: " . $conexao->error;
}

$conexao->close();
?>

