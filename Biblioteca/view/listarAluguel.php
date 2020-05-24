<!DOCTYPE html>

<head>
  <meta charset="utf-8">
 <meta name="description" content="">
  <meta name="author" content="">
  <title>Cadastro</title>
  <link  href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="Container-fluid">
      <div class="card-header"><h3>Lista de Aluguel</h3></div>
      <div class="card-body" >
        <form method="post" action="?act=lista">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4"id="container1">
                <label for="aluguel">Aluguel</label>
               
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
                
               
                  <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
              </div>
              
            </div>
          </div>
          
          
        </form>
        
     </div>
</div>
	 
	 

		  
        
</body>

</html>
