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
    $idAluguel = $_GET["id"];
    
    $aluga = new Aluga();

    $aluga ->buscar($idAluguel);
?>		  
      <div class="card-header"><h3>Excluir Aluguel</h3></div>
      <div class="card-body">
        <form method="post" action="?act=delAluguel">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4" id="container1">
                <label for="aluga">Aluguel</label>
				<input type="hidden" name="idAluguel" value="<?php echo $aluga->getIdAluguel(); ?>"/>
                <input class="form-control" id="nomeCliente" name="nomeCliente" value="<?php echo $aluga->getnomeCliente(); ?>" type="text" aria-describedby="nameHelp" placeholder="Nome do CLiente" disabled>
                <input class="form-control" id="titulo" name="titulo" value="<?php echo $aluga->getTitulo(); ?>" type="text" aria-describedby="nameHelp" placeholder="titulo" disabled>
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
