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
	$idAluguel = $_GET["id"];
	$aluga = new Aluga();
	$aluga ->buscar($idAluguel);
?>		  
      <div class="card-header"><h3>Atualização de aluguel</h3></div>
      <div class="card-body">
        <form method="post" action="?act=updAluguel">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4" id="container1">
                <label for="Aluguel">Aluguel</label>
				<input type="hidden" name="idAluguel" value="<?php echo $aluga->getIdAluguel(); ?>"/>
        <select class = "custom-select  mb-3" id="nomeCliente" name= "nomeCliente">
                <br/>
                <?php
                $clientes = new Cliente();
                
                $dados = $clientes -> listar ();
               
                foreach ($dados as $m){
                ?>
                
                <option value ="<?php echo $m["nomeCliente"]; ?>" ><?php echo $m["nomeCliente"];?></option>
                <?php
                }
                ?> 
                </select>
                
                <select class = "custom-select mb-3" id= "titulo" name= "titulo">
                <?php
                $livro = new Livro();
               
                $dados = $livro -> listar ();
               
                foreach ($dados as $m){
                ?>
                <option value ="<?php echo $m["titulo"]; ?>" ><?php echo $m["titulo"];?></option>
                <?php
                }
                ?> 
                <input class="form-control" id="dataRetirada" name="dataRetirada" value="<?php echo $aluga->getDataRetirada(); ?>" type="text" aria-describedby="nameHelp" placeholder="data retirada">
                <input class="form-control" id="dataEntregue" name="dataEntregue" value="<?php echo $aluga->getDataEntregue(); ?>" type="text" aria-describedby="nameHelp" placeholder="data entregue">
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
