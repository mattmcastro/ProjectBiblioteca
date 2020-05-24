<!DOCTYPE html>

<head>
  <meta charset="utf-8">
 <meta name="description" content="">
  <meta name="author" content="">
  <title>Cadastro</title>
  
  <link  href="css/style.css" rel="stylesheet" type="text/css">
 
 
  
</head>
<body>
<div class="Container">
      <div class="card-header"><h3>Cadastro de Cliente</h3></div>
      <div class="card-body">
        <form method="post" action="?act=salvaCliente">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4" id="container1" id="degrade">
                <label for="cliente">Cliente</label>
                <input  class="form-control" id="nomecliente" name="nomeCliente" type="text" aria-describedby="nameHelp" placeholder="Nome cliente" required>
            
                <input class="form-control" id="emailCliente" name="emailCliente" type="text" aria-describedby="nameHelp" placeholder="Email cliente"required>
                <input class="form-control" id="telefone" name="telefone" type="text" aria-describedby="nameHelp" placeholder="00-0000-0000" required>
                <br/>
                <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
              </div>
              
            </div>
          </div>
          
          
        </form>
        
     </div>
</div>
	 
	 

		  
        
</body>

</html>
