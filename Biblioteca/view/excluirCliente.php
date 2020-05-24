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
    $idCliente = $_GET["id"];
    
    $clientes = new Cliente();

    $clientes ->buscar($idCliente);
?>		  
      <div class="card-header"><h3>Excluir Cliente</h3></div>
      <div class="card-body">
        <form method="post" action="?act=delCliente">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4" id="container1">
                <label for="cliente">Cliente</label>
				          <input type="hidden" name="idCliente" value="<?php echo $clientes->getIdCliente(); ?>"/>
                <input class="form-control" id="nomeCliente" name="nomeCliente" value="<?php echo $clientes->getnomeCliente(); ?>" type="text" aria-describedby="nameHelp" placeholder="Nome do CLiente" disabled>
                <input class="form-control" id="emailCliente" name="emailCliente" value="<?php echo $clientes->getEmailCliente(); ?>" type="text" aria-describedby="nameHelp" placeholder="email do CLiente" disabled>
                <input class="form-control" id="telefone" name="telefone" value="<?php echo $clientes->getTelefone(); ?>" type="text" aria-describedby="nameHelp" placeholder="telefone" disabled>

                <br>
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
