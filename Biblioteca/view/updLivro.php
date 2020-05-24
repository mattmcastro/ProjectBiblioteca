<!DOCTYPE html>

<head>
  <meta charset="utf-8">
    <meta name="description" content="">
  <meta name="author" content="">
  <title>Update</title>
  <link  href="css/style.css" rel="stylesheet" type="text/css">

 </head>

<body>

        <div class= "container-fluid" >
<br/>
          <?php
		  if ($_POST) {
			  $idLivro = $_POST["idLivro"];
              $titulo = $_POST["titulo"];
              $autor = $_POST["autor"];
              $dataLancamento = $_POST["dataLancamento"];
			  
              $livro = new Livro();
              $livro->setIdLivro($idLivro);
			  $livro->setTitulo($titulo);
              $livro->setAutor($autor);
			  $livro->setDataLancamento($dataLancamento);

			  $resultado = $livro->alterar();
	if ($resultado ==0) {
		
		?><script language= "JavaScript">
		location.href="?act=livro";
		</script>
		<?php echo "Livro alterado com sucesso com o código: ". $livro->getIdLivro();
		echo "<br/>";?>
	</div>
	<?php	
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
