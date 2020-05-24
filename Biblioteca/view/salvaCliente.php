<!DOCTYPE html>
<head>
  <meta charset="utf-8">
   <meta name="description" content="">
  <meta name="author" content="">
  <title>salva</title>
  <link  href="styles/style.css" rel="stylesheet" type="text/css">

</head>
<body>


          <?php
		  if ($_POST) {
			
			$nomeCliente = $_POST["nomeCliente"];
			$emailCliente = $_POST["emailCliente"];
			$telefone = $_POST["telefone"];
			
			$clientes = new Cliente();
			
			  $clientes->setNomeCliente($nomeCliente);
			  $clientes->setEmailCliente($emailCliente);
			  $clientes->setTelefone($telefone);
			  
			 
$resultado = $clientes->cadastrar();

	if ($resultado ==0)  {
		
		echo "Cliente cadastrado com sucesso com o código: ". $clientes->getIdCliente();
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
