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
			
			$titulo = $_POST["titulo"];
			$autor = $_POST["autor"];
			$dataLancamento = $_POST["dataLancamento"];
			
			$livro = new Livro();
			  $livro->setTitulo($titulo);
			  $livro->setAutor($autor);
			  $livro->setDataLancamento($dataLancamento);
			  
			 
	$resultado = $livro->cadastrar();

	if ($resultado ==0)  {
		echo "livro cadastrado com sucesso com o código: ". $livro->getIdLivro();
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
