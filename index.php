<html>

<head>
  <title>Menu inicial</title>
  <link rel="stylesheet" type="text/css" href="css/inicio.css">
</head>

<body>
  <?php
  session_start();
  echo '
     <div class="divCentral">
      <h1>Bem vinda! ' . 'Bruna' . '</h1>
        <br>
          <br>
            <a href="produtos.php">Ver Estoque</a> <br>
            <a href="vendas.php">Ver Vendas</a>
      </div>

      ';
  ?>
</body>

</html>
