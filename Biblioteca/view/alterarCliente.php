<!DOCTYPE html>

<head>
  <meta charset="utf-8">
<meta name="description" content="">
  <meta name="author" content="">
  <title>Alterar</title>
  <link  href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
  
          
		  <div >
<?php
if ($_GET) {
	$idCliente = $_GET["id"];
	$clientes = new Cliente();
	$clientes ->buscar($idCliente);
?>		  
      <div class="card-header"><h3>Atualização de cliente</h3></div>
      <div class="card-body">
        <form method="post" action="?act=updCliente">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4" id="container1">
                <label for="cliente">Cliente</label>
				<input type="hidden" name="idCliente" value="<?php echo $clientes->getIdCliente(); ?>"/>
                <input class="form-control" id="nomeCliente" name="nomeCliente" value="<?php echo $clientes->getnomeCliente(); ?>" type="text" aria-describedby="nameHelp" placeholder="Nome cliente">
                <input class="form-control" id="emailCliente" name="emailCliente" value="<?php echo $clientes->getemailCliente(); ?>" type="text" aria-describedby="nameHelp" placeholder="email cliente">
                <input class="form-control" id="telefone" name="telefone" value="<?php echo $clientes->gettelefone(); ?>" type="text" aria-describedby="nameHelp" placeholder="Telefone cliente">
                <br/>
                <button class="btn btn-primary btn-block" type="submit">Alterar</button>
              </div>
              
            </div>
          </div>
          
          
        </form>
<?php }

?>
      </div>
    
</body>

</html>
