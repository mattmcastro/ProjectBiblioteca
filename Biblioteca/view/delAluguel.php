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
              $idAluguel = $_POST["idAluguel"];
             
			  $aluga = new Aluga();
$aluga->setIdAluguel($idAluguel);

$resultado = $aluga->excluir();
	if ($resultado ==0) {
		?>
		<script language= "JavaScript">
		location.href="?act=aluguel";
		</script>
		<?php
		echo "	Aluguel excluido com sucesso com o código: ". $aluga->getIdAluguel();
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
