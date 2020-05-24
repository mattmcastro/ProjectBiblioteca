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
      <div class="card-header"><h3>Cadastro de Livro<h3></div>
      <div class="card-body">
        <form method="post" action="?act=salvaLivro">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4" id="container1">
                <label for="livro">Livro</label>
                <input class="form-control" id="titulo" name="titulo" type="text" aria-describedby="nameHelp" placeholder="titulo livro" required>
                <input class="form-control" id="autor" name="autor" type="text" aria-describedby="nameHelp" placeholder="autor" required>
                <input class="form-control" id="dataLancamento" name="dataLancamento" type="text" aria-describedby="nameHelp" placeholder="0000/00/00" required>
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
