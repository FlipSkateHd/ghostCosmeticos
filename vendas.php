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
$tabela = "vendas";


$busca = $_POST['busca'];


/// Select com Join 
//$sqlEmprestimos = "SELECT 
//  e.id_emprestimo AS idEmprestimo,
//  e.status AS statusEmprestimo, 
//  e.data_emprestimo AS dataEmprestimo,
//  e.data_devolucao AS dataDevolucao,
//  p.nome AS nomeProduto,
//  ie.quantidade_emprestada
//FROM emprestimos e
//JOIN itens_emprestimo ie ON e.id_emprestimo = ie.id_emprestimo
//JOIN produtos p ON ie.id_produto = p.id
//  WHERE p.id = $id 
//  AND e.status = 'pendente'
// ORDER BY e.data_emprestimo DESC";


$sql = "SELECT * FROM  $tabela ";

$resultado = $conexao->query($sql);

if ($resultado->num_rows == true) {
  echo '
<table>
    <tr>
<th>Id de Venda</th>
<th>Id do produto</th>
<th>Data de venda</th>
<th>quantidade vendida</th>

</tr>';


  while ($row = $resultado->fetch_assoc()) { // Código para exibir os produtos:

    echo '<tr>';
    echo '<td> ' . $row['id_venda'] . '</td>';
    echo '<td> ' . $row['id_produto_vendido'] . '</td>';
    echo '<td> ' . $row['data_venda']  . '</td>';
    echo '<td> ' . $row['quantidade_vendida'] . '</td>';
    echo '</tr>';
  }

  echo '</table>';
  echo '<br> <a href="index.php">Voltar</a>';
} else {
  echo "Erro ao consultar: " . $conexao->error;
}

?>
<h3><a href="produtos.php"> Cadastrar nova venda </a></h3>
</html>
