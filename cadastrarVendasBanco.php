<?php
session_start();
include 'conexao.php';
$tabela - 'vendas';

$idProduto = $_GET['id'];

$sql = "INSERT INTO $tabela (`id_produto_vendido`, `data_venda`, `quantidade_vendida`)  
  VALUES ('[value-1]','[value-2]','[value-3]','[value-4]' )
  ;" ;

