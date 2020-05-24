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
              $idLivro = $_POST["idLivro"];
             
			  $livro = new Livro();
$livro->setidLivro($idLivro);

$resultado = $livro->excluir();
	if ($resultado ==0) {
		?>
		<script language= "JavaScript">
		location.href="?act=livro";
		</script>
		<?php
		echo "	Livro excluido com sucesso com o código: ". $livro->getIdLivro();
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
