<html>
<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>

<?php
session_start();

include 'conexao.php';
$tabela = "produtos";


$busca = $_POST['busca'];

$sql = "SELECT * FROM  $tabela ";

$resultado = $conexao->query($sql);

if ($resultado->num_rows == true) {
  echo '
<table>
    <tr>
<th>Produto</th>
<th>Marca</th>
<th>Setor</th>
<th>Preço de custo</th>
<th>Preço de Venda</th>
<th>quantidade minima</th>
<th>quantidade no estoque</th>

</tr>';


  while ($row = $resultado->fetch_assoc()) { // Código para exibir os produtos:

    echo '<tr>';
    echo '<td> ' . $row['nome_produto'] . '</td>';
    echo '<td> ' . $row['marca_produto'] . '</td>';
    echo '<td> ' . $row['setor_produto'] . '</td>';
    echo '<td> ' . $row['preco_custo'] . ' R$' . '</td>';
    echo '<td> ' . $row['preco_venda'] . ' R$' . '</td>';
    echo '<td> ' . $row['quantidade_minima'] . '</td>';
    echo '<td> ' . $row['quantidade_estoque'] . '</td>';
    echo '</tr>';
  }

  echo '</table>';
  echo '<br> <a href="index.php">Voltar</a>';
} else {
  echo "Erro ao consultar: " . $conexao->error;
}

?>

</html>
