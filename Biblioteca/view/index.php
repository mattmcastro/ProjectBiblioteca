<!DOCTYPE html>

<head>
  <meta charset="utf-8">
    <meta name="description" content="">
  <meta name="author" content="">
  <link href="css/style.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <title>IndexView</title>

</head>

<body>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/imagem1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/imagem2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/imagem3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="col-md-12" id = "color">
  <center><h2> Cadastros</h2></center>
</div>
<div class= "container-fluid">
<br>

 <div style="clear:both; margin-top:20px">

		<div id="container1">	
						<div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5"><?php
			   $cliente = New Cliente();
			  
				 $total = $cliente->contagem();
				 echo $total;
				 ?> Clientes! </div>
		
            </div>
            <a class="card-footer text-white clearfix small z-1" href="?act=cliente">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              <i class="fas fa-user"></i>
              </div>
              <div class="mr-5">
								
							<div class="box"><?php
    			  
    			  $livro = New Livro();
    			  
    			  $total = $livro->contagem();
    			  echo $total;
    			  ?> Livros! </div>
							</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="?act=livro">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php
    			  
    			  $aluga = New Aluga();
    			  
    			  $total = $aluga->contagem();
    			  echo $total;
						?> Aluguéis! </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="?act=aluguel">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
</div>
</div>
		<!-- Bootstrap core JavaScript
		================================================== -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
    <script src="js/examples.js"></script>
	</body>
</html>
