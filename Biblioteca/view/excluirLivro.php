<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Excluir</title>
  <link  href="css/style.css" rel="stylesheet" type="text/css">

  </head>

<body>
 
		  <div>
<?php
if ($_GET) {
    $idLivro = $_GET["id"];
    
    $livro = new Livro();

    $livro ->buscar($idLivro);
?>		  
      <div class="card-header"><h3>Excluir Livro</h3></div>
      <div class="card-body">
        <form method="post" action="?act=delLivro">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4" id="container1">
                <label for="Livro">Livro</label>
				        <input type="hidden" name="idLivro" value="<?php echo $livro->getIdLivro(); ?>"/>
                <input class="form-control" id="titulo" name="titulo" value="<?php echo $livro->getTitulo(); ?>" type="text" aria-describedby="nameHelp" placeholder="Titulo" disabled>
                <input class="form-control" id="autor" name="autor" value="<?php echo $livro->getAutor(); ?>" type="text" aria-describedby="nameHelp" placeholder="autor" disabled>
              <br/>
              <button class="btn btn-primary btn-block" type="submit">Excluir</button>
              </div>
              
            </div>
          </div>
          
          
        </form>
<?php }

?>
      </div>
   
</body>

</html>
