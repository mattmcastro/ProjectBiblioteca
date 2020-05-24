<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <title>Cliente</title>
 </head>
<body>
<div class="container-fluid">
  <table class="table table-bordered" width="100%" cellspacing="0">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Data Lançamento</th>
        <th scope="col">Opções
      </tr>
    </thead>
    <tbody>
			<?php
			  $livro = new Livro();
			  //listar é um metodo
			  $dados = $livro->listar();
			  //dados é um array
        //cada linha será colocada dentro de Dado
        if(is_array($dados) || is_object($dados)){
			  foreach ($dados as $Dado) {
         
      ?>
          <tr scope="row">
            <td><a href="?act=alterarLivro&id=<?php echo $Dado["idLivro"]; ?>"><?php echo $Dado["idLivro"]; ?></a></td>
            <td><?php echo $Dado["titulo"];?></td>
            <td><?php echo $Dado["autor"];?></td>
            <td> <?php echo $Dado["dataLancamento"]; ?></td>
            <td><a class="btn btn-danger" href="?act=excluirLivro&id=<?php echo $Dado["idLivro"]; ?>">Excluir</a>
            <a class="btn btn-warning" href="?act=alterarLivro&id=<?php echo $Dado["idLivro"]; ?>">Alterar</a>
          </tr>
        <?php } 
      }
      else{?>
        <h4>Não foi possivel encontrar nenhum dado</h4> 
     <?php }?>  
    </tbody>
  </table>
</div>     
</body>
</html>