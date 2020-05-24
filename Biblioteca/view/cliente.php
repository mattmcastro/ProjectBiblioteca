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
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Telefone</th>
				          <th scope="col">Opções
                </tr>
              </thead>
              <tbody>
			  <?php
			  //marca é classe 
			  //marcas é a instancia do objeto
			  $clientes = new Cliente();
			  //listar é um metodo
			  $dados = $clientes->listar();
        //dados é um array
        //cada linha será colocada dentro de Dado
        if(is_array($dados) || is_object($dados)){
          foreach ($dados as $Dado) {
           
        ?>
            <tr scope="row">
              <td><a href="?act=alterarCliente&id=<?php echo $Dado["idCliente"]; ?>"><?php echo $Dado["idCliente"]; ?></a></td>
              <td><?php echo $Dado["nomeCliente"];?></td>
              <td><?php echo $Dado["emailCliente"];?></td>
              <td> <?php echo $Dado["telefone"]; ?></td>
              <td><a class="btn btn-danger" href="?act=excluirCliente&id=<?php echo $Dado["idCliente"]; ?>">Excluir</a>
              <a class="btn btn-warning" href="?act=alterarCliente&id=<?php echo $Dado["idCliente"]; ?>">Alterar</a>
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