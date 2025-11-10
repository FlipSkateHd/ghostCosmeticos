<html>

<head>
  <title>Cadastro de produtos</title>
</head>

<body>
  <h1> Sistema de vendas ghostBru </h1>
  <form method="post" action="cadastrarProdutoBanco.php" id="formlogin" name="formlogin">
    <h3>Insira o nome do produto:</h3>
    <label> Nome: </label>
    <input type="text" name="nome" required>
    <br />

    <h3>Insira a marca do produto:</h3>
    <label> Marca: </label>
    <input type="text" name="marca" required>
    <br />
 
   <h3>Insira o setor do produto:</h3>
    <label>Setor do produto(Cabelo, Estética, Higiêne): </label>
    <input type="text" name="setor" size="20">
    
    <h3>Insira o preço de custo do produto:</h3>
    <label> Preço de custo: </label>
    <input type="text" name="precoCusto" required>
    <br />
 
    <h3>Insira o preço de venda do produto:</h3>
    <label> Preço de venda: </label>
    <input type="text" name="precoVenda" required>
    <br />
 
    <h3>Insira a quantidade mínima do produto:</h3>
    <label> Quantidade mínima: </label>
    <input type="number" name="quantMinima" required>
    <br />
 
    <h3>Insira a quantidade em estoque do produto:</h3>
    <label> Quantidade em estoque: </label>
    <input type="number" name="quantEstoque" required>
    <br />
 

<center>
      <br>
      <input type="submit" value="Cadastrar Produto" />
    </center>
  </form>
  <a href="index.php">Voltar</a>
</body>

</html>
