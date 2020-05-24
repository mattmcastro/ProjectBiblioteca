<!DOCTYPE html>
<head>
  <meta charset="utf-8">
   <meta name="description" content="">
  <meta name="author" content="">
  <title>salva</title>
  
</head>
<body>


          <?php
		  
		  if ($_POST) {
			
			$nomeCliente = $_POST["nomeCliente"];
			$titulo = $_POST["titulo"];
			$dataRetirada = $_POST["dataRetirada"];
			$dataEntregue = $_POST["dataEntregue"];
			
			$aluga = new Aluga();
		
			$aluga->setNomeCliente($nomeCliente);
			$aluga->setTitulo($titulo);
			$aluga->setDataRetirada($dataRetirada);
			$aluga->setDataEntregue($dataEntregue);

			  
			 
	$resultado = $aluga->cadastrar();

	if ($resultado ==0)  {
		echo " Alugado com sucesso! ";
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
       
</body>

</html>
