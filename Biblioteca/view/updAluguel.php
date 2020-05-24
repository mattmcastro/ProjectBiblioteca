<!DOCTYPE html>

<head>
  <meta charset="utf-8">
    <meta name="description" content="">
  <meta name="author" content="">
  <title>Update</title>
 </head>

<body>

        <div >
          <?php
		  if ($_POST) {
			  $idAluguel = $_POST["idAluguel"];
              $nomeCliente = $_POST["nomeCliente"];
              $titulo = $_POST["titulo"];
			  $dataRetirada = $_POST["dataRetirada"];
			  $dataEntregue = $_POST["dataEntregue"];
			  
              $aluga = new Aluga();
			  $aluga->setIdAluguel($idAluguel);
			  $aluga->setNomeCliente($nomeCliente);
			  $aluga->setTitulo($titulo);
              $aluga->setDataRetirada($dataRetirada);
			  $aluga->setDataEntregue($dataEntregue);
			  $resultado = $aluga->alterar();
	if ($resultado ==0) { 
		?>
		<script language= "JavaScript">
		location.href="?act=aluguel";
		</script>
		<?php
		echo "alterado com sucesso com o código: ". $aluga->getIdAluguel();
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
