<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="description" content="">
  <meta name="author" content="">
	<script>
		function carregar() {
    	alert("Cadastrado com sucesso");
	}</script>
	<title>Update</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">

 </head>

<body onload="carregar()">

        <div >
          <?php
		  if ($_POST) {
			  $idCliente = $_POST["idCliente"];
              $nomeCliente = $_POST["nomeCliente"];
              $emailCliente = $_POST["emailCliente"];
              $telefone = $_POST["telefone"];
			  
              $clientes = new Cliente();
              $clientes->setIdCliente($idCliente);
				$clientes->setNomeCliente($nomeCliente);
                $clientes->setEmailCliente($emailCliente);
				$clientes->setTelefone($telefone);
				$resultado = $clientes->alterar();

	if ($resultado ==0) {
		

		echo "Cliente alterado com sucesso com o código: ". $clientes->getIdCliente();
		echo "<br/>";
		?>
		<script language= "JavaScript">
	  location.href="?act=cliente";
	  </script> <?php
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

		<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
    <script src="js/examples.js"></script>
      
</body>

</html>
