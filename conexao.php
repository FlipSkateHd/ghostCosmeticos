<?php
$IP = "127.0.0.1";
$usuarioDB = "root"; // <----- deixe de acordo com a config do banco de dados
$senhaDB = "";
$database = "bru_db"; // <----- escreva o banco de dados corretamente aqui

$conexao = new mysqli($IP, $usuarioDB, $senhaDB, $database);

if ($conexao->connect_errno) {
  die("Falha ao conectar-se ao Banco de dados: " . $conexao->connect_error);
}
