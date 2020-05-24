<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Excluir</title>
  </head>

<body>
  

        <div>
          <?php
		  if ($_GET) {
              $idCliente = $_POST["idCliente"];
             
			  $cliente = new Cliente();
$cliente->setidCliente($idCliente);

$resultado = $cliente->excluir();
	if ($resultado ==0) {
		?>
		<script language= "JavaScript">
		location.href="?act=cliente";
		</script>
		<?php
		echo "	Cliente excluido com sucesso com o código: ". $cliente->getIdCliente();
		echo "<br/>";
	}
	else {
		echo "Erro";
	}
			  
		  }
		  else {
			  echo "Dados não preenchidos";
		  }
		  ?>
        </div>
     
</body>

</html>
